@extends('frontend.master')
@section('meta-url'){{ request()->url() }}@endsection
@section('title')
Biddabari - User registration form
@endsection

@section('body')

<main>
    <section id="Signup">
        <div class="container py-5">
            <div class="row justify-content-center">
                <div class="col-md-6 col-lg-4">
                    <div class="signup-area">
                        <div class="row g-4">
                            <div class="col-md-12 ms-auto">
                                <div class="signup-form-area">
                                    <h4 class="text-center">OTP</h4>
                                    <div class="signup-form">
                                        <!-- Signup Form -->
                                        <form id="registerForm" action="{{ route('register') }}" method="POST">
                                            @csrf
                                            @method('POST')
                                            <p class="text-center text-center h5 ">Please check your Phone</p>
                                            <p class="text-center mb-0">A code has been sent to {{ $maskedMobile }}</p>
                                            <div class="py-lg-4 py-3">
                                                <div class="row">
                                                    <div class="col-3">
                                                        <input type="hidden" id="mobile" value="{{ $mobile }}">
                                                        <input id="otp1" maxlength="1" class="otp-letter-input" type="text"
                                                            oninput="moveToNext(this, 'otp2')" onfocus="checkValue(this)">
                                                    </div>
                                                    <div class="col-3">
                                                        <input id="otp2" maxlength="1" class="otp-letter-input" type="text"
                                                            oninput="moveToNext(this, 'otp3')" onkeydown="moveToPrevious(event, 'otp1')"
                                                            onfocus="checkValue(this)">
                                                    </div>
                                                    <div class="col-3">
                                                        <input id="otp3" maxlength="1" class="otp-letter-input" type="text"
                                                            oninput="moveToNext(this, 'otp4')" onkeydown="moveToPrevious(event, 'otp2')"
                                                            onfocus="checkValue(this)">
                                                    </div>
                                                    <div class="col-3">
                                                        <input id="otp4" maxlength="1" class="otp-letter-input" type="text"
                                                            onkeydown="moveToPrevious(event, 'otp3')" onfocus="checkValue(this)">
                                                    </div>
                                                    <span class="invalid-feedback d-block otp-error"></span>
                                                </div>
                                            </div>
                                            <p class="text-50 text-center">
                                                Didn't receive the code? <br>
                                                <a href="#" id="resendLink" onclick="resendOTP()" class=""><strong> Click to Resend </strong></a>
                                                <span id="timer" class="ml-2"></span>
                                            </p>
                                            <button type="button" id="submitBtn" class="btn btn_warning">Verify</button>
                                        </form>
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


@endsection
@push('style')
<style>
    .otp-letter-input {
        width: 100%;
        height: 60px;
        border: 2px solid rgb(170, 7, 107);
        border-radius: 10px;
        color: rgb(170, 7, 107);
        font-size: 30px;
        text-align: center;
        font-weight: bold;
    }
</style>
@endpush
@push('script')
<script type="text/javascript">
    function moveToNext(current, nextFieldID) {
        if (current.value.length === current.maxLength) {
            document.getElementById(nextFieldID).focus();
        }
    }

    function moveToPrevious(event, prevFieldID) {
        if (event.key === "Backspace" && event.target.value === '') {
            document.getElementById(prevFieldID).focus();
        }
    }

    // Ensure that if a field already has a value, it still functions correctly
    function checkValue(current) {
        if (current.value.length === current.maxLength) {
            current.select(); // Select the value so user can replace it
        }
    }
</script>
<script>
    localStorage.setItem('otp', {{ $otp }});

    let timerInterval;
    const resendLink = document.getElementById('resendLink');
    const timerDisplay = document.getElementById('timer');

    function startTimer(duration) {
        let timeRemaining = duration;

        resendLink.style.pointerEvents = 'none';
        resendLink.style.color = '#999';  // Dim the resend link color

        timerInterval = setInterval(() => {
            let minutes = Math.floor(timeRemaining / 60);
            let seconds = timeRemaining % 60;

            // Display the countdown
            timerDisplay.textContent = `(${minutes}:${seconds < 10 ? '0' + seconds : seconds})`;

            // When countdown reaches zero
            if (timeRemaining <= 0) {
                clearInterval(timerInterval);
                resendLink.style.pointerEvents = 'auto';
                resendLink.style.color = '#aa076b';  // Original link color
                timerDisplay.textContent = '';  // Clear timer display
            }

            timeRemaining--;
        }, 1000);
    }

    function resendOTP() {
        var mobileNumber = $('#mobile').val();
        console.log(mobileNumber);
        $.ajax({
                url: "{{ route('front.send-otp') }}",
                method: "POST",
                dataType: "JSON",
                data: {
                    mobile: mobileNumber,
                    _token: "{{ csrf_token() }}"
                },
                success: function(data) {
                    if (data.status == 'success') {
                        localStorage.setItem('otp', data.otp);
                        console.log(data.otp);
                        console.log('A new OTP has been sent to your mobile number.');
                    }
                },
                error: function() {
                    Swal.fire({
                        icon: 'error',
                        title: 'Error',
                        text: 'An unknown error occurred.'
                    });
                }
            });

        // Start a 30-second countdown timer
        startTimer(120);
    }

    // Initialize the timer on page load (if needed)
    document.addEventListener('DOMContentLoaded', () => {
        startTimer(10);  // Initial 30 seconds before allowing resend
    });

$('#submitBtn').on('click', function(e) {
    e.preventDefault();
    let otp = $('#otp1').val() + $('#otp2').val() + $('#otp3').val() + $('#otp4').val();
    if (otp === '' || otp.length !== 4) {
        $('.otp-error').text('Please enter the complete 4-digit OTP.');
        return;
    }
    const storedOtp = localStorage.getItem('otp');
    if (otp !== storedOtp) {
        $('.otp-error').text('The OTP is incorrect. Please try again.');
        return;
    }
    $('<input>').attr({
        type: 'hidden',
        name: 'otp',
        value: otp
    }).appendTo('#registerForm');

    $('#registerForm').trigger('submit');
});



</script>
@endpush
