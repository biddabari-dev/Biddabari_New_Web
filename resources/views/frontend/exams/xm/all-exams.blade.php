@extends('frontend.master')

@section('body')
<main>


    <section id="Free-service-banner" class="background-res-free-banner background-ats py-5"
        style="background-image: url('{{ asset('frontend') }}/assets/images/free-service/free-service-banner-bg.png')" ;>
        <div class="container">
            <div class="free-course-banner">
                <div class="free-course-banner-image">
                    <a href=""><img src="{{ asset('frontend') }}/assets/images/free-service/free-service-banner.png" alt="Image 1"></a>
                </div>
                <div class="free-course-banner-image">
                    <a href=""><img src="{{ asset('frontend') }}/assets/images/free-service/free-service-banner.png" alt="Image 1"></a>
                </div>

            </div>
        </div>
    </section>

    <section id="Home_Our_courses">
        <div class="container">
            <div class="row">
                <div class="title-area text-center">
                    <h1 class="fw-bold">আমাদের <span class="text-brand">এক্সাম</span> সমূহ</h1>
                    <p class="text-muted">
                        প্রতিযোগিতামূলক এই জব-মার্কেটে নিজের ক্যারিয়ারকে নিয়ে যান অনন্য
                        চ্চতায়। আপনার জন্য <br />প্রয়োজনীয় সব ক্যাটাগরিই রয়েছে এখানে।
                        বেছে নিন আপনার সবচেয়ে পছন্দের কোর্সটি।
                    </p>
                </div>
            </div>
            <div class="home-course-category-area">
                <div class="row g-4">
                    @foreach($examCategories as $examCategory)
                    <div class="col-md-6 col-lg-3">
                        <a href="">
                        <div class="my-course-category">
                            <div class="my-course-category-icon">
                                <i class="fa-solid fa-graduation-cap"></i>
                            </div>
                            <div class="my-course-category-content">
                                <h3>{{ $examCategory->name }}</h3>
                                <p>প্রতিযোগিতামূলক এই জব-মার্কেটে নিজের ক্যারিয়ারকে</p>
                            </div>
                        </div>
                        </a>
                    </div>
                    @endforeach
                </div>
            </div>
            <div class="all-courses-area">
                <div class="row">
                    <div class="col-md-6 col-lg-3 mb-4">
                        <div class="exam-package-area">
                            <div class="package-exam-image">
                                <img src="{{ asset('frontend') }}/assets/images/exam-page/bankjob-banner.jpg" alt="package-image"
                                    srcset="" />
                            </div>
                            <div class="package-exam-content ms-3">
                                <div class="package-exam-title pt-3">
                                    <h2 class="fw-bold">Bank Job Special Care Live Batch-2</h2>
                                </div>
                                <div class="row button-and-price pb-2">
                                    <div class="col">
                                        <div class="package-exam-rating">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="far fa-star"></i>
                                        </div>
                                        <div class="package-exam-price">
                                            <div class="package-exam-total-price text-muted">
                                                <s class="text-muted"> ট 14000</s>
                                            </div>
                                            <div class="package-exam-discount-price">ট 7000</div>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="package-exam-button">
                                            <button class="package-exam-details"><a
                                                    href="course-details.html">View Details </a></button><br>
                                            <button class="custom-btn btn-12">
                                                <span>Click!</span><span>Buy Now</span>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3 mb-4">
                        <div class="exam-package-area">
                            <div class="package-exam-image">
                                <img src="{{ asset('frontend') }}/assets/images/exam-page/bankjob-banner.jpg" alt="package-image"
                                    srcset="" />
                            </div>
                            <div class="package-exam-content ms-3">
                                <div class="package-exam-title pt-3">
                                    <h2 class="fw-bold">Bank Job Special Care Live Batch-2</h2>
                                </div>
                                <div class="row button-and-price pb-2">
                                    <div class="col">
                                        <div class="package-exam-rating">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="far fa-star"></i>
                                        </div>
                                        <div class="package-exam-price">
                                            <div class="package-exam-total-price text-muted">
                                                <s class="text-muted"> ট 14000</s>
                                            </div>
                                            <div class="package-exam-discount-price">ট 7000</div>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="package-exam-button">
                                            <button class="package-exam-details"><a
                                                    href="course-details.html">View Details </a></button><br>
                                            <button class="custom-btn btn-12">
                                                <span>Click!</span><span>Buy Now</span>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3 mb-4">
                        <div class="exam-package-area">
                            <div class="package-exam-image">
                                <img src="{{ asset('frontend') }}/assets/images/exam-page/bankjob-banner.jpg" alt="package-image"
                                    srcset="" />
                            </div>
                            <div class="package-exam-content ms-3">
                                <div class="package-exam-title pt-3">
                                    <h2 class="fw-bold">Bank Job Special Care Live Batch-2</h2>
                                </div>
                                <div class="row button-and-price pb-2">
                                    <div class="col">
                                        <div class="package-exam-rating">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="far fa-star"></i>
                                        </div>
                                        <div class="package-exam-price">
                                            <div class="package-exam-total-price text-muted">
                                                <s class="text-muted"> ট 14000</s>
                                            </div>
                                            <div class="package-exam-discount-price">ট 7000</div>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="package-exam-button">
                                            <button class="package-exam-details"><a
                                                    href="course-details.html">View Details </a></button><br>
                                            <button class="custom-btn btn-12">
                                                <span>Click!</span><span>Buy Now</span>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3 mb-4">
                        <div class="exam-package-area">
                            <div class="package-exam-image">
                                <img src="{{ asset('frontend') }}/assets/images/exam-page/bankjob-banner.jpg" alt="package-image"
                                    srcset="" />
                            </div>
                            <div class="package-exam-content ms-3">
                                <div class="package-exam-title pt-3">
                                    <h2 class="fw-bold">Bank Job Special Care Live Batch-2</h2>
                                </div>
                                <div class="row button-and-price pb-2">
                                    <div class="col">
                                        <div class="package-exam-rating">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="far fa-star"></i>
                                        </div>
                                        <div class="package-exam-price">
                                            <div class="package-exam-total-price text-muted">
                                                <s class="text-muted"> ট 14000</s>
                                            </div>
                                            <div class="package-exam-discount-price">ট 7000</div>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="package-exam-button">
                                            <button class="package-exam-details"><a
                                                    href="course-details.html">View Details </a></button><br>
                                            <button class="custom-btn btn-12">
                                                <span>Click!</span><span>Buy Now</span>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3 mb-4">
                        <div class="exam-package-area">
                            <div class="package-exam-image">
                                <img src="{{ asset('frontend') }}/assets/images/exam-page/bankjob-banner.jpg" alt="package-image"
                                    srcset="" />
                            </div>
                            <div class="package-exam-content ms-3">
                                <div class="package-exam-title pt-3">
                                    <h2 class="fw-bold">Bank Job Special Care Live Batch-2</h2>
                                </div>
                                <div class="row button-and-price pb-2">
                                    <div class="col">
                                        <div class="package-exam-rating">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="far fa-star"></i>
                                        </div>
                                        <div class="package-exam-price">
                                            <div class="package-exam-total-price text-muted">
                                                <s class="text-muted"> ট 14000</s>
                                            </div>
                                            <div class="package-exam-discount-price">ট 7000</div>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="package-exam-button">
                                            <button class="package-exam-details"><a
                                                    href="course-details.html">View Details </a></button><br>
                                            <button class="custom-btn btn-12">
                                                <span>Click!</span><span>Buy Now</span>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3 mb-4">
                        <div class="exam-package-area">
                            <div class="package-exam-image">
                                <img src="{{ asset('frontend') }}/assets/images/exam-page/bankjob-banner.jpg" alt="package-image"
                                    srcset="" />
                            </div>
                            <div class="package-exam-content ms-3">
                                <div class="package-exam-title pt-3">
                                    <h2 class="fw-bold">Bank Job Special Care Live Batch-2</h2>
                                </div>
                                <div class="row button-and-price pb-2">
                                    <div class="col">
                                        <div class="package-exam-rating">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="far fa-star"></i>
                                        </div>
                                        <div class="package-exam-price">
                                            <div class="package-exam-total-price text-muted">
                                                <s class="text-muted"> ট 14000</s>
                                            </div>
                                            <div class="package-exam-discount-price">ট 7000</div>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="package-exam-button">
                                            <button class="package-exam-details"><a
                                                    href="course-details.html">View Details </a></button><br>
                                            <button class="custom-btn btn-12">
                                                <span>Click!</span><span>Buy Now</span>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3 mb-4">
                        <div class="exam-package-area">
                            <div class="package-exam-image">
                                <img src="{{ asset('frontend') }}/assets/images/exam-page/bankjob-banner.jpg" alt="package-image"
                                    srcset="" />
                            </div>
                            <div class="package-exam-content ms-3">
                                <div class="package-exam-title pt-3">
                                    <h2 class="fw-bold">Bank Job Special Care Live Batch-2</h2>
                                </div>
                                <div class="row button-and-price pb-2">
                                    <div class="col">
                                        <div class="package-exam-rating">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="far fa-star"></i>
                                        </div>
                                        <div class="package-exam-price">
                                            <div class="package-exam-total-price text-muted">
                                                <s class="text-muted"> ট 14000</s>
                                            </div>
                                            <div class="package-exam-discount-price">ট 7000</div>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="package-exam-button">
                                            <button class="package-exam-details"><a
                                                    href="course-details.html">View Details </a></button><br>
                                            <button class="custom-btn btn-12">
                                                <span>Click!</span><span>Buy Now</span>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3 mb-4">
                        <div class="exam-package-area">
                            <div class="package-exam-image">
                                <img src="{{ asset('frontend') }}/assets/images/exam-page/bankjob-banner.jpg" alt="package-image"
                                    srcset="" />
                            </div>
                            <div class="package-exam-content ms-3">
                                <div class="package-exam-title pt-3">
                                    <h2 class="fw-bold">Bank Job Special Care Live Batch-2</h2>
                                </div>
                                <div class="row button-and-price pb-2">
                                    <div class="col">
                                        <div class="package-exam-rating">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="far fa-star"></i>
                                        </div>
                                        <div class="package-exam-price">
                                            <div class="package-exam-total-price text-muted">
                                                <s class="text-muted"> ট 14000</s>
                                            </div>
                                            <div class="package-exam-discount-price">ট 7000</div>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="package-exam-button">
                                            <button class="package-exam-details"><a
                                                    href="course-details.html">View Details </a></button><br>
                                            <button class="custom-btn btn-12">
                                                <span>Click!</span><span>Buy Now</span>
                                            </button>
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
