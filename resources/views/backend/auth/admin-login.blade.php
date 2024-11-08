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
                                    <img src="{{ asset('frontend') }}/assets/images/signup/Signup-Image.webp" alt="" srcset="" style="width: 80%">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="signup-form-area">

                                    <h6>Sign in with mobile number</h6>
                                    <div class="signup-form">
                                        <form action="{{ route('login') }}" method="POST">
                                            @csrf
                                            <div class="mb-3">
                                                <label for="mobile" class="form-label">Mobile No.</label>
                                                <div class="position_relative">
                                                    <input type="number" class="form-control icon-input @error('mobile') is-invalid @enderror"
                                                        id="mobile" name="mobile" value="{{ old('mobile') }}" placeholder="Enter your mobile number">
                                                    <i class="fa-solid fa-phone input-icon"></i>
                                                </div>
                                                @error('mobile')
                                                    <span class="invalid-feedback d-block">{{ $message }}</span>
                                                @enderror
                                            </div>
                                            <div class="mb-3">
                                                <label for="password" class="form-label">Password</label>
                                                <div class="position-relative d-flex align-items-center">
                                                    <i class="fa-solid fa-lock input-icon me-2"></i>
                                                    <input type="password" name="password" class="form-control icon-input @error('password') is-invalid @enderror"
                                                        id="password" placeholder="Enter your password" style="flex: 1;">
                                                        <span class="view-icon btn btn-sm border show-pass ms-2 bg-" style="padding: 7px;" onclick="togglePasswordVisibility()">
                                                            👁️
                                                        </span>
                                                    {{-- <span id="viewPass" class="btn btn-sm border show-pass ms-2" style="padding: 7px;"><i class="fa-solid fa-eye"></i></span> --}}
                                                </div>
                                                @error('password')
                                                    <span class="invalid-feedback d-block">{{ $message }}</span>
                                                @enderror
                                            </div>

                                            <div class="mb-3 form-check">
                                                <input type="checkbox" class="form-check-input" id="exampleCheck1" name="remember_me">
                                                <label class="form-check-label" for="exampleCheck1">Keep me signed in</label>
                                            </div>

                                            <button type="submit" class="btn btn_warning">Submit</button>

                                            <div class="my-3 form-check">
                                                <span class="text-brand"><a href="{{ route('forgot-user-password') }}">Forget Password?</a></span>
                                            </div>
                                        </form>

                                        <h6>You have no account ? <span> <a href="{{ route('custom-register') }}">Sign Up</a>
                                            </span></h6>
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
    function togglePasswordVisibility() {
        const passwordField = document.getElementById("password");
        const icon = document.querySelector(".view-icon");

        if (passwordField.type === "password") {
            passwordField.type = "text";
            icon.textContent = "👀"; // Change icon to "hide" icon
        } else {
            passwordField.type = "password";
            icon.textContent = "👁️"; // Change icon to "view" icon
        }
    }
</script>
@endpush
