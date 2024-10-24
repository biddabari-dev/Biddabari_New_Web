@extends('frontend.master')
@section('meta-url'){{ request()->url() }}@endsection
@section('title')
Biddabari - Login
@endsection

@section('body')

<main>
    <section id="Signup">
        <div class="container py-5">
            <div class="row justify-content-center">
                <div class="col-md-10 col-lg-8">
                    <div class="signup-area">
                        <div class="row g-4">
                            <div class="col-md-6">
                                <div class="signup-image-area text-center">
                                    <h4><strong> Welcome to <br><span class="text-brand"> Biddabari </span> Online Learning Platform </strong></h4>
                                    <img src="{{ asset('frontend') }}/assets/images/signup/signup.png" alt="" srcset="">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="signup-form-area">
                                    <h4 class="text-center">Sign up</h4>
                                    <div class="signup-form">
                                        <!-- Signup Form -->
                                        <form id="registerForm" action="{{ route('register') }}" method="POST">
                                            @csrf
                                            <div class="mb-3">
                                                <label for="name" class="form-label">Full Name</label>
                                                <div class="position_relative">
                                                    <i class="fa-regular fa-user input-icon"></i>
                                                    <input type="text" class="form-control icon-input @error('name') is-invalid @enderror"
                                                        id="name" name="name" value="{{ old('name') }}" placeholder="Enter your full name"
                                                        aria-describedby="nameHelp">
                                                </div>
                                                @error('name')
                                                    <span class="invalid-feedback d-block">{{ $message }}</span>
                                                @enderror
                                            </div>

                                            <div class="mb-3">
                                                <label for="email" class="form-label">Mobile No.</label>
                                                <div class="position_relative">
                                                    <input type="number" class="form-control icon-input @error('mobile') is-invalid @enderror"
                                                        id="mobile" name="mobile" placeholder="Enter your mobile number"
                                                        aria-describedby="emailHelp">
                                                    <i class="fa-solid fa-phone input-icon"></i>
                                                </div>
                                                @error('mobile')
                                                    <span class="invalid-feedback d-block">{{ $message }}</span>
                                                @enderror
                                            </div>

                                            <div class="mb-3">
                                                <label for="password" class="form-label">Password</label>
                                                <div class="position_relative">
                                                    <i class="fa-solid fa-lock input-icon"></i>
                                                    <input type="password" class="form-control icon-input @error('password') is-invalid @enderror"
                                                        id="password" name="password" placeholder="Enter your password"
                                                        aria-describedby="passwordHelp">
                                                </div>
                                                @error('password')
                                                    <span class="invalid-feedback d-block">{{ $message }}</span>
                                                @enderror
                                            </div>

                                            <button type="button" id="submitBtn" class="btn btn_warning">Submit</button>
                                        </form>
                                        <h6>Already have a account ? <span> <a href="{{ route('login') }}"> Sign In
                                                </a></span></h6>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

</main>
<!-- OTP Modal -->
<div class="modal fade" id="otpModal" tabindex="-1" aria-labelledby="otpModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered"> <!-- Added 'modal-dialog-centered' class -->
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="otpModalLabel">Enter OTP</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <input type="text" id="otpNumber" class="form-control" placeholder="Enter OTP">
            </div>
            <div class="modal-footer">
                <button type="button" id="verifyOtpBtn" class="btn btn_warning">Verify OTP</button>
            </div>
        </div>
    </div>
</div>

@endsection
@push('script')
<script>
$(document).ready(function() {
        // When user clicks submit button
        $('#submitBtn').on('click', function(e) {
            e.preventDefault();

            var mobileNumber = $('#mobile').val();

            // Validate mobile number first
            if (mobileNumber == '') {
                alert('Please enter your mobile number.');
                return;
            }

            // Open the OTP modal
            $('#otpModal').modal('show');

            // Send OTP to mobile number
            $.ajax({
                url: "{{ route('front.verify-otp') }}",
                method: "POST",
                dataType: "JSON",
                data: { mobile_number: mobileNumber },
                success: function(data) {
                    if (data.status == 'success') {
                        console.log('OTP sent to mobile number');
                    } else {
                        console.log('Failed to send OTP');
                    }
                }
            });
        });

        // Verify OTP when clicking verify button
        $('#verifyOtpBtn').on('click', function() {
            var otpNumber = $('#otpNumber').val();
            var mobileNumber = $('#mobile').val();

            $.ajax({
                url: "{{ route('front.verify-otp') }}",
                method: "POST",
                dataType: "JSON",
                data: { otp: otpNumber, mobile_number: mobileNumber },
                success: function(data) {
                    if (data.status == 'success') {
                        // Close the OTP modal
                        $('#otpModal').modal('hide');

                        if (data.user_status == 'exist') {
                            // Existing user logic
                            $('#registerForm').attr('action', '{{ route("login") }}');
                        }

                        // Submit the form after OTP verification
                        $('#registerForm').submit();
                    } else {
                        alert('Invalid OTP. Please try again.');
                    }
                },
                error: function() {
                    alert('An error occurred. Please try again.');
                }
            });
        });
});
</script>
@endpush
