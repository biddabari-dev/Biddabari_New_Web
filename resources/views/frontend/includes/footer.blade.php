<section id="App_store" class="background-res background-ats py-5"
    style="background-image: url('{{ asset('frontend') }}/assets/images/exam-page/footer-background.png')">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-5 col-lg-6">
                <div class="style-2phone-image">
                    <a
                        href="https://play.google.com/store/apps/details?id=com.nextive.biddabari2021&pcampaignid=web_share&pli=1"><img
                            src="{{ asset('frontend') }}/assets/images/exam-page/mobile-app.webp" class="img-fluid"
                            alt="" srcset=""></a>
                </div>
            </div>
            <div class="col-md-7 col-lg-6">
                <div class="download-text">
                    <h5>ডাউনলোড করুন</h5>
                    <h2>বিদ্যাবাড়ি App</h2>
                </div>
                <div class="rattingandflowers-area">
                    <div class="row">
                        <div class="col-4 learner-count">
                            <h2>180K+</h2>
                            <p> Learners</p>
                        </div>
                        <div class="col-4 review-count">
                            <h2>4.7 <span> <img src="{{ asset('frontend') }}/assets/images/logo/start.png" class="img-fluid" alt=""></span></h2>
                            <p>Positive<br> Reviews</p>
                        </div>
                        <div class="col-4 courses-count">
                            <h2>180+</h2>
                            <p>Skill based Courses</p>
                        </div>
                    </div>
                </div>
                <div class="download-hint">
                    <p>ডাউনলোড করুন বিদ্যাবাড়ি অ্যাপ,<br>
                        শুরু করুন এখান থেকেই</p>
                </div>
                <div class="download-store-path">
                    <div class="app-store">
                        <a href="#">
                            <img class="img-fluid" src="{{ asset('frontend') }}/assets/images/exam-page/app-store.png"
                                alt="App Store" srcset=""></a>
                    </div>
                    <div class="play-store">
                        <a href="#">
                            <img class="img-fluid" src="{{ asset('frontend') }}/assets/images/exam-page/google-play.png"
                                alt="Google Play Store" srcset=""></a>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>

<footer id="Footer">
    <div class="container">
        <div class="row g-4">
            <div class="col-sm-12 col-md-4">
                <div class="footer-logo-content mb-lg-5">
                    <div class="footer-logo">
                        <div class="footer-logo-image">
                            <img src="{{ asset('frontend') }}/assets/images/logo/footer-logo-bgr.png" alt=""
                                srcset="">
                        </div>
                    </div>
                    <div class="footer-logo-text">
                        <p>For thousands of job seekers across the country,
                            <br>Biddabari is the biggest online job preparation platform, a sign of trustworthiness and hope. Set off on the adventure and enjoy unwavering hospitality.</p>
                    </div>
                    <div class="footer-social-media-area">
                        <div class="social-media-icon">
                            <div class="facebook-icon">
                                <a href="https://www.facebook.com/biddaabari" target="_blank"><i
                                        class="fa-brands fa-facebook"></i></a>
                            </div>
                            <div class="youtube-icon">
                                </a><a href="https://www.youtube.com/@biddabari" target="_blank"><i
                                        class="fa-brands fa-youtube"></i></a>
                            </div>
                            <div class="instagram-icon">
                                <a href="https://www.instagram.com/biddabari.insta" target="_blank"><i
                                        class="fa-brands fa-instagram"></i></a>
                            </div>
                            <div class="linkedin-icon">
                                </a><a href="https://www.linkedin.com/in/biddabari" target="_blank"><i
                                        class="fa-brands fa-linkedin"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-8">
                <div class="footer-others-div">
                    <div class="row g-4">
                        <div class="col-6 col-md-4">
                            <div class="about-us">
                                <h3>About Us</h3>
                                <ul>
                                    <li><a href="{{ route('front.about-us') }}">About Us</li></a>
                                    <li><a href="{{ route('front.instructors') }}">Instructor</li></a>
                                    <li><a href="{{ route('front.refund-policy') }}">Refund Policy</li></a>
                                    <li><a href="{{ route('front.contact-us') }}">Contact Us</li></a>
                                </ul>
                            </div>
                        </div>
                        <div class="col-6 col-md-4">
                            <div class="resources">
                                <h3>Resources</h3>
                                <ul>
                                    <li><a href="{{ route('front.all-courses') }}">Courses</li></a>
                                    <li><a href="{{ route('front.all-blogs') }}">Our Blog</li></a>
                                    <li><a href="{{ route('front.terms-conditions') }}">Terms & Conditions</li></a>
                                    <li><a href="{{ route('front.privacy-policy') }}">Privacy Policy</li></a>
                                </ul>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-4">
                            <div class="official-info">
                                <h3>Official Info</h3>
                                <ul>
                                    <li>
                                        <i class="fa-regular fa-envelope"></i>
                                        <a href="mailto:support@gmail.com">support@gmail.com</a>
                                    </li>
                                    <li>
                                        <i class="fa-solid fa-phone"></i>
                                        <a href="tel:+8809644433300">09644433300</a>
                                    </li>
                                    <li>
                                        <i class="fa-solid fa-location-dot"></i>
                                        <a href="{{ route('front.contact-us') }}">
                                            1st, 5th-7th Floor, Jashore
                                            Malik Shamiti Vobon, Gausul Azam Super Market, Nilkhet,
                                            Kataban Rd 1205 Dhaka, Dhaka Division, Bangladesh</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="copy-right-section">
        <div class="container">
            <p>Copyright © 2024 <span><a href="biddabari.com">Biddabari</span></a> All rights reserved</p>
        </div>
    </div>
</footer>
