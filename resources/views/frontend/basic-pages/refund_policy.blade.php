@extends('frontend.master')
@section('title'){{ 'Biddabari | Refund policy'}}@endsection
@section('body')
    {{ \Illuminate\Support\Facades\Session::put('course_redirect_url', \Illuminate\Support\Facades\Request::url()) }}
    <main>
        <section id="TermsConditon" class="background-res-terms background-ats py-5" style="background-image: url('http://127.0.0.1:8000/frontend/assets/images/blog/blog-bg.png')">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="title-area text-start pt-4 pb-4" style="background-image: url('{{ asset('frontend') }}/assets/images/termi&condition/terms&condition-bg.png')">
                            <h1 class="fw-bold">Refund Policy</h1>
                            <h6>Last Updated : May 29,2022</h6>
                        </div>

                        <div class="terms-and-condition-area">
                            <div class="terms-welcome-area">
                                <h2><span>Introduction</span></h2>
                                <p>At Biddabari, we strive to provide our students with high-quality educational content. We understand that there may be circumstances where a refund is necessary. This Refund Policy outlines the terms and conditions under which refunds for our paid courses are processed.
                                <br><br> By accessing this website and/or purchasing our courses, we assume you accept these terms and conditions. Do not continue to use Biddabari if you do not agree to all the terms and conditions stated on this page.</p>
                            </div>
                        </div>

                        <div class="terms-represent-area py-3">
                            <h2>Eligibility for <span class="text-brand"> Refunds</span></h2>
                            <div class="represent-area">
                                <h5> Students who purchase our paid courses are eligible to apply for a refund under the following conditions:</h5><br>
                                <p><span><i class="fa-solid fa-hand-point-right"></i></span> The refund request must be made within 48 hours of purchasing the course.</p>
                                <p><span><i class="fa-solid fa-hand-point-right"></i></span> A written request for the refund must be sent to our official email address at <a href="mailto:info@biddabari.com" class="text-brand">info@biddabari.com.</a></p>

                            </div>
                        </div>
                        <div class="terms-represent-area py-3">
                            <h2>Valid Reasons for <span class="text-brand"> Refunds</span></h2>
                            <div class="represent-area">
                                <h5> Refund requests will be considered valid for reasons such as:</h5><br>
                                <p><span><i class="fa-solid fa-hand-point-right"></i></span> Technical issues that prevent access to the course content.</p>
                                <p><span><i class="fa-solid fa-hand-point-right"></i></span> Course content not being as described or advertised.</p>
                                <p><span><i class="fa-solid fa-hand-point-right"></i></span> Other legitimate reasons as determined by our support team.</p>

                            </div>
                        </div>
                        <div class="terms-represent-area py-3">
                            <h2>How to Request a <span class="text-brand"> Refund</span></h2>
                            <div class="represent-area">
                                <h5> To request a refund, please follow these steps:</h5><br>
                                <p><span><i class="fa-solid fa-hand-point-right"></i></span> Send an email to <a href="mailto:info@biddabari.com" class="text-brand">info@biddabari.com.</a> within 48 hours of your purchase. </p>
                                <p><span><i class="fa-solid fa-hand-point-right"></i></span> Include your full name, Registration Number used for the purchase and the course name.</p>
                                <p><span><i class="fa-solid fa-hand-point-right"></i></span> Provide a detailed explanation of the reason for the refund request.</p>
                            </div>
                        </div>
                        <div class="terms-represent-area py-3">
                            <h2>Processing <span class="text-brand"> Refunds</span></h2>
                            <div class="represent-area">
                                <p><span><i class="fa-solid fa-hand-point-right"></i></span>Once we receive your refund request, our support team will review it and determine if it meets our refund criteria.</p>
                                <p><span><i class="fa-solid fa-hand-point-right"></i></span>If your request is approved, we will process the refund to the original method of payment within 7 business days</p>
                                <p><span><i class="fa-solid fa-hand-point-right"></i></span>You will receive an email confirmation once the refund has been processed.</p>
                            </div>
                        </div>
                        <div class="terms-represent-area py-3">
                            <h2>Non-Refundable <span class="text-brand"> Items</span></h2>
                            <div class="represent-area">
                                <h5> The following items are not eligible for refunds:</h5><br>
                                <p><span><i class="fa-solid fa-hand-point-right"></i></span>Courses that have been accessed or substantially used</p>
                                <p><span><i class="fa-solid fa-hand-point-right"></i></span>Courses purchased more than 48 hours ago.</p>
                                <p><span><i class="fa-solid fa-hand-point-right"></i></span>Any additional fees or services associated with the course.</p>
                            </div>
                        </div>
                        <div class="terms-welcome-area">
                            <h2>Changes to This Refund Policy</h2>
                            <p>We reserve the right to modify this Refund Policy at any time. Any changes will be posted on this page with an updated effective date. We encourage you to review this policy periodically to stay informed about our refund practices.</p>
                        </div>
                        <div class="terms-represent-area py-3">
                            <h2><span class="text-brand"> Contact Us</span></h2>
                            <div class="represent-area">
                                <h5> If you have any questions or concerns about this Refund Policy, please contact us at: Biddabari</h5><br>
                                <p><span><i class="fa-solid fa-hand-point-right"></i></span><strong> Email: </strong> <a href="mailto:info@biddabari.com" class="text-brand"> info@biddabari.com</a></p>
                                <p><span><i class="fa-solid fa-hand-point-right"></i></span><strong> Phone: </strong> <a href="tel:+8801896060800" class="text-brand">+8801896060800</a></p>
                                <p><span><i class="fa-solid fa-hand-point-right"></i></span><strong> Address: </strong>  6th Floor, Jashore Malik Shamiti Vobon, Gausul Azam Super-Market, Nilkhet, Dhaka-1205. <a href="http://surl.li/aczdjr" target="_blank" class="text-brand"><strong> Google Map Link</strong></a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </main>
@endsection
