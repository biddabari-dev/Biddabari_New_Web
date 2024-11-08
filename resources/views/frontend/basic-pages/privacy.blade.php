@extends('frontend.master')
@section('title'){{ 'Biddabari | Privacy policy'}}@endsection
@section('body')
    {{ \Illuminate\Support\Facades\Session::put('course_redirect_url', \Illuminate\Support\Facades\Request::url()) }}
    <main>
        <section id="TermsConditon" class="background-res-terms background-ats py-5" style="background-image: url('http://127.0.0.1:8000/frontend/assets/images/blog/blog-bg.png')">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="title-area text-start pt-4 pb-4" style="background-image: url('{{ asset('frontend') }}/assets/images/termi&condition/terms&condition-bg.png')">
                            <h1 class="fw-bold">Privacy policy</h1>
                            <h6>Last Updated : May 29,2022</h6>
                        </div>

                        <div class="terms-and-condition-area">
                            <div class="terms-welcome-area ">
                                <h2><span>Introduction</span></h2>
                                <p>Welcome to Biddabari. We are committed to protecting your personal information and your right to privacy. If you have any questions or concerns about this privacy policy or our practices with regards to your personal information, please <a href="{{ route('front.contact-us') }}" class="text-brand"><strong> Contact us.</strong></a></p>
                            </div>
                        </div>

                        <div class="terms-represent-area py-3">
                            <h2>Information <span class="text-brand">We Collect</span></h2>
                            <div class="represent-area">
                                <p> <strong>Personal Information: </strong> When you visit our website, register, place an order, or interact with us in other ways, we may collect the following personal information from you.</p>
                                <p><span><i class="fa-solid fa-hand-point-right"></i></span> Name</p>
                                <p><span><i class="fa-solid fa-hand-point-right"></i></span> Email address</p>
                                <p><span><i class="fa-solid fa-hand-point-right"></i></span> Phone number</p>
                                <p><span><i class="fa-solid fa-hand-point-right"></i></span> Location</p>
                                <p> <strong>Usage Data: </strong> We also collect information automatically when you navigate through our site. This may include:-</p>
                                <p><span><i class="fa-solid fa-hand-point-right"></i></span> IP address</p>
                                <p><span><i class="fa-solid fa-hand-point-right"></i></span> Browser type and version</p>
                                <p><span><i class="fa-solid fa-hand-point-right"></i></span> Operating system and platform</p>
                                <p><span><i class="fa-solid fa-hand-point-right"></i></span> Access times and dates</p>
                                <p>Cookies and Tracking Technologies: We may use cookies and similar tracking technologies to track the activity on our service and hold certain information. You can instruct your browser to refuse all cookies or to indicate when a cookie is being sent. However, if you do not accept cookies, you may not be able to use some portions of our service.</p>
                            </div>
                        </div>

                        <div class="terms-represent-area py-3">
                            <h2>How We Collect <span class="text-brand">Information</span></h2>
                            <div class="represent-area">
                                <h5>We collect information from you in various ways, including:</h5><br>
                                <p><span><i class="fa-solid fa-hand-point-right"></i></span><strong> interactions:</strong> When you provide information by filling in forms on our website.</p>
                                <p><span><i class="fa-solid fa-hand-point-right"></i></span><strong> Automated technologies:</strong> When you navigate through our website, we use automatic data collection technologies to collect certain information about your equipment, browsing actions, and patterns.</p>

                            </div>
                        </div>
                        <div class="terms-represent-area py-3">
                            <h2>How We Use Your <span class="text-brand">Information</span></h2>
                            <div class="represent-area">
                                <h5>We use the information we collect for various purposes, including to:</h5><br>
                                <p><span><i class="fa-solid fa-hand-point-right"></i></span> Provide, operate, and maintain our website</p>
                                <p><span><i class="fa-solid fa-hand-point-right"></i></span> Improve, personalize, and expand our website </p>
                                <p><span><i class="fa-solid fa-hand-point-right"></i></span> Understand and analyze how you use our website</p>
                                <p><span><i class="fa-solid fa-hand-point-right"></i></span> Develop new products, services, features, and functionality</p>
                                <p><span><i class="fa-solid fa-hand-point-right"></i></span> Communicate with you, either directly or through one of our partners, including for customer service, to provide you with updates and other information relating to the website, and for marketing and promotional purposes</p>
                                <p><span><i class="fa-solid fa-hand-point-right"></i></span> Process your transactions and manage your orders </p>
                                <p><span><i class="fa-solid fa-hand-point-right"></i></span> Send you emails </p>
                                <p><span><i class="fa-solid fa-hand-point-right"></i></span> Find and prevent fraud</p>
                            </div>
                        </div>
                        <div class="terms-represent-area py-3">
                            <h2>How We Share Your <span class="text-brand">Information</span></h2>
                            <div class="represent-area">
                                <h5>We do not sell, trade, or otherwise transfer your personal information to outside parties except as described below:</h5><br>
                                <p><span><i class="fa-solid fa-hand-point-right"></i></span><strong> Service Providers: </strong> We may share your information with third-party vendors, service providers, contractors, or agents who perform services for us or on our behalf and require access to such information to do that work.</p>
                                <p><span><i class="fa-solid fa-hand-point-right"></i></span><strong> Business Transfers: </strong> We may share or transfer your information in connection with, or during negotiations of, any merger, sale of company assets, financing, or acquisition of all or a portion of our business to another company.</p>
                                <p><span><i class="fa-solid fa-hand-point-right"></i></span><strong> Legal Obligations: </strong> We may disclose your information where we are legally required to do so in order to comply with applicable law, governmental requests, a judicial proceeding, court order, or legal process.</p>

                            </div>
                        </div>
                        <div class="terms-and-condition-area">
                            <div class="terms-welcome-area ">
                                <h2>Data Storage and <span>Security</span></h2>
                                <p>We store your data on secure servers and implement appropriate technical and organizational measures to ensure a level of security appropriate to the risk. However, no electronic transmission over the Internet or information storage technology can be guaranteed to be 100% secure, and we cannot guarantee its absolute security.</p>
                            </div>
                        </div>
                        <div class="terms-represent-area py-3">
                            <h2>Your <span class="text-brand">Rights</span></h2>
                            <div class="represent-area">
                                <h5>Depending on your location, you may have the following rights regarding your personal information:</h5><br>
                                <p><span><i class="fa-solid fa-hand-point-right"></i></span><strong> Access: </strong> You have the right to request a copy of the personal data we hold about you..</p>
                                <p><span><i class="fa-solid fa-hand-point-right"></i></span><strong> Correction: </strong> You have the right to request that we correct any personal data that you believe is inaccurate or complete information you believe is incomplete.</p>
                                <p><span><i class="fa-solid fa-hand-point-right"></i></span><strong> Deletion: </strong> You have the right to request that we erase your personal data, under certain conditions.</p>
                                <p><span><i class="fa-solid fa-hand-point-right"></i></span><strong> Objection: </strong> You have the right to object to our processing of your personal data, under certain conditions.</p>
                                <p><span><i class="fa-solid fa-hand-point-right"></i></span><strong> Portability: </strong> You have the right to request that we transfer the data that we have collected to another organization, or directly to you, under certain conditions.</p>

                            </div>
                        </div>
                        <div class="terms-and-condition-area">
                            <div class="terms-welcome-area ">
                                <h2>Cookies <span class="text-brand">Policy</span></h2>
                                <p>We use cookies to enhance your experience on our website. Cookies are files with small amounts of data that are commonly used as anonymous unique identifiers. You can control your cookie settings via your browser settings.</p>
                            </div>
                        </div>
                        <div class="terms-and-condition-area">
                            <div class="terms-welcome-area ">
                                <h2>Third-Party  <span class="text-brand">Services</span></h2>
                                <p>We may use third-party service providers to moni tor and analyze the use of our service. These third parties have access to your personal data only to perform these tasks on our behalf and are obligated not to disclose or use it for any other purpose.</p>
                            </div>
                        </div>
                        <div class="terms-and-condition-area">
                            <div class="terms-welcome-area ">
                                <h2>Changes to This  <span class="text-brand">Privacy Policy</span></h2>
                                <p>We may update our privacy policy from time to time. We will notify you of any changes by posting the new privacy policy on this page. You are advised to review this privacy policy periodically for any changes. Changes to this privacy policy are effective when they are posted on this page.</p>
                            </div>
                        </div>
                        <div class="terms-represent-area py-3">
                            <h2>Children’s <span class="text-brand">Privacy</span></h2>
                            <div class="represent-area">
                                <h5>Our educational services are designed to be accessible to learners of all ages, including children under the age of 13. Protecting the privacy of young children is especially important to us:</h5><br>
                                <p><span><i class="fa-solid fa-hand-point-right"></i></span><strong> Parental Consent: </strong>We require verifiable parental consent before collecting any personal information from children under 13. Parents or guardians must provide their consent by registering on behalf of the child or through other consent mechanisms we have in place. </p>
                                <p><span><i class="fa-solid fa-hand-point-right"></i></span><strong> Data Collection: </strong> We only collect the minimum amount of personal information necessary to provide our educational services. This may include information such as the child's name, age, and email address (or that of their parent or guardian).</p>
                                <p><span><i class="fa-solid fa-hand-point-right"></i></span><strong> Use of Information: </strong> The information collected from children under 13 is used solely for educational purposes, to provide a personalized learning experience, and to communicate with parents or guardians.</p>
                                <p><span><i class="fa-solid fa-hand-point-right"></i></span><strong> Disclosure of Information: </strong> We do not share personal information of children under 13 with third parties without parental consent, except as necessary to provide our services or as required by law. </p>
                                <p><span><i class="fa-solid fa-hand-point-right"></i></span><strong> Parental Rights: </strong>Parents and guardians have the right to review their child's personal information, request that we delete it, and refuse to allow any further collection or use of their child's information. To exercise these rights, please contact us. </p>
                                <p><span><i class="fa-solid fa-hand-point-right"></i></span><strong> Removal of Information: </strong> If we become aware that we have inadvertently collected personal information from a child under 13 without proper consent, we will take steps to delete that information promptly from our servers.</p>
                            </div>
                        </div>
                        <div class="terms-and-condition-area">
                            <div class="terms-welcome-area ">
                                <h2>International<span class="text-brand">Data Transfers</span></h2>
                                <p>Your information, including personal data, may be transferred to — and maintained on — computers located outside of your state, province, country, or other governmental jurisdiction where the data protection laws may differ from those of your jurisdiction.</p>
                            </div>
                        </div>
                        <div class="terms-represent-area py-3">
                            <h2>Legal Basis for <span class="text-brand">Processing Data (For GDPR Compliance)</span></h2>
                            <div class="represent-area">
                                <h5>If you are from the European Economic Area (EEA), our legal basis for collecting and using personal information described in this privacy policy depends on the personal data we collect and the specific context in which we collect it. We may process your personal data because:</h5><br>
                                <p><span><i class="fa-solid fa-hand-point-right"></i></span> We need to perform a contract with you.</p>
                                <p><span><i class="fa-solid fa-hand-point-right"></i></span> You have given us permission to do so.</p>
                                <p><span><i class="fa-solid fa-hand-point-right"></i></span> The processing is in our legitimate interests and it's not overridden by your rights.</p>
                                <p><span><i class="fa-solid fa-hand-point-right"></i></span> To comply with the law.</p>

                            </div>
                        </div>
                        <div class="terms-and-condition-area">
                            <div class="terms-welcome-area ">
                                <h2><span class="text-brand">Contact Us</span></h2>
                                <p>If you have any questions about this privacy policy, please contact us by visiting this page on our website: <a href="{{ route('front.contact-us') }}" class="text-brand"><strong> Contact us.</strong></a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </main>
@endsection
