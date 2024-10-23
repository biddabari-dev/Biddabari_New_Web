@extends('frontend.master')

@section('title')
    Biddabari - The First Job Study Online Platform in Bangladesh
@endsection
@push('style')
    <style>
        .text-content {
            background-image: url('{{ url('frontend/popup-text-bg-img.avif') }}');
            background-size: cover;
            /* Ensures the image covers the entire element */
            background-position: center;
            /* Centers the image */
            background-repeat: no-repeat;
            /* Prevents the image from repeating */

        }

        .btn-link {
            background-color: #000;
            text-align: right;
        }

        .btn-link a {
            color: #f9f9f9;
        }

        .popup-img {}

        .btn-close {
            position: absolute;
            top: -20px !important;
            right: 0px;
            border-radius: 50%;
            width: 26px;
            height: 26px;
            z-index: 1100;
            background-color: #ffffff;
            opacity: 0.5;
            display: block !important;
        }

        .modal .btn-close {
            z-index: 1100;
        }

        @media only screen and (max-width: 767px) {
            .p-0 {
                padding-left: 0px !important;
                padding-right: 0px !important;
            }
        }

        @media only screen and (min-width: 768px) and (max-width: 991px) {
            .p-0 {
                padding-left: 0px !important;
                padding-right: 0px !important;
            }
        }

        @media only screen and (max-width: 768px) {
            .btn-close {
                width: 24px;
                height: 24px;
                top: -20px !important;
                right: 0px !important;
                background-color: #ffffff;
                opacity: 0.5;
                z-index: 1100;

            }
        }
    </style>
