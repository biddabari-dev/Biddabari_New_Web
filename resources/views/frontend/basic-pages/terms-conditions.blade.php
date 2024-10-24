@extends('frontend.master')

@section('body')
    {{ \Illuminate\Support\Facades\Session::put('course_redirect_url', \Illuminate\Support\Facades\Request::url()) }}

    <main>
        <section id="TermsConditon" class="background-res-terms background-ats py-5"
            style="background-image: url('{{ asset('frontend') }}/assets/images/termi&condition/terms&condition-bg.png')">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">

                        <div class="title-area text-start">
                            <h2 class="fw-bold">Terms and Conditions</h2>
                        </div>

                        <div class="terms-and-condition-area">
                            <div class="terms-welcome-area py-3">
                                <h6>Last Updated : May 29,2022</h6>
                                <h2>Welcome to <span>Biddabari</span></h2>
                                <p>These terms and conditions outline the rules and regulations for the use of
                                    Biddabari's
                                    Website and Services, located at biddabari.com
                                    By accessing this website and/or purchasing our courses, we assume you accept these
                                    terms
                                    and conditions. Do not continue to use Biddabari if you do not agree to all the
                                    terms
                                    and
                                    conditions stated on this page.</p>
                            </div>
                            <div class="terms-welcome-area py-3">
                                <h2>Introduction <span>About Us</span></h2>
                                <p>These terms and conditions outline the rules and regulations for the use of
                                    Biddabari's
                                    Website and Services, located at biddabari.com
                                    By accessing this website and/or purchasing our courses, we assume you accept these
                                    terms
                                    and conditions. Do not continue to use Biddabari if you do not agree to all the
                                    terms
                                    and
                                    conditions stated on this page.</p>
                            </div>
                            <div class="terms-welcome-area py-3">
                                <h2>Intellectual <span>Property Rights</span></h2>
                                <p>These terms and conditions outline the rules and regulations for the use of
                                    Biddabari's
                                    Website and Services, located at biddabari.com
                                    By accessing this website and/or purchasing our courses, we assume you accept these
                                    terms
                                    and conditions. Do not continue to use Biddabari if you do not agree to all the
                                    terms
                                    and
                                    conditions stated on this page.</p>
                            </div>
                            <div class="terms-represent-area py-3">
                                <h2>User <span>Representations</span></h2>
                                <div class="represent-area">
                                    <h6>By using the Site, you represent and warrant that:</h6>


                                    <p><span><i class="fa-solid fa-hand-point-right"></i></span> All registration information you
                                        submit
                                        will be true, accurate, current, and complete. </p>
                                    <p><span><i class="fa-solid fa-hand-point-right"></i></span> All registration information you
                                        submit
                                        will be true, accurate, current, and complete. </p>
                                    <p><span><i class="fa-solid fa-hand-point-right"></i></span> All registration information you
                                        submit
                                        will be true, accurate, current, and complete. </p>
                                    <p><span><i class="fa-solid fa-hand-point-right"></i></span> All registration information you
                                        submit
                                        will be true, accurate, current, and complete. </p>
                                    <p><span><i class="fa-solid fa-hand-point-right"></i></span> All registration information you
                                        submit
                                        will be true, accurate, current, and complete. </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </main>
@endsection
