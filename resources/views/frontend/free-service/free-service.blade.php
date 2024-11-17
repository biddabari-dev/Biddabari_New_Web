@extends('frontend.master')

@section('title')
Biddabari - Free Service
@endsection

@section('body')
<main>

    <section id="Free-service-banner" class="background-res-free-banner background-ats py-2 py-mb-5"
        style="background-image: url('{{ asset('frontend') }}/assets/images/exam-page/footer-background.png')">
        <div class="container">
            @foreach($free_service_slider as $slider)
            <div class="free-course-banner">
                {{-- <div class="free-course-banner-image">
                    <a href=""><img src="{{ asset('frontend') }}/assets/images/free-service/banner-1.webp" alt="Image 1"></a>
                </div> --}}
                <a href="{{ $slider->link }}">
                    <img src="{{ $slider->image ? static_asset($slider->image) : asset('frontend/assets/images/exam-page/banner-1.webp') }}"
                         alt="Image 1"
                         style="border-radius: 20px;">
                </a>
            </div>
            @endforeach
        </div>
    </section>

    <section id="Home_Our_courses" class="background-res-free-service background-ats py-5"
        style="background-image: url('{{ asset('frontend') }}/assets/images/free-service/free-service-bg.jpg')">
        <div class="container">
            <div class="title-area text-center">
                <h2 class="fw-bold"><span class=""> ফ্রি </span>শিখুন!</h2>

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