@endpush
@section('body')
    <section id="Home_add">
        <div class="home-1st-add-image">
            <img src="{{ asset('frontend') }}/assets/images/home-page/home-page-bn.webp" alt="Home 1st Add Banner"
                srcset="">
        </div>
    </section>

    <main>
        <section id="Home_main_banner" class="background-res background-ats py-5"
                style="background-image: url('{{ asset('frontend') }}/assets/images/home-page/home-page-main-banner.jpg')">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 col-lg-8">
                            <div class="home-1st-slide">
                                <div class="variable-width">
                                    @foreach ($courses as $item)
                                    <div class="hero-slide">
                                        <div class="exam-package-area">
                                            <div class="package-exam-image">
                                                <a href="{{ route('front.course-details', ['slug' => $item->slug]) }}">
                                                    <img src="{{ static_asset($item->banner ? $item->banner : 'frontend/assets/images/exam-page/bankjob-banner.jpg') }}"
                                                        alt="{{ $item->title }}" srcset="" />
                                                </a>
                                            </div>
                                            <div class="package-exam-content">
                                                <div class="package-exam-title pt-3">
                                                    <h2 class="fw-bold"><a href="course-details.html">{{ Str::limit($item->title, 40) }}</a></h2>
                                                </div>
                                                <div class="row gy-2 button-and-price">
                                                    <div class="col-12">
                                                        <div class="package-exam-rating">
                                                            <i class="fas fa-star"></i>
                                                            <i class="fas fa-star"></i>
                                                            <i class="fas fa-star"></i>
                                                            <i class="fas fa-star"></i>
                                                            <i class="far fa-star"></i>
                                                        </div>

                                                    </div>
                                                    <div class="col-12">
                                                        <a href="{{ route('front.course-details', ['slug' => $item->slug]) }}" class="btn btn_warning w-100">View Details <i
                                                                class="fa-solid fa-arrow-right"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 col-lg-4">
                            <div class="main-banner-video">
                                <div class="ratio ratio-16x9">
                                    <iframe src="https://www.youtube.com/embed/MbAMQXsp88M?si=9aTUs_YxqxlGsKaY"
                                        title="YouTube video" allowfullscreen></iframe>
                                </div>
                            </div>
                            <div class="home-video-feature-area">
                                <div class="row">
                                    <div class="col-3">
                                        <div class="home-feature-video">
                                            <div class="ratio ratio-1x1">
                                                <iframe
                                                    src="https://www.youtube.com/embed/MbAMQXsp88M?si=9aTUs_YxqxlGsKaY"
                                                    title="YouTube video" allowfullscreen></iframe>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-3">
                                        <div class="home-feature-video">
                                            <div class="ratio ratio-1x1">
                                                <iframe
                                                    src="https://www.youtube.com/embed/MbAMQXsp88M?si=9aTUs_YxqxlGsKaY"
                                                    title="YouTube video" allowfullscreen></iframe>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-3">
                                        <div class="home-feature-video">
                                            <div class="ratio ratio-1x1">
                                                <iframe
                                                    src="https://www.youtube.com/embed/MbAMQXsp88M?si=9aTUs_YxqxlGsKaY"
                                                    title="YouTube video" allowfullscreen></iframe>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-3">
                                        <div class="home-feature-video">
                                            <div class="ratio ratio-1x1">
                                                <iframe
                                                    src="https://www.youtube.com/embed/MbAMQXsp88M?si=9aTUs_YxqxlGsKaY"
                                                    title="YouTube video" allowfullscreen></iframe>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

        <section id="Home_category" class="background-res background-ats py-5"
            style="background-image: url('{{ asset('frontend') }}/assets/images/home-page/home-page-category-bg.jpg')">
            <div class="container">
                <div class="row">
                    <div class="title-area text-center">
                        <h1 class="fw-bold">নিজের শেখা নিজেই গুছিয়ে নেয়ার <br>
                            <span class="">যাত্রা শুরু হোক</span>
                        </h1>
                        <p class="text-muted">
                            প্রতিযোগিতামূলক এই জব-মার্কেটে নিজের ক্যারিয়ারকে নিয়ে যান অনন্য
                            চ্চতায়।
                        </p>
                    </div>
                </div>
                <div class="home-category-area pb-5">
                    <div class="row g-3">
                        <div class="col-md-6 col-lg-4">
                            <div class="my-home-category">
                                <div class="my-home-category-icon">
                                    <!-- <i class="fa-solid fa-graduation-cap"></i> -->
                                    <img src="{{ asset('frontend') }}/assets/images/home-page/category/home.png"
                                        alt="" srcset="">
                                </div>
                                <div class="my-home-category-content">
                                    <h3>আমাদের বিদাবাড়ি</h3>
                                    <p>প্রতিযোগিতামূলক এই জব-মার্কেটে নিজের ক্যারিয়ারকে</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4">
                            <a href="{{ route('front.guideline') }}" class="text-black">
                                <div class="my-home-category">
                                    <div class="my-home-category-icon">
                                        <img src="{{ asset('frontend') }}/assets/images/home-page/category/guideline.png"
                                            alt="" srcset="">
                                    </div>
                                    <div class="my-home-category-content">
                                        <h3>গাইডলাইন</h3>
                                        <p>প্রতিযোগিতামূলক এই জব-মার্কেটে নিজের ক্যারিয়ারকে</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-6 col-lg-4">
                            <a href="{{ route('front.instructors') }}" class="text-black">
                                <div class="my-home-category">
                                    <div class="my-home-category-icon">
                                        <img src="{{ asset('frontend') }}/assets/images/home-page/category/teachers.png"
                                            alt="" srcset="">
                                    </div>
                                    <div class="my-home-category-content">
                                        <h3>শিক্ষকবৃন্দ</h3>
                                        <p>প্রতিযোগিতামূলক এই জব-মার্কেটে নিজের ক্যারিয়ারকে</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-6 col-lg-4">
                            <div class="my-home-category">
                                <div class="my-home-category-icon">
                                    <img src="{{ asset('frontend') }}/assets/images/home-page/category/media.png"
                                        alt="" srcset="">
                                </div>
                                <div class="my-home-category-content">
                                    <h3>স্যোশাল মিডিয়ায় আমরা</h3>
                                    <p>প্রতিযোগিতামূলক এই জব-মার্কেটে নিজের ক্যারিয়ারকে</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4">
                            <a href="{{ route('front.all-job-circulars') }}" class="text-black">
                                <div class="my-home-category">
                                    <div class="my-home-category-icon">
                                        <img src="{{ asset('frontend') }}/assets/images/home-page/category/jobcircular.png"
                                            alt="" srcset="">
                                    </div>
                                    <div class="my-home-category-content">
                                        <h3>জব সার্কুলার</h3>
                                        <p>প্রতিযোগিতামূলক এই জব-মার্কেটে নিজের ক্যারিয়ারকে</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-6 col-lg-4">
                            <div class="my-home-category">
                                <div class="my-home-category-icon">
                                    <img src="{{ asset('frontend') }}/assets/images/home-page/category/questions.png"
                                        alt="" srcset="">
                                </div>
                                <div class="my-home-category-content">
                                    <h3>প্রশ্নের লাইভ সমাধান</h3>
                                    <p>প্রতিযোগিতামূলক এই জব-মার্কেটে নিজের ক্যারিয়ারকে</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="Our_service" class="background-res background-ats py-5"
            style="background-image: url('{{ asset('frontend') }}/assets/images/home-page/main-category-bg.jpg')">
            <div class="container">
                <div class="row">
                    <div class="title-area text-center">
                        <h2 class="fw-bold">দেশসেরা স্কিল ডেভেলপমেন্ট <br>
                            <span class="">প্লাটফর্ম</span>
                        </h2>
                        <p class="text-white">
                            প্রতিযোগিতামূলক এই জব-মার্কেটে নিজের ক্যারিয়ারকে নিয়ে যান অনন্য
                            চ্চতায়।
                        </p>
                    </div>
                </div>
                <div class="home-services-area">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="my-home-service">
                                <div class="my-home-service-icon">
                                    <img src="{{ asset('frontend') }}/assets/images/home-page/our-service/job.png"
                                        alt="" srcset="">
                                </div>
                                <div class="my-home-service-content">
                                    <h3>আমাদের বিদাবাড়ি</h3>
                                    <p>প্রতিযোগিতামূলক এই জব-মার্কেটে নিজের ক্যারিয়ারকে</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="my-home-service">
                                <div class="my-home-service-icon">
                                    <img src="{{ asset('frontend') }}/assets/images/home-page/our-service/Group 1000007140.png"
                                        alt="" srcset="">
                                </div>
                                <div class="my-home-service-content">
                                    <h3>আমাদের বিদাবাড়ি</h3>
                                    <p>প্রতিযোগিতামূলক এই জব-মার্কেটে নিজের ক্যারিয়ারকে</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="my-home-service">
                                <div class="my-home-service-icon">
                                    <img src="{{ asset('frontend') }}/assets/images/home-page/our-service/exam.png"
                                        alt="" srcset="">
                                </div>
                                <div class="my-home-service-content">
                                    <h3>আমাদের বিদাবাড়ি</h3>
                                    <p>প্রতিযোগিতামূলক এই জব-মার্কেটে নিজের ক্যারিয়ারকে</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="my-home-service">
                                <div class="my-home-service-icon">
                                    <img src="{{ asset('frontend') }}/assets/images/home-page/our-service/Group 1000007142.png"
                                        alt="" srcset="">
                                </div>
                                <div class="my-home-service-content">
                                    <h3>আমাদের বিদাবাড়ি</h3>
                                    <p>প্রতিযোগিতামূলক এই জব-মার্কেটে নিজের ক্যারিয়ারকে</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </section>

        <section id="Home_Our_courses">
            <div class="container">
                <div class="row">
                    <div class="title-area text-center">
                        <h2 class="fw-bold">আমাদের <span>কোর্সসমুহ</span>
                        </h2>
                        <p class="text-muted">
                            প্রতিযোগিতামূলক এই জব-মার্কেটে নিজের ক্যারিয়ারকে নিয়ে যান অনন্য
                            চ্চতায়।
                        </p>
                    </div>
                </div>
                <div class="home-course-category-area">
                    <div class="row g-4">

                        @foreach ($courseCategories as $courseCategory)
                            <div class="col-md-6 col-lg-3">
                                @if ($courseCategory->id == 157)
                                    <a href="{{ route('front.free-courses') }}">
                                        <div class="my-course-category">
                                            <div class="my-course-category-icon">
                                                <i class="fa-solid fa-graduation-cap"></i>
                                            </div>
                                            <div class="my-course-category-content">
                                                <h3>{{ $courseCategory->name }} </h3>
                                                <p>প্রতিযোগিতামূলক এই জব-মার্কেটে নিজের ক্যারিয়ারকে</p>
                                            </div>
                                        </div>
                                    </a>
                                @else
                                    <a href="{{ route('front.category-courses', ['slug' => $courseCategory->slug]) }}">
                                        <div class="my-course-category">
                                            <div class="my-course-category-icon">
                                                <i class="fa-solid fa-graduation-cap"></i>
                                            </div>
                                            <div class="my-course-category-content">
                                                <h3>{{ $courseCategory->name }} </h3>
                                                <p>প্রতিযোগিতামূলক এই জব-মার্কেটে নিজের ক্যারিয়ারকে</p>
                                            </div>
                                        </div>
                                    </a>
                                @endif
                            </div>
                        @endforeach

                    </div>
                </div>
                <div class="all-courses-area">
                    <div class="row">
                        @foreach ($courses as $course)
                            <div class="col-md-6 col-lg-3 mb-4">
                                <div class="exam-package-area">
                                    <div class="package-exam-image">
                                        <a href="{{ route('front.course-details', ['slug' => $course->slug]) }}"><img
                                                src="{{ static_asset($course->banner ? $course->banner : 'frontend/assets/images/exam-page/bankjob-banner.jpg') }}"
                                                alt="{{ $course->alt_text }}" /></a>
                                    </div>
                                    <div class="package-exam-content ms-3">
                                        <div class="package-exam-title pt-3">
                                            <h2 class="fw-bold"><a
                                                    href="{{ route('front.course-details', ['slug' => $course->slug]) }}">{{ Str::limit($course->title, 40) }}</a>
                                            </h2>
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
                                                    @php
                                                        $discountAmount =
                                                            $course->discount_type == 1
                                                                ? $course->discount_amount
                                                                : ($course->price * $course->discount_amount) / 100;
                                                        $discountPrice =
                                                            $course->price -
                                                            (isset($discountAmount) ? $discountAmount : 0);
                                                    @endphp
                                                    <div class="package-exam-total-price text-muted">
                                                        <s class="text-muted">৳ {{ $course->price ?? 0 }}</s>
                                                    </div>
                                                    <div class="package-exam-discount-price">৳ {{ $discountPrice }}</div>
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="package-exam-button">
                                                    <button class="package-exam-details"><a
                                                            href="{{ route('front.course-details', ['slug' => $course->slug]) }}">View
                                                            Details </a></button><br>
                                                    @if ($course->admission_last_date > date('Y-m-d H:i'))
                                                        <a
                                                            href="{{ route('front.checkout', ['type' => 'course', 'slug' => $course->slug]) }}"><button
                                                                class="custom-btn btn-12">
                                                                <span>ক্লিক করুন!</span><span>কোর্সটি কিনুন</span>
                                                            </button></a>
                                                    @else
                                                        <button class="custom-btn btn-12">
                                                            <span>সময় শেষ</span><span>ভর্তির সময় শেষ</span>
                                                        </button>
                                                    @endif
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    <div class="see-more-button text-center">
                        <a href="{{ route('front.all-courses') }}" type="button" class="btn btn_warning">See More</a>
                    </div>
                </div>
            </div>
        </section>

        <section id="Our_story" class="background-res background-ats py-5"
            style="background-image: url('{{ asset('frontend') }}/assets/images/home-page/our-service-bg2.png')">
            <div class="container">
                <div class="row">
                    <div class="title-area text-center">
                        <h2 class="fw-bold">আমাদের <span class="">সেবা সমূহ</span>
                        </h2>
                        <p class="text-muted">
                            প্রতিযোগিতামূলক এই জব-মার্কেটে নিজের ক্যারিয়ারকে নিয়ে যান অনন্য
                            চ্চতায়।
                        </p>
                    </div>
                    <div class="our-story-event-area py-4">
                        <div class="row g-4">
                            @foreach ($ourServices as $key => $ourService)
                                <div class="col-md-6 col-lg-3">
                                    <div class="event-area-content">
                                        <div class="event-icon">
                                            <img src="{{ asset('frontend') }}/assets/images/home-page/live-exam.png"
                                                alt="" srcset="">
                                        </div>
                                        <div class="event-content">
                                            <h3>{{ $ourService->title ?? '' }}</h3>
                                            {{-- <p>{!! $ourService->content !!}</p> --}}
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                    <div class="our-story-video-content-area py-4">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="our-story-video-area">
                                    <div class="video-wrapper">
                                        <div class="our-story-video-2">
                                            <iframe src="https://www.youtube.com/embed/bhCWhEosa3Y?si=myZrYsOTKstGK0zx"
                                                title="YouTube video player" frameborder="0"
                                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                                referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                                        </div>
                                        <div class="our-story-video-1">
                                            <iframe src="https://www.youtube.com/embed/zNiZcVFfX6k?si=pQ-zTm2HE2XkNfii"
                                                title="YouTube video player" frameborder="0"
                                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                                referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                                        </div>
                                    </div>
                                </div>
                                <div class="our-story-video-3">
                                    <iframe src="https://www.youtube.com/embed/YJMt4M_J1Qs?si=jvr-46R-BGfudmbC"
                                        title="YouTube video player" frameborder="0"
                                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                        referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="our-story-content-area">
                                    <h3>আমাদের
                                        <span class=""> সফলতার গল্প </span>
                                    </h3><br>
                                    <p>বর্তমানে দেশে শিক্ষিত বেকার প্রায় ২৬ লাখ। এর সাথে প্রতি বছরই নতুন আরো দুই
                                        লক্ষ
                                        করে শিক্ষিত বেকার যুক্ত হচ্ছেন। এই ২৬ লাখ মানুষকে তাদের ক্যারিয়ার প্লানিং
                                        অবশ্যই জানতে হবে। তাদেরকে ভালো ও সম্মানজনক কর্মসংস্থান তৈরি করতে হবে।
                                        <br><br>

                                        এই মুহূর্তে রাজধানী ঢাকাসহ দেশের আনাচে-কানাচে ছড়িয়ে থাকা লাখ লাখ চাকরি
                                        প্রত্যাশীদের ভালো ক্যারিয়ারের প্রস্তুতির জন্য অনলাইনই বড় ভরসার জায়গা।
                                        অনলাইনে
                                        যে যেমন পারছে পড়াচ্ছে। এদের মধ্যে ২০১৯ সালের ___তারিখে দেশের লাখ লাখ চাকরি
                                        প্রত্যাশী প্রার্থীদের জন্য দেশের ১ম চাকরি প্রস্তুতির অনলাইন প্ল্যাটফর্ম
                                        “বিদ্যাবাড়ি” প্রতিষ্ঠত হয়। শুরু থেকেই প্রতিষ্ঠানটি পরিচালনায় রয়েছেন জনাব এম
                                        আই
                                        প্রধান মুকুল স্যারের নেতৃত্বে একদল বিসিএস ক্যাডার ও নন-ক্যাডার দক্ষ ও অভীজ্ঞ
                                        একদল শিক্ষক।
                                        এই মুহূর্তে রাজধানী ঢাকাসহ দেশের আনাচে-কানাচে ছড়িয়ে থাকা লাখ লাখ চাকরি
                                        প্রত্যাশীদের ভালো ক্যারিয়ারের প্রস্তুতির জন্য অনলাইনই বড় ভরসার জায়গা।
                                        অনলাইনে
                                        যে যেমন পারছে পড়াচ্ছে। এদের মধ্যে ২০১৯ সালের ___তারিখে দেশের লাখ লাখ চাকরি
                                        প্রত্যাশী প্রার্থীদের জন্য দেশের ১ম চাকরি প্রস্তুতির অনলাইন প্ল্যাটফর্ম
                                        “বিদ্যাবাড়ি” প্রতিষ্ঠত হয়। শুরু থেকেই প্রতিষ্ঠানটি পরিচালনায় রয়েছেন জনাব এম
                                        আই
                                        প্রধান মুকুল স্যারের নেতৃত্বে একদল বিসিএস ক্যাডার ও নন-ক্যাডার দক্ষ ও অভীজ্ঞ
                                        একদল শিক্ষক।
                                    </p>
                                    {{-- <p>{!! $siteSettings->our_speech_text !!}</p> --}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </section>

        <section id="Home_odomiter" class="background-res background-ats py-5"
            style="background-image: url('{{ asset('frontend') }}/assets/images/home-page/odomiter-bg.png')">
            <div class="container">
                <div class="row g-3">
                    <div class="col-6 col-lg-3">
                        <div class="odomiter-content">
                            <h3>157K+</h3>
                            <p>Students</p>
                        </div>
                    </div>
                    <div class="col-6 col-lg-3">
                        <div class="odomiter-content">
                            <h3>100 +</h3>
                            <p>Teachers</p>
                        </div>
                    </div>
                    <div class="col-6 col-lg-3">
                        <div class="odomiter-content">
                            <h3>200+</h3>
                            <p>Staff</p>
                        </div>
                    </div>
                    <div class="col-6 col-lg-3">
                        <div class="odomiter-content">
                            <h3>40+</h3>
                            <p>IT</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="Student_review" class="background-res background-ats py-5"
            style="background-image: url('{{ asset('frontend') }}/assets/images/home-page/student-review-bg.png')">
            <div class="container">
                <div class="row">
                    <div class="title-area text-center">
                        <h2 class="fw-bold">বিদ্যাবাড়ি -ই দেশ সেরা <span> ই-লার্নিং প্লাটফর্ম</span><br>
                            দেখে নেয়া যাক- কি বলছে<br>
                            <span> আমাদের শিক্ষার্থীরা? </span>
                        </h2>
                    </div>
                </div>
                <div class="student-review-area py-4">
                    <div class="row g-4">
                        @foreach ($studentOpinions as $successStudentOpinion)
                            <div class="col-md-6 col-lg-4">
                                <div class="student-review-content">
                                    <div class="student-image">
                                        <img src="https://biddabari-bucket.obs.as-south-208.rcloud.reddotdigitalit.com/{{ $successStudentOpinion->image ?? 'frontend/assets/images/testimonials/s-1.jpg' }}"
                                            alt="" srcset="" class="img img-thumbnail p-2">
                                    </div>
                                    <div class="student-name mt-2">
                                        <h4>{{ $successStudentOpinion->name ?? 'Student Name' }}</h4>
                                    </div>
                                    <div class="review">
                                        <p>{!! $successStudentOpinion->comment !!}</p>
                                    </div>
                                </div>
                            </div>
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
    </main>
    <!-- Modal -->
    @if (!empty($poppup))
        <div class="modal fade" id="popupModal" data-bs-backdrop="static" data-modal-parent="courseContentModal">
            <div class="modal-dialog modal-dialog-centered modal-lg">
                <div class="modal-content">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    <div class="modal-body p-0">
                        <div class="card card-body p-0">
                            @if (!empty($poppup->image))
                                <img src="{{ $poppup->image ? 'https://biddabari-bucket.obs.as-south-208.rcloud.reddotdigitalit.com/' . $poppup->image : asset('frontend/logo/biddabari-card-logo.jpg') }}"
                                    alt="popup-img" class="popup-img" style="height: 60%;">
                                {{-- <img src="{{ asset(file_exists_obs($poppup->image) ? $poppup->image : 'frontend/logo/biddabari-card-logo.jpg') }}"
                                    alt="popup-img" class="popup-img" height="60%"> --}}
                            @else
                                <div class="text-content p-2 text-white">
                                    @if (!empty($poppup->description))
                                        <div style="color: #ffffff !important;">{!! $poppup->description !!}</div>
                                    @endif
                                </div>
                            @endif

                            @if (!empty($poppup->active_btn_link))
                                <div class="btn-link p-0">
                                    <a class="btn-sm ms-auto"
                                        href="{{ $poppup->active_btn_link ?? '' }}">{{ $poppup->action_btn_text ?? '' }}</a>
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endif
@endsection

@push('script')
    {{-- @if (isset($poppup))
        <script>
            $(function() {
                setTimeout(function() {
                    $('#popupModal').modal('show');
                }, 3000)
            });
        </script>
    @endif --}}
@endpush
