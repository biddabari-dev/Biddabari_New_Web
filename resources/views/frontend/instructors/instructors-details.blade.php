@extends('frontend.master')

@section('body')
    <main>

        <section id="Instructor_details" class="background-ats background-res  py-5"
                 style="background-image: url('{{ asset('frontend') }}/assets/images/instructor/instructor-details-bg.png')">
            <div class="container">
                <div class="row g-4 align-items-end">
                    <div class="col-md-3">
                        <div class="teacher-image">
                            <img src="{{ asset('frontend') }}/assets/images/instructor/mukulsir.jpg" alt="" srcset="">
                        </div>
                    </div>
                    <div class="col-md-9">
                        <div class="teacher-details">
                            <h3>মাইদুল ইসলাম প্রধান (মুকুল)</h3>
                            <p>Founder & Managing Director</p>
                            <div class="teacher-contact-button">
                                <a href="" type="button" class="btn btn_warning">Contact Now</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row g-4 mt-4">
                    <div class="col-lg-12">

                        <div class="teachers-category">
                            <ul class="nav nav-pills mb-4" id="pills-tab" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <a class="nav-link active" id="teacher-about-tab" data-bs-toggle="pill"
                                       href="#teacher-about" role="tab" aria-controls="teacher-about"
                                       aria-selected="true">About</a>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <a class="nav-link" id="teacher-class-tab" data-bs-toggle="pill"
                                       href="#teacher-class" role="tab" aria-controls="teacher-class"
                                       aria-selected="false">Class</a>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-lg-12">
                        <div class="tab-content" id="pills-tabContent">
                            <div class="tab-pane fade show active" id="teacher-about" role="tabpanel"
                                 aria-labelledby="teacher-about-tab">
                                <div class="container">
                                    <div class="instructor-about-area">
                                        <div class="teacher-about-content">
                                            <h3>About Maidul Islam Prodhan (Mukul)</h3>
                                            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Cupiditate
                                                repellendus reiciendis quae, magnam provident illo! Eligendi, odio. Enim
                                                autem placeat aliquid explicabo! Quis, dignissimos magni aliquam
                                                nesciunt
                                                ipsum nihil inventore iusto nam, quasi natus eveniet id necessitatibus
                                                sint
                                                minima, nulla sit tempore? Cum nostrum laboriosam saepe, explicabo
                                                inventore, doloribus, incidunt ut eum voluptatem possimus mollitia
                                                corporis
                                                ipsa vero ullam consequuntur!</p>
                                        </div>
                                        <div class="teacher-quality">
                                            <h3>Certificate</h3>
                                            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Facere
                                                aspernatur
                                                consequatur atque inventore tempora laboriosam fuga voluptatibus qui
                                                reiciendis adipisci minus similique, error voluptas? Eaque adipisci
                                                quibusdam enim velit. At laboriosam molestias necessitatibus! Nemo,
                                                debitis
                                                quae ab neque quas impedit.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="tab-pane" id="teacher-class" role="tabpanel"
                                 aria-labelledby="teacher-class-tab">
                                <div class="container">
                                    <div class="instructor-class-area">
                                        <div class="teacher-free-class">
                                            <div class="row">
                                                <div class="col-12">
                                                    <h2>Free Class</h2>
                                                </div>
                                                <div class="col-md-6 col-lg-3 pb-4">
                                                    <div class="instructor-card">
                                                        <div class="instructor-card-video">
                                                            <div class="ratio ratio-16x9">
                                                                <iframe src="https://www.youtube.com/embed/trm6pcG9dL8?si=H_RpA_BD8XxGYFkt"
                                                                        title="YouTube video" allowfullscreen></iframe>
                                                            </div>
                                                        </div>
                                                        <div class="instructor-content">
                                                            <h3>৪৭ তম বিসিএস প্রস্তুতিতে গুরুত্বপূর্ণ </h3>
                                                            <div class="instructor-review">
                                                                <i class="fas fa-star"></i>
                                                                <i class="fas fa-star"></i>
                                                                <i class="fas fa-star"></i>
                                                                <i class="fas fa-star"></i>
                                                                <i class="far fa-star"></i>
                                                            </div>
                                                            <p>5 years of experience teaching Math. Currently working at
                                                                Weston
                                                                school.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 col-lg-3 pb-4">
                                                    <div class="instructor-card">
                                                        <div class="instructor-card-video">
                                                            <div class="ratio ratio-16x9">
                                                                <iframe src="https://www.youtube.com/embed/trm6pcG9dL8?si=H_RpA_BD8XxGYFkt"
                                                                        title="YouTube video" allowfullscreen></iframe>
                                                            </div>
                                                        </div>
                                                        <div class="instructor-content">
                                                            <h3>৪৭ তম বিসিএস প্রস্তুতিতে গুরুত্বপূর্ণ </h3>
                                                            <div class="instructor-review">
                                                                <i class="fas fa-star"></i>
                                                                <i class="fas fa-star"></i>
                                                                <i class="fas fa-star"></i>
                                                                <i class="fas fa-star"></i>
                                                                <i class="far fa-star"></i>
                                                            </div>
                                                            <p>5 years of experience teaching Math. Currently working at
                                                                Weston
                                                                school.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 col-lg-3 pb-4">
                                                    <div class="instructor-card">
                                                        <div class="instructor-card-video">
                                                            <div class="ratio ratio-16x9">
                                                                <iframe src="https://www.youtube.com/embed/trm6pcG9dL8?si=H_RpA_BD8XxGYFkt"
                                                                        title="YouTube video" allowfullscreen></iframe>
                                                            </div>
                                                        </div>
                                                        <div class="instructor-content">
                                                            <h3>৪৭ তম বিসিএস প্রস্তুতিতে গুরুত্বপূর্ণ </h3>
                                                            <div class="instructor-review">
                                                                <i class="fas fa-star"></i>
                                                                <i class="fas fa-star"></i>
                                                                <i class="fas fa-star"></i>
                                                                <i class="fas fa-star"></i>
                                                                <i class="far fa-star"></i>
                                                            </div>
                                                            <p>5 years of experience teaching Math. Currently working at
                                                                Weston
                                                                school.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 col-lg-3 pb-4">
                                                    <div class="instructor-card">
                                                        <div class="instructor-card-video">
                                                            <div class="ratio ratio-16x9">
                                                                <iframe src="https://www.youtube.com/embed/trm6pcG9dL8?si=H_RpA_BD8XxGYFkt"
                                                                        title="YouTube video" allowfullscreen></iframe>
                                                            </div>
                                                        </div>
                                                        <div class="instructor-content">
                                                            <h3>৪৭ তম বিসিএস প্রস্তুতিতে গুরুত্বপূর্ণ </h3>
                                                            <div class="instructor-review">
                                                                <i class="fas fa-star"></i>
                                                                <i class="fas fa-star"></i>
                                                                <i class="fas fa-star"></i>
                                                                <i class="fas fa-star"></i>
                                                                <i class="far fa-star"></i>
                                                            </div>
                                                            <p>5 years of experience teaching Math. Currently working at
                                                                Weston
                                                                school.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="instructor-courses-area">

                                            <div class="row">
                                                <div class="col-12">
                                                    <h2>Courses</h2>
                                                </div>

                                                <div class="col-md-6 col-lg-4 pb-4">
                                                    <div class="teacher-course-area">
                                                        <div class="teacher-course-img">
                                                            <img src="assets/images/instructor/teacher-course.png"
                                                                 alt="" srcset="">
                                                        </div>
                                                        <div class="teacher-course-content">
                                                            <h4>Youtube Marketing</h4>
                                                            <p class="text-muted">Product Management Masterclass, you
                                                                will learn with Sarah Johnson - Head</p>
                                                            <h5><span>Tk 380</span> <s>500</s></h5>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 col-lg-4 pb-4">
                                                    <div class="teacher-course-area">
                                                        <div class="teacher-course-img">
                                                            <img src="assets/images/instructor/teacher-course.png"
                                                                 alt="" srcset="">
                                                        </div>
                                                        <div class="teacher-course-content">
                                                            <h4>Youtube Marketing</h4>
                                                            <p class="text-muted">Product Management Masterclass, you
                                                                will learn with Sarah Johnson - Head</p>
                                                            <h5><span>Tk 380</span> <s>500</s></h5>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 col-lg-4 pb-4">
                                                    <div class="teacher-course-area">
                                                        <div class="teacher-course-img">
                                                            <img src="assets/images/instructor/teacher-course.png"
                                                                 alt="" srcset="">
                                                        </div>
                                                        <div class="teacher-course-content">
                                                            <h4>Youtube Marketing</h4>
                                                            <p class="text-muted">Product Management Masterclass, you
                                                                will learn with Sarah Johnson - Head</p>
                                                            <h5><span>Tk 380</span> <s>500</s></h5>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="App_store" class="background-res background-ats py-5"
                 style="background-image: url('{{ asset('frontend') }}/assets/images/exam-page/footer-background.png')">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="style-2phone-image">
                            <img src="{{ asset('frontend') }}/assets/images/exam-page/2-mobile.png" class="img-fluid" alt="" srcset="">
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

    </main>
@endsection
