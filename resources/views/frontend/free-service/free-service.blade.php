@extends('frontend.master')

@section('title')
Biddabari - All Course
@endsection

@section('body')
<main>

    <section id="Free-service-banner" class="background-res-free-banner background-ats py-5"
        style="background-image: url('{{ asset('frontend') }}/assets/images/free-service/free-service-banner-bg.png')">
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

    <section id="Home_Our_courses" class="background-res-free-service background-ats py-5"
        style="background-image: url('{{ asset('frontend') }}/assets/images/free-service/free-service-bg.jpg')">
        <div class="container">
            <div class="title-area text-center">
                <h1 class="fw-bold">আমাদের <span class="">ফ্রি সার্ভিস</span></h1>
                <p class="text-muted">
                    প্রতিযোগিতামূলক এই জব-মার্কেটে নিজের ক্যারিয়ারকে নিয়ে যান অনন্য
                    চ্চতায়। আপনার জন্য <br />প্রয়োজনীয় সব ক্যাটাগরিই রয়েছে এখানে।
                    বেছে নিন আপনার সবচেয়ে পছন্দের কোর্সটি।
                </p>
            </div>
        </div>
        <div class="container">
            <div class="all-courses-area">
                <div class="row">
                    @foreach($courseCategories as $courseCategory)
                        @if($courseCategory->id != 157)
                        <div class="col-md-6 col-lg-3 mb-4">
                            <div class="categories-item card">
                                <a href="{{ route('front.free.course', ['slug' => $courseCategory->slug]) }}">
                                    <img loading="lazy"
                                        src="{{ asset(isset($courseCategory->second_image) ? $courseCategory->second_image : 'https://biddabari-bucket.obs.as-south-208.rcloud.reddotdigitalit.com/backend/assets/uploaded-files/course/course-second-image/3-1726898624723923002583872.jpg') }}"
                                        alt="Categories" class="w-100 border-0">
                                </a>
                                <div class="content p-2 pt-3">
                                    <a class="text-black text-center" href="{{ route('front.free.course', ['slug' => $courseCategory->slug]) }}">
                                        <i class="{{ $courseCategory->icon ?? 'flaticon-web-development' }}"></i>
                                        <h5>{{ $courseCategory->name }}</h5>
                                    </a>
                                </div>
                            </div>
                        </div>
                        @endif
                    @endforeach
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
@push('style')
<style>
   @media only screen and (min-width: 280px) and (max-width: 420px){
        .cat_mobile_res .col-md-3 {
            width: 50% !important;
        }
   }
</style>

@endpush
