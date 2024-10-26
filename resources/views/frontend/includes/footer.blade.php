<section id="App_store" class="background-res background-ats py-5"
style="background-image: url('{{ asset('frontend') }}/assets/images/exam-page/footer-background.png')">
<div class="container">
    <div class="row">
        <div class="col-md-6">
            <div class="style-2phone-image">
                <img src="{{ asset('frontend') }}/assets/images/exam-page/2-mobile.png" class="img-fluid"
                    alt="" srcset="">
            </div>
        </div>
        <div class="col-md-6">
            <div class="download-text">
                <h5>ডাউনলোড করুন</h5>
                <h2>বিদ্যাবাড়ি App</h2>
            </div>
            <div class="rattingandflowers-area">
                <div class="row">
                    <div class="col-md-4 learner-count">
                        <h2>50+</h2>
                        <p>WorldWide Learners</p>
                    </div>
                    <div class="col-md-4 review-count">
                        <h2>4.7 <span> <i class="fas fa-star"></i></span></h2>
                        <p>Positive<br> Reviews</p>
                    </div>
                    <div class="col-md-4 courses-count">
                        <h2>180+</h2>
                        <p>Skill based Courses</p>
                    </div>
                </div>
            </div>
            <div class="download-hint">
                <p>ডাউনলোড করুন আমাদের মোবাইল অ্যাপ,<br>
                    শেখা শুরু করুন আজ থেকেই</p>
            </div>
            <div class="download-store-path">
                <div class="app-store">
                    <a href="#">
                        <img class="img-fluid"
                            src="{{ asset('frontend') }}/assets/images/exam-page/app-store.png"
                            alt="App Store" srcset=""></a>
                </div>
                <div class="play-store">
                    <a href="#">
                        <img class="img-fluid"
                            src="{{ asset('frontend') }}/assets/images/exam-page/google-play.png"
                            alt="Google Play Store" srcset=""></a>
                </div>
            </div>

        </div>
    </div>
</div>
</section>

<footer id="Footer">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="footer-logo-content">
                    <div class="footer-logo">
                        <div class="footer-logo-image">
                            <img src="{{ asset('frontend') }}/assets/images/logo/footer-logo-bgr.png" alt="" srcset="">
                        </div>
                    </div>
                    <div class="footer-logo-text">
                        <p>Biddabari" is such a different and unique online platform where you can rely
                            yourself.
                            You just keep your faith on Biddabari, believe it, it will do the rest.</p>
                    </div>
                    <div class="footer-social-media-area">
                        <div class="social-media-icon">
                            <div class="linkedin-icon">
                                <a href="https://www.linkedin.com/in/biddabari" target="_blank"><i class="fa-brands fa-linkedin"></i></a>
                            </div>
                            <div class="facebook-icon">
                                <a href="https://www.facebook.com/biddaabari" target="_blank"><i class="fa-brands fa-square-facebook"></i></a>
                            </div>
                            <div class="twiter-icon">
                                </a><a href="https://www.linkedin.com/in/biddabari" target="_blank"><i class="fa-brands fa-linkedin"></i></a>
                            </div>
                            <div class="twiter-icon">
                                </a><a href="https://www.youtube.com/@biddabari" target="_blank"><i class="fa-brands fa-youtube"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-8">
                <div class="footer-others-div">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="about-us">
                                <h3>About Us</h3>
                                <ul>
                                    <li><a href="{{ route('front.about-us') }}">About Us</li></a>
                                    <li><a href="{{ route('front.instructors') }}">Instructor</li></a>
                                    <li><a href="#">Our Event</li></a>
                                    <li><a href="{{ route('front.contact-us') }}">Contact Us</li></a>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-4">
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
                        <div class="col-md-4">
                            <div class="official-info">
                                <h3>Official Info</h3>
                                <ul>
                                    <li><i class="fa-regular fa-envelope"></i>
                                        <a href="mailto:support@gmail.com">support@gmail.com</a>
                                    </li>
                                    <li><i class="fa-solid fa-phone"></i>
                                        <a href="tel:+8809644433300">09644433300</a>
                                    </li>
                                </ul>
                                <p><i class="fa-solid fa-location-dot"></i><a href="{{ route('front.contact-us') }}">
                                        1th,5th-7th Floor, Jashore
                                        Malik Shamiti Vobon, Gausul Azam Super Market, Nilkhet,
                                        Kataban Rd 1205 Dhaka, Dhaka Division, Bangladesh</li></a>
                                </p>
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
