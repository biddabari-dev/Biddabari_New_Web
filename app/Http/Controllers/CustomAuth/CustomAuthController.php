<?php

namespace App\Http\Controllers\CustomAuth;

use App\helper\ViewHelper;
use App\Http\Controllers\Controller;
use App\Models\Backend\UserManagement\Student;
use App\Http\Controllers\Frontend\Checkout\CheckoutController;
use App\Models\User;
use GuzzleHttp\Client;
use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Xenon\LaravelBDSms\Facades\SMS;
use Xenon\LaravelBDSms\Provider\MimSms;
use Xenon\LaravelBDSms\Sender;
use App\Http\Requests\Auth\UserRegisterRequest;
use Hash;

class CustomAuthController extends Controller
{
    protected $email, $phone, $password, $user;
    public function login(Request $request)
    {

        $this->validate($request, [
            'mobile' => ['required', 'numeric', 'regex:/^(?:\+88|88)?(01[3-9]\d{8})$/'],
            'password' => ['required']
        ]);

        if (auth()->attempt($request->only(['mobile', 'password']), $request->remember_me)) {

            $this->user = auth()->user();
            $this->user->device_token = session()->getId();
            $this->user->save();

            if (str()->contains(url()->current(), '/api/')) {
                return response()->json([
                    'user'      => $this->user,
                    'auth_token' => $this->user->createToken('auth_token')->plainTextToken,
                    'status'    => 200
                ]);
            } else {
                $appUrl = config('app.url');
                $redirectUrl = Session::get('course_redirect_url');
                if (Session::has('course_redirect_url') && $appUrl != $redirectUrl) {
                    Session::forget('course_redirect_url');
                    if ($request->ajax()) {
                        return response()->json(['status' => 'success', 'url' => $redirectUrl]);
                    } else {
                        return redirect($redirectUrl)->with('success', 'You are successfully logged in.');
                    }
                }
                return redirect(route('dashboard'))->with('success', 'You are successfully logged in.');
            }

        } else {
            // Handling failed login attempt
            if ($request->ajax()) {
                return response()->json(['status' => 'error', 'message' => 'Incorrect phone number or password!'], 401);
            } else {
                return redirect()->back()->withErrors(['mobile' => 'Incorrect phone number or password!'])->withInput();
            }
        }

    }

    public function registerOtp (UserRegisterRequest $request)
    {
        $this->validate($request, [
            'name' => ['required'],
            'mobile' => ['required', 'numeric', 'regex:/^(?:\+88|88)?(01[3-9]\d{8})$/'],
            'password' => ['required', 'confirmed']
        ]);

        $exists = User::where('mobile', $request->mobile)->exists();
        if ($exists) {
            return back()->with('error', 'Mobile number already exists.');
        }else{
            $otpNumber = rand(1000, 9999);
            $client = new Client();
            $response = $client->request('GET', 'https://msg.elitbuzz-bd.com/smsapi', [
                'query' => [
                    'api_key' => 'C2008649660d0a04f3d0e9.72990969',
                    'type' => 'text',
                    'contacts' => $request->mobile,
                    'senderid' => '8809601011181',
                    'msg' => 'Biddabari OTP is ' . $otpNumber,
                ]
            ]);
            // Parse response to get the response code
            $responseCode = explode(':', $response->getBody()->getContents())[1];
            // If OTP sent successfully
             if (!empty($responseCode)) {
                $mobile = $request->mobile;
                $maskedMobile = '*******' . substr($mobile, -4);
                session()->put([
                    'otp' => $otpNumber,
                    'mobile' => $mobile,
                    'name' => $request->name,
                    'password' => $request->password,
                ]);
                return view('backend.auth.user_login_otp',['otp'=> $otpNumber, 'mobile'=> $mobile ,'maskedMobile' => $maskedMobile]);
            } else {
                return response()->json(['status' => 'false', 'message' => 'Failed to send OTP.']);
            }
        }
    }

