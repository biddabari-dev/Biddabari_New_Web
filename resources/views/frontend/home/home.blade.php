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
        <section id="Home_main_banner" class="background-res background-ats py-3 py-lg-5"
            style="background-image: url('{{ asset('frontend') }}/assets/images/home-page/home-page-main-banner.jpg')">
            <div class="container">
                <div class="row gy-4">
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
                                                    <h2><a href="course-details.html">{{ Str::limit($item->title, 30) }}</a>
                                                    </h2>
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
                                                        <a href="{{ route('front.course-details', ['slug' => $item->slug]) }}"
                                                            class="btn btn_warning text-white bg-brand w-100"> বিস্তারিত
                                                            দেখুন <i class="fa-solid fa-arrow-right"></i></a>
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
                            <div class="ratio ratio-16x9"
                                style="position: relative; width: 100%; height: 0; padding-bottom: 56.25%;">
                                <iframe id="videoIframe" src="https://www.youtube.com/embed/EGGWGLALnWU?si=9aTUs_YxqxlGsKaY"
                                    title="YouTube video" frameborder="0" allowfullscreen
                                    style="position: absolute; top: 0; left: 0; width: 100%; height: 100%;"></iframe>
                                <!-- Transparent overlay to trigger the click event -->
                                <div onclick="showVideoModal('https://www.youtube.com/embed/EGGWGLALnWU?autoplay=1')"
                                    style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; cursor: pointer;">
                                </div>
                            </div>
                        </div>
                        <div class="home-video-feature-area mt-2">
                            <div class="row">
                                <div class="col-3">
                                    <div class="home-feature-video">
                                        <div class="ratio ratio-1x1"
                                            style="position: relative; width: 100%; height: 0; padding-bottom: 100%;">
                                            <iframe id="videoIframe"
                                                src="https://www.youtube.com/embed/o8ENSjeWip4?si=9aTUs_YxqxlGsKaY"
                                                title="YouTube video" frameborder="0" allowfullscreen
                                                style="position: absolute; top: 0; left: 0; width: 100%; height: 100%;"></iframe>
                                            <!-- Transparent overlay to trigger the click event -->
                                            <div onclick="showVideoModal('https://www.youtube.com/embed/o8ENSjeWip4?autoplay=1')"
                                                style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; cursor: pointer;">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-3 ">
                                    <div class="home-feature-video">
                                        <div class="ratio ratio-1x1"
                                            style="position: relative; width: 100%; height: 0; padding-bottom: 100%;">
                                            <iframe id="videoIframe"
                                                src="https://www.youtube.com/embed/TnCYR3kW_QU?si=9aTUs_YxqxlGsKaY"
                                                title="YouTube video" frameborder="0" allowfullscreen
                                                style="position: absolute; top: 0; left: 0; width: 100%; height: 100%;"></iframe>
                                            <!-- Transparent overlay to trigger the click event -->
                                            <div onclick="showVideoModal('https://www.youtube.com/embed/TnCYR3kW_QU?autoplay=1')"
                                                style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; cursor: pointer;">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-3 ">
                                    <div class="home-feature-video">
                                        <div class="ratio ratio-1x1"
                                            style="position: relative; width: 100%; height: 0; padding-bottom: 100%;">
                                            <iframe id="videoIframe"
                                                src="https://www.youtube.com/embed/DnpjPBACH6M?si=9aTUs_YxqxlGsKaY"
                                                title="YouTube video" frameborder="0" allowfullscreen
                                                style="position: absolute; top: 0; left: 0; width: 100%; height: 100%;"></iframe>
                                            <!-- Transparent overlay to trigger the click event -->
                                            <div onclick="showVideoModal('https://www.youtube.com/embed/DnpjPBACH6M?autoplay=1')"
                                                style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; cursor: pointer;">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-3 ">
                                    <div class="home-feature-video">
                                        <div class="ratio ratio-1x1"
                                            style="position: relative; width: 100%; height: 0; padding-bottom: 100%;">
                                            <iframe id="videoIframe"
                                                src="https://www.youtube.com/embed/DnpjPBACH6M?si=9aTUs_YxqxlGsKaY"
                                                title="YouTube video" frameborder="0" allowfullscreen
                                                style="position: absolute; top: 0; left: 0; width: 100%; height: 100%;"></iframe>
                                            <!-- Transparent overlay to trigger the click event -->
                                            <div onclick="showVideoModal('https://www.youtube.com/embed/DnpjPBACH6M?autoplay=1')"
                                                style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; cursor: pointer;">
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

        <section id="Home_category" class="background-res background-ats py-5"
            style="background-image: url('{{ asset('frontend') }}/assets/images/home-page/home-page-category-bg.jpg')">
            <div class="container">
                <div class="row">
                    <div class="title-area text-center">
                        <h1 class="fw-bold">নিজের শেখা নিজেই গুছিয়ে নেয়ার <br>
                            <span>যাত্রা শুরু হোক</span>
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
                            <a href="{{ route('front.social-media') }}" class="text-black">
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
                            </a>
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
                            <a href="{{ route('front.live-questions-solving') }}" class="text-black">
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
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="Our_service" class="background-res background-ats py-5"
            style="background-image: url('{{ asset('frontend') }}/assets/images/home-page/main-category-bg.jpg')">
            <div class="container py-4">
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
                                    <h3>চাকরির প্রস্তুতি </h3>
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
                                    <h3>আইটি স্কিল</h3>
                                    <p>প্রতিযোগিতামূলক এই জব-মার্কেটে নিজের ক্যারিয়ারকে</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <a href="{{ route('front.all-exams') }}">
                                <div class="my-home-service">
                                    <div class="my-home-service-icon">
                                        <img src="{{ asset('frontend') }}/assets/images/home-page/our-service/exam.png"
                                            alt="" srcset="">
                                    </div>
                                    <div class="my-home-service-content">
                                        <h3>পরীক্ষা</h3>
                                        <p>প্রতিযোগিতামূলক এই জব-মার্কেটে নিজের ক্যারিয়ারকে</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-6">
                            <a href="https://nextpage.com.bd" target="_blank">
                                <div class="my-home-service">
                                    <div class="my-home-service-icon">
                                        <img src="{{ asset('frontend') }}/assets/images/home-page/our-service/Group 1000007142.png"
                                            alt="" srcset="">
                                    </div>
                                    <div class="my-home-service-content">
                                        <h3>বইবাড়ি</h3>
                                        <p>প্রতিযোগিতামূলক এই জব-মার্কেটে নিজের ক্যারিয়ারকে</p>
                                    </div>
                                </div>
                            </a>
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
                                                <i class="fa-solid fa-book-tanakh"></i>
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

                                                <i class="fa-solid fa-book-tanakh"></i>
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
                    <div class="row g-2 g-md-3 g-lg-4">
                        @if (isset($courses))
                            @foreach ($courses as $course)
                                @include('frontend.courses.include-courses-course', ['course' => $course])
                            @endforeach
                        @endif
                    </div>
                    <div class="see-more-button text-center mt-5">
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
                        <div class="row g-3 g-lg-4">
                            @foreach ($ourServices as $key => $ourService)
                                <div class="col-6 col-lg-3">
                                    <div class="event-area-content">
                                        <div class="event-icon">
                                            <img src="{{ asset('frontend') }}/assets/images/home-page/service{{ ($key % 8) + 1 }}.webp" alt="" srcset="">
                                        </div>
                                        <div class="event-content">
                                            <h3><strong> {{ $ourService->title ?? '' }} </strong></h3>
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
                                <div class="our-story-video-area mt-4">
                                    <div class="our-story"
                                        style="position: relative; width: 100%; height: 0; padding-bottom: 56.25%;">
                                        <iframe id="videoIframe2"
                                            src="https://www.youtube.com/embed/EGGWGLALnWU?si=myZrYsOTKstGK0zx"
                                            title="YouTube video player" frameborder="0"
                                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                            referrerpolicy="strict-origin-when-cross-origin" allowfullscreen
                                            style="position: absolute; top: 0; left: 0; width: 100%; height: 100%;"></iframe>
                                        <div onclick="showVideoModal('https://www.youtube.com/embed/EGGWGLALnWU?autoplay=1')"
                                            style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; cursor: pointer;">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="our-story-content-area">
                                    <h3>আমাদের
                                        <span class=""> সফলতার গল্প </span>
                                    </h3>
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
                    <div class="row gx-4">
                        @foreach ($studentOpinions as $successStudentOpinion)
                            <div class="col-md-6 col-lg-4">
                                <div class="student-review-content">
                                    <div class="student-image">
                                        <img src="{{ static_asset($successStudentOpinion->image ?? 'frontend/assets/images/testimonials/s-1.jpg') }}"
                                            alt="" srcset="" class="">
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
    {{-- video Modal --}}
    <!-- Bootstrap Modal Structure -->
    <div class="modal fade" id="videoModal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="embed-responsive embed-responsive-16by9">
                        <iframe id="modalVideo" class="embed-responsive-item" allow="autoplay; encrypted-media"
                            allowfullscreen></iframe>
                    </div>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"
                        style="position: absolute;"></button>
                </div>
            </div>
        </div>
    </div>

