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
                                        <form action="{{ route('register') }}" method="POST">
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
                                            <div class="mb-3 form-check">
                                                <input type="checkbox" class="form-check-input"
                                                    id="exampleCheck1">
                                                <label class="form-check-label" for="exampleCheck1">Check me
                                                    out</label>
                                            </div>
                                            <button type="submit" class="btn btn_warning">Submit</button>
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