    public function register (Request $request)
    {

        // Merge session data into request
        $request->merge([
            'name' => session()->get('name'),
            'mobile' => session()->get('mobile'),
            'password' => session()->get('password'),
            'roles' => 4,
            'request_form' => 'student',
        ]);
        try {
            DB::beginTransaction();
            $this->user = User::createOrUpdateUser($request);

            if (isset($this->user)) {

                Student::createOrUpdateStudent($request, $this->user);

                Auth::login($this->user);
                $this->user->device_token = session()->getId();
                $this->user->save();
                if (str()->contains(url()->current(), '/api/')) {
                    return response()->json(['user' => $this->user, 'auth_token' => $this->user->createToken('auth_token')->plainTextToken]);
                } else {
                    if (Session::has('course_redirect_url')) {
                        $redirectUrl = Session::get('course_redirect_url');
                        Session::forget('course_redirect_url');
                        if ($request->ajax())
                        {
                            return response()->json(['status' => 'success','url' => $redirectUrl]);
                        } else {
                            return redirect($redirectUrl)->with('success', 'Your registration completed successfully.');
                        }
                    }
                    if ($request->roles == 4) {
                        return redirect()->route('home')->with('success', 'Your registration completed successfully.');
                    }
                    return redirect()->route('home')->with('success', 'Your registration completed successfully.');
                }
            }
            DB::commit();
        } catch (\Exception $exception)
        {
            DB::rollBack();
            if (str()->contains(url()->current(), '/api/')) {
                return response()->json(['error' => $exception->getMessage()],500);
            } else {
                if ($request->ajax())
                {
                    return response()->json(['status' => 'error']);
                }
                return redirect('/register')->with('error', $exception->getMessage());
            }
        }

    }

    public function sendOtp(Request $request)
    {
        $otpNumber = rand(1000, 9999);
        try {
            // Check if the user already exists by mobile number
            $existUser = User::whereMobile($request->mobile)->first();

            // If user does not exist, proceed with sending the OTP
            if (!isset($existUser)) {
                $client = new Client();
                $response = $client->request('GET', 'https://msg.elitbuzz-bd.com/smsapi', [
                    'query' => [
                        'api_key' => 'C2008649660d0a04f3d0e9.72990969',
                        'type' => 'text',
                        'contacts' => $request->mobile,
                        'senderid' => '8809601011181',
                        'msg' => 'Biddabari OTP is ' . $otpNumber,
                    ]
                ]);

                // Parse response to get the response code
                $responseCode = explode(':', $response->getBody()->getContents())[1];

                // If OTP sent successfully
                if (!empty($responseCode)) {
                    session()->put('otp', $otpNumber); // Use Laravel's session helper
                    return response()->json(['otp' => $otpNumber, 'status' => 'success', 'user_status' => 'not_exist']);
                } else {
                    return response()->json(['status' => 'false', 'message' => 'Failed to send OTP.']);
                }
            } else {
                // User already exists
                return response()->json([
                    'status' => 'success',
                    'user_status' => 'exist',
                ]);
            }

        } catch (\Exception $exception) {
            // Return structured error message for the frontend
            return response()->json([
                'status' => 'error',
                'message' => 'An error occurred while sending OTP. Please try again later.'
            ], 500); // HTTP 500 Internal Server Error
        }
    }


    public function verifyOtp (Request $request)
    {
//        $existUser = User::whereMobile($request->mobile_number)->first();
//        return $existUser;
        session_start();
        try {
            // if ($_SESSION['otp'] == $request->otp)\
            if (Session::get('otp') == $request->otp)
            {
                \session()->forget('otp');
                $existUser = User::whereMobile($request->mobile)->first();
                return response()->json([
                    'status' => 'success',
                    'user_status' => isset($existUser) ? 'exist' : 'not_exist',
                ]);
            } else {
                return response()->json(['error'=> 'OTP mismatch. Please Try again.']);
            }
        } catch (\Exception $exception)
        {
            return response()->json($exception->getMessage());
        }
    }
    public function checkUserForApp (Request $request)
    {

        try {
            $existUser = User::whereMobile($request->mobile_number)->first();
            return response()->json([
                'status' => 'success',
                'user_status' => isset($existUser) ? 'exist' : 'not_exist',
            ]);
        } catch (\Exception $exception)
        {
            return response()->json($exception->getMessage());
        }
    }

