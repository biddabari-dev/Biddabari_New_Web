@extends('frontend.master')
@section('title'){{ 'Biddabari | Terms and Conditions'}}@endsection
@section('body')
    {{ \Illuminate\Support\Facades\Session::put('course_redirect_url', \Illuminate\Support\Facades\Request::url()) }}

    <main>
        <section id="TermsConditon" class="background-res-terms background-ats py-5">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">

                        <div class="title-area text-start pt-4 pb-4"  style="background-image: url('{{ asset('frontend') }}/assets/images/termi&condition/terms&condition-bg.png')">
                            <h2 class="fw-bold">Terms and Conditions</h2>
                            <h6>Last Updated : 31 July, 2024</h6>
                        </div>

                        <div class="terms-and-condition-area">
                            <div class="terms-welcome-area py-3">
                                <h2>Welcome to <span>Biddabari</span></h2>

                                <p>These terms and conditions outline the rules and regulations for the use of Biddabari's Website and Services, located at <a href="biddabari.com"> biddabari.com</a> <br> <br>
                                By accessing this website and/or purchasing our courses, we assume you accept these terms and conditions. Do not continue to use Biddabari if you do not agree to all the terms and conditions stated on this page.</p>
                            </div>
                            <div class="terms-welcome-area py-3">
                                <h2>Introduction <span></span></h2>
                                <p>These Terms and Conditions constitute a legally binding agreement made between you, whether personally or on behalf of an entity (“you”) and Biddabari (“we,” “us” or “our”), concerning your access to and use of the biddabari.com website as well as any other media form, media channel, mobile website, or mobile application related, linked, or otherwise connected thereto (collectively, the “Site”).</p>
                            </div>
                            <div class="terms-welcome-area py-3">
                                <h2>Intellectual <span>Property Rights</span></h2>
                                <p>Unless otherwise stated, Biddabari and/or its licensors own the intellectual property rights for all material on Biddabari. All intellectual property rights are reserved. You may access this from Biddabari for your own personal use subjected to restrictions set in these terms and conditions.</p>
                            </div>
                            <div class="terms-represent-area py-3">
                                <h2>User <span class="text-brand">Representations</span></h2>
                                <div class="represent-area">
                                    <h6>By using the Site, you represent and warrant that:</h6>
                                    <p><span><i class="fa-solid fa-hand-point-right"></i></span> All registration information you
                                        submit
                                        will be true, accurate, current, and complete. </p>
                                    <p><span><i class="fa-solid fa-hand-point-right"></i></span> You will maintain the accuracy of such information and promptly update such registration information as necessary.</p>
                                    <p><span><i class="fa-solid fa-hand-point-right"></i></span> You have the legal capacity and you agree to comply with these Terms and Conditions.</p>
                                </div>
                            </div>
                            <div class="terms-welcome-area py-3">
                                <h2>User <span>Registration</span></h2>
                                <p>You may be required to register with the Site. You agree to keep your password confidential and will be responsible for all use of your account and password. We reserve the right to remove, reclaim, or change a username you select if we determine, in our sole discretion, that such username is inappropriate, obscene, or otherwise objectionable.</p>
                            </div>
                            <div class="terms-represent-area py-3">
                                <h2>Courses and <span class="text-brand">Payments</span></h2>
                                <div class="represent-area">
                                    <p><span><i class="fa-solid fa-hand-point-right"></i></span> Biddabari offers various online courses, which are available for purchase through the Site. </p>
                                    <p><span><i class="fa-solid fa-hand-point-right"></i></span> All prices are listed on the Site and are subject to change at any time without notice.</p>
                                    <p><span><i class="fa-solid fa-hand-point-right"></i></span> Payment for courses must be made in full before access to the course is granted.We accept Digital payment.</p>
                                </div>
                            </div>
                            <div class="terms-welcome-area py-3">
                                <h2>Refund  <span> Policy</span></h2>
                                <p>We offer a 2 days money-back guarantee on our courses, starting from the date of purchase. If you are not satisfied with the course, you may request a refund by contacting our support team at <a href="{{ route('front.contact-us') }}"> Contact Us</a></p>
                            </div>
                            <div class="terms-represent-area py-3">
                                <h2>User <span class="text-brand">Content</span></h2>
                                <div class="represent-area">
                                    <p><span><i class="fa-solid fa-hand-point-right"></i></span> Certain areas of the Site may allow users to post comments, feedback, or other content ("User Content"). </p>
                                    <p><span><i class="fa-solid fa-hand-point-right"></i></span> You retain ownership of any intellectual property rights that you hold in that User Content.</p>
                                    <p><span><i class="fa-solid fa-hand-point-right"></i></span> By posting User Content to the Site, you grant Biddabari a non-exclusive, royalty-free, worldwide, perpetual license to use, reproduce, modify, adapt, publish, translate, create derivative works from, distribute, and display such content.</p>
                                </div>
                            </div>
                            <div class="terms-welcome-area py-3">
                                <h2>Prohibited  <span> Activities</span></h2>
                                <p>You may not access or use the Site for any purpose other than that for which we make the Site available. The Site may not be used in connection with any commercial endeavors except those that are specifically endorsed or approved by us.</p>
                            </div>
                            <div class="terms-represent-area py-3">
                                <h2>Prohibited activities include, <span class="text-brand">but are not limited to</span></h2>
                                <div class="represent-area">
                                    <p><span><i class="fa-solid fa-hand-point-right"></i></span> Systematically retrieving data or other content from the Site to create or compile, directly or indirectly, a collection, compilation, database, or directory without written permission from us.</p>
                                    <p><span><i class="fa-solid fa-hand-point-right"></i></span> Making any unauthorized use of the Site, including collecting usernames and/or email addresses of users by electronic or other means for the purpose of sending unsolicited email, or creating user accounts by automated means or under false pretenses.</p>
                                    <p><span><i class="fa-solid fa-hand-point-right"></i></span> Engaging in unauthorized framing of or linking to the Site.</p>
                                    <p><span><i class="fa-solid fa-hand-point-right"></i></span> Tricking, defrauding, or misleading us and other users, especially in any attempt to learn sensitive account information such as user passwords.</p>
                                </div>
                            </div>
                            <div class="terms-welcome-area py-3">
                                <h2>Termination</h2>
                                <p>We may terminate or suspend your access to the Site without prior notice or liability, for any reason whatsoever, including without limitation if you breach the Terms. Upon termination, your right to use the Site will immediately cease.</p>
                            </div>
                            <div class="terms-represent-area py-3">
                                <h2>Limitation of <span class="text-brand">Liability</span></h2>
                                <p>In no event shall Biddabari nor its directors, employees, partners, agents, suppliers, or affiliates, be liable for any indirect, incidental, special, consequential, or punitive damages, including without limitation, loss of profits, data, use, goodwill, or other intangible losses, resulting from:</p>
                                <div class="represent-area">
                                    <p><span><i class="fa-solid fa-hand-point-right"></i></span> Your use or inability to use the Site</p>
                                    <p><span><i class="fa-solid fa-hand-point-right"></i></span> Any unauthorized access to or use of our servers and/or any personal information stored therein;</p>
                                    <p><span><i class="fa-solid fa-hand-point-right"></i></span> Any interruption or cessation of transmission to or from the Site</p>
                                    <p><span><i class="fa-solid fa-hand-point-right"></i></span> Tricking, defrauding, or misleading us and other users, especially in any attempt to learn sensitive account information such as user passwords.</p>
                                </div>
                            </div>
                            <div class="terms-welcome-area py-3">
                                <h2>Governing <span> Law</span></h2>
                                <p>These Terms shall be governed and construed in accordance with the laws of Bangladesh, without regard to its conflict of law provisions.</p>
                            </div>
                            <div class="terms-welcome-area py-3">
                                <h2>Contact <span> Us</span></h2>
                                <p>If you have any questions about these Terms, please contact us at <a href="{{ route('front.contact-us') }}" class="text-brand"> Contact Us</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </main>
@endsection
