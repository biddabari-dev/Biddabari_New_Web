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
                                        src="{{ static_asset($courseCategory->second_image ? $courseCategory->second_image : 'backend/assets/uploaded-files/course/course-second-image/3-1726898624723923002583872.jpg') }}"
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