    public function forgotPassword ()
    {
        return view('backend.auth.forgot-password');
    }

    public function passResetOtp (Request $request)
    {
        $otpNumber = rand(1000, 9999);
        try {
            $client = new Client();
            //$body = $client->request('GET', 'http://sms.felnadma.com/api/v1/send?api_key=44516684285595991668428559&contacts=88'.$request->mobile.'&senderid=01844532630&msg=Biddabari+OTP+is+'.$otpNumber);
             $body = $client->request('GET', 'https://msg.elitbuzz-bd.com/smsapi?api_key=C2008649660d0a04f3d0e9.72990969&type=text&contacts='.$request->mobile.'&senderid=8809601011181&msg=Biddabari+OTP+is+'.$otpNumber);

            //$body = $client->request('GET', 'https://rapidapi.mimsms.com/smsapi?user=M00155&password=XbaWlww&sender=8809617612356&msisdn='.$request->mobile.'&smstext=Biddabari+OTP+is+'.$otpNumber);



            //$responseCode = explode(':', explode(',', $body->getBody()->getContents())[0])[1];
            $responseCode = explode(':',$body->getBody()->getContents() )[1];

            //if (isset($responseCode) && !empty($responseCode) && $responseCode === "\"445000\"")
            if (isset($responseCode) && !empty($responseCode))
            {
                session_start();
                $_SESSION['otp'] = $otpNumber;
                if (str()->contains(url()->current(), '/api/'))
                {
                    return response()->json([
                        'otp'       => $otpNumber,
                        'encoded_otp'       => base64_encode($otpNumber),
                        'mobile'    => $request->mobile,
                        'message'   => 'OTP send successfully',
                    ]);
                }
                return redirect(url('/password-reset-otp?mn='.$request->mobile.'&oc='.base64_encode($otpNumber)))->with('success', 'OTP send successfully');
            } else {
                return ViewHelper::returEexceptionError('Invalid Mobile Number or Format. Please Try again.');
//                return back()->with('error', 'Invalid Mobile Number or Format. Please Try again.');
            }
        } catch (\Exception $exception)
        {
            return ViewHelper::returEexceptionError('Something went wrong. Please try again');
//            return redirect()->back()->with('error', 'Something went wrong. Please try again');
        }
    }

    public function passwordResetOtp()
    {
        return view('backend.auth.password-reset-otp');
    }

    public function verifyPassResetOtp(Request $request)
    {
        $request->validate([
            'otp' => 'required|numeric',
            'password' => 'required|string|min:6',
        ]);

        if (isset($request->enc_otp))
        {
            if ($request->otp == base64_decode($request->enc_otp))
            {
                $user = User::where(['mobile' => $request->mobile])->first();
                $user->password = bcrypt($request->password);
                $user->save();
                if (str()->contains(url()->current(), '/api/'))
                {
                    return response()->json([
                        'status'    => 'success',
                        'message' => 'Password changed successfully.'
                    ]);
                }
                return redirect('/login')->with('success', 'Password Changed successfully.');
            } else {
                return ViewHelper::returEexceptionError('OTP mismatch. Please try again.');
//                return back()->with('error', 'OTP mismatch. Please try again.');
            }
        } else
        {
            return ViewHelper::returEexceptionError('Invalid Otp. Please try again.');
//            return back()->with('error', 'Invalid Otp. Please try again.');
        }
    }
}