@endsection
@push('style')
    <style>
        .embed-responsive {
            position: relative;
            display: block;
            width: 100%;
            padding: 0;
            overflow: hidden;
        }

        .embed-responsive-16by9 {
            padding-top: 56.25%;
            /* 16:9 Aspect Ratio */
        }

        .embed-responsive .embed-responsive-item,
        .embed-responsive iframe {
            position: absolute;
            top: 0;
            left: 0;
            bottom: 0;
            right: 0;
            width: 100%;
            height: 100%;
            border: 0;
        }

        .video-thumbnail {
            position: relative;
            width: 300px;
            /* Set the size you want for the video thumbnail */
            height: 180px;
            background-image: url('your-thumbnail.jpg');
            /* Use a video thumbnail image */
            background-size: cover;
            cursor: pointer;
        }

        .custom-play-button {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            width: 50px;
            /* Adjust size of the play button */
            height: 50px;
            background: url('custom-play-icon.png') no-repeat center center;
            background-size: contain;
            z-index: 1;
        }
    </style>
@endpush
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
    <script>
        // Function to show video modal and set video source
        function showVideoModal(videoSrc) {
            document.getElementById('modalVideo').src = videoSrc + "?autoplay=1"; // Autoplay the video
            $('#videoModal').modal('show');
        }
        // When the modal is hidden, remove the src to stop the video
        $('#videoModal').on('click', '.btn-close', function() {
            document.getElementById('modalVideo').src = ''; // This will stop the video
            $('#videoModal').modal('hide');
        });
    </script>
@endpush
