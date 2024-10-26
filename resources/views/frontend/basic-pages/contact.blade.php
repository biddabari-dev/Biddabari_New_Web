@extends('frontend.master')
@section('title'){{ 'Biddabari | Contact Us'}}@endsection
@section('body')

<main>

    <section id="Get_in_touch" class="py-5">
        <div class="container">
            <div class="row g-4">
                <div class="col-md-6">
                    <div class="get-in-touch-area">
                        <div class="title-text pb-4">
                            <h2>Get in touch</h2>
                            <p>Tell us about your challenge to start working on a solution</p>
                        </div>
                        <div class="our-contact-content">
                            <ul>
                                <li>
                                    <span>
                                        <i class="fa-solid fa-envelope"></i>
                                    </span>
                                    <a href="mailto:support@biddabari.com">support@biddabari.com</a>
                                </li>
                                <li>
                                    <span>
                                        <i class="fa-solid fa-phone"></i>
                                    </span>
                                    <a href="tel:++8801896060809">+8801896060800</a>
                                </li>
                                <li>
                                    <span>
                                        <i class="fa-solid fa-location-dot"></i>
                                    </span>
                                    <a href="#"> 1th,5th-7th Floor,
                                        Jashore
                                        Malik Shamiti Vobon, Gausul Azam Super Market, Nilkhet,
                                        Kataban Rd 1205 Dhaka, Dhaka Division, Bangladesh
                                </li></a>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="get-in-touch-form">
                        <form  action="{{ route('front.contact') }}" method="POST">
                            @csrf
                            <input type="hidden" name="type" value="page" />
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Full Name</label>
                                <input type="text" name="name" class="form-control" value="{{ auth()->check() ? auth()->user()->name : '' }}"
                                    aria-describedby="emailHelp">
                                    <span class="text-danger">{{ $errors->has('name') ? $errors->first('name') : '' }}</span>
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Mobile</label>
                                <input type="text"  name="mobile" required value="{{ auth()->check() ? auth()->user()->mobile : '' }}" data-error="Please Enter Your number" class="form-control" placeholder="Phone Number"
                                    aria-describedby="emailHelp">
                                    <span class="text-danger">{{ $errors->has('mobile') ? $errors->first('mobile') : '' }}</span>
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">How Can our team help you
                                    ?</label>
                                <textarea type="text" name="message" class="form-control" rows="4"
                                    id="exampleInputPassword1"></textarea>
                            </div>

                            <button type="submit" class="btn btn_warning">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="Find_us" class="background-res-find background-ats py-5"
        style="background-image: url('{{ asset('frontend') }}/assets/images/contact-us/find-us.png')">
        <div class="container">
            <div class="row g-4">
                <div class="col-md-6">
                    <div class="find-us-area">
                        <h3>How to Find us ?</h3>
                        <p class="text-muted">Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                            Provident
                            deserunt repellat
                            laborum eveniet vero atque, ea labore illum hic error!
                            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Provident deserunt
                            repellat
                            laborum eveniet vero atque, ea labore illum hic error!</p>
                        <div class="find-us-button">
                            <a href="" type="button" class="btn btn_warning">Submit</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="find-us-map">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3652.367430564635!2d90.38409157592721!3d23.734273389394065!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755b8bc89540001%3A0x11b747dd95876c8e!2sBiddabari!5e0!3m2!1sen!2sbd!4v1726696710849!5m2!1sen!2sbd"
                            style="border:0;" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="Find_us" class="background-res-find background-ats py-5"
        style="background-image: url('{{ asset('frontend') }}/assets/images/contact-us/cccc.png')">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-lg-4">
                    <div class="find-us-area py-5">
                        <h3 class="text-white">Still Didn't Find us ?</h3>
                        <p class="text-white">Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                            Provident
                            deserunt repellat
                            laborum eveniet vero atque, ea labore illum hic error!
                            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Provident deserunt
                            repellat
                            laborum eveniet vero atque, ea labore illum hic error!</p>
                        <div class="find-us-button">
                            <a href="" type="button" class="btn btn_warning text-white">Submit</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-12 col-lg-8">

                </div>
            </div>
        </div>
    </section>

</main>

@endsection


