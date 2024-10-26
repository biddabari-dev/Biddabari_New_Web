@extends('frontend.master')
@section('title'){{ 'Biddabari | Social Media'}}@endsection
@section('body')

    <main>
        <section id="Our_social_media" class="background-res background-ats py-5" style="background-image: url('{{ asset('frontend') }}/assets/images/blog/blog-bg-1.png')">
            <div class="container background-res background-ats py-5"
                style="background-image: url('{{ asset('frontend') }}/assets/images/termi&condition/social-media-bg.png')">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="title-area">
                            <h2 class="fw-bold">Our Social <span>Media</span></h2>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum
                                has
                                been</p>
                        </div>
                    </div>
                </div>
            </div>
            <section id="Social_media">
                <div class="container py-5">
                    <div class="row">
                        <div class="col-lg-12">

                            <div class="media-area justify-content-between my-2">
                                <div class="media-icon-img">
                                    <img src="{{ asset('frontend') }}/assets/images/social-media/facebook-logo.png" alt="" srcset="">
                                    <p>facebook</p>
                                </div>
                                <div class="media-view-button">
                                    <a href="https://www.facebook.com/biddaabari/" target="_blank" class="btn btn_warning">View Page -></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="media-area justify-content-between my-2">
                                <div class="media-icon-img">
                                    <img src="{{ asset('frontend') }}/assets/images/social-media/youtube.png" alt="" srcset="">
                                    <p>Youtube</p>
                                </div>
                                <div class="media-view-button">
                                    <a href="https://www.youtube.com/@biddabari" target="_blank" type="button" class="btn btn_warning">View Page -></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="media-area justify-content-between my-2">
                                <div class="media-icon-img">
                                    <img src="{{ asset('frontend') }}/assets/images/social-media/linkedin.webp" alt="" srcset="">
                                    <p>Linkedin </p>
                                </div>
                                <div class="media-view-button">
                                    <a href="https://www.linkedin.com/in/biddabari" target="_blank" type="button" class="btn btn_warning">View Page -></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="media-area justify-content-between my-2">
                                <div class="media-icon-img">
                                    <img src="{{ asset('frontend') }}/assets/images/social-media/insta.png" alt="" srcset="">
                                    <p>Instragram </p>
                                </div>
                                <div class="media-view-button">
                                    <a href="https://www.instagram.com/biddabari.insta/" target="_blank" type="button" class="btn btn_warning">View Page -></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="media-area justify-content-between my-2">
                                <div class="media-icon-img">
                                    <img src="{{ asset('frontend') }}/assets/images/social-media/twiter.png" alt="" srcset="">
                                    <p>Twiter</p>
                                </div>
                                <div class="media-view-button">
                                    <a href="x.com/biddabari" target="_blank" type="button" class="btn btn_warning">View Page -></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </section>

    </main>

@endsection
