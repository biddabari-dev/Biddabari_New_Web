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
                <div class="col-md-10 col-lg-8">
                    <div class="signup-area">
                        <div class="row g-4">
                            <div class="col-md-6">
                                <div class="signup-image-area text-center">
                                    <h4><strong> Welcome to <br><span class="text-brand"> Biddabari </span> Online Learning Platform </strong></h4>
                                    <img src="{{ asset('frontend') }}/assets/images/signup/Signup-Image.webp" alt="" srcset="" width="80%">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="signup-form-area">
                                    <h4 class="text-center">Sign up</h4>
                                    <div class="signup-form">
                                        <!-- Signup Form -->
                                        <form id="registerForm" action="{{ route('user-register') }}" method="POST">
                                            @csrf
                                            <div class="mb-3">
                                                <label for="name" class="form-label">Full Name</label>
                                                <div class="position_relative">
                                                    <i class="fa-regular fa-user input-icon"></i>
                                                    <input type="text" class="form-control icon-input @error('name') is-invalid @enderror"
                                                        id="name" name="name" value="{{ old('name') }}" placeholder="Enter your full name"
                                                        aria-describedby="nameHelp">
                                                </div>
                                                <span class="invalid-feedback d-block name-error"></span>
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
                                                    <span class="invalid-feedback d-block mobile-error"></span>
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
                                                <span class="invalid-feedback d-block password-error"></span>
                                                @error('password')
                                                    <span class="invalid-feedback d-block">{{ $message }}</span>
                                                @enderror
                                            </div>
                                            <div class="mb-3">
                                                <label for="password" class="form-label">Confirm Password</label>
                                                <div class="position_relative">
                                                    <i class="fa-solid fa-lock input-icon"></i>
                                                    <input type="password" class="form-control icon-input @error('confirm_password') is-invalid @enderror"
                                                        id="confirm_password" name="password_confirmation" placeholder="Retype password"
                                                        aria-describedby="passwordHelp">
                                                </div>
                                                <span class="invalid-feedback d-block confirm-password-error"></span>
                                                @error('confirm_password')
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


@endsection
@push('script')
<script>
$(document).ready(function() {
    $('#submitBtn').on('click', function(e) {
    e.preventDefault();

    // Clear previous error messages
    $('.name-error, .mobile-error, .password-error, .confirm-password-error').text('');

    var name = $('#name').val();
    var mobileNumber = $('#mobile').val();
    var password = $('#password').val();
    var confirmPassword = $('#confirm_password').val();

    // Define Bangladeshi mobile number pattern
    var bangladeshMobilePattern = /^(01[3-9]\d{8})$/;

    // Validate name
    if (name === '') {
        $('.name-error').text('Name is required.');
        return;
    }

    // Validate mobile number
    if (mobileNumber === '') {
        $('.mobile-error').text('Mobile number is required.');
        return;
    } else if (!bangladeshMobilePattern.test(mobileNumber)) {
        $('.mobile-error').text('Enter a valid mobile number.');
        return;
    }

    // Validate password
    if (password === '') {
        $('.password-error').text('Password is required.');
        return;
    }

    // Validate confirm password
    if (confirmPassword === '') {
        $('.confirm-password-error').text('Confirm password is required.');
        return;
    } else if (password !== confirmPassword) {
        $('.confirm-password-error').text('Passwords do not match.');
        $('#password').val('');
        $('#confirm_password').val('');
        return;
    }
    // If all validations pass, submit the form
    $('#registerForm').submit();
});

});
</script>
@endpush
