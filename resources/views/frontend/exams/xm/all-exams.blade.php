@extends('frontend.master')
@section('title'){{ 'Biddabari | All Exams'}}@endsection
@section('body')
<main>


    <section id="Free-service-banner" class="background-res-free-banner background-ats py-5"
        style="background-image: url('{{ asset('frontend') }}/assets/images/home-page/Background-banner.webp')" ;>
        <div class="container">
            <div class="free-course-banner">
                @foreach($exam_sliders as $slider)
                <div class="free-course-banner-image">
                    
                    <a href="{{ $slider->link }}">
                        <img src="{{ $slider->image ? static_asset($slider->image) : asset('frontend/assets/images/exam-page/banner-1.webp') }}"
                             alt="Image 1"
                             style="border-radius: 20px;">
                    </a>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    <section id="Home_Our_courses">
        <div class="container">
            <div class="row">
                <div class="title-area text-center">
                    <h1 class="fw-bold"> <span class="text-brand">EXAM </span> COURSE!</h1>
                    <br>
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
                <div class="row g-2 g-md-3 g-lg-4">
                    @foreach ($allExams as $exam)
                    @php
                    if ($exam->admission_last_date > date('Y-m-d H:i')){
                        $url = route('front.checkout', ['type' => 'batch_exam', 'slug' => $exam->slug]);
                    }else{
                        $url = "#";
                    }
                    @endphp
                    <div class="col-6 col-lg-3">
                        <div class="exam-package-area">
                            <div class="package-exam-image">
                                <a href="{{ route('front.view-exam', ['slug' => $exam->slug]) }}"><img src="{{ static_asset($exam->banner ? $exam->banner : 'frontend/assets/images/exam-page/bankjob-banner.jpg') }}" alt="{{ $exam->alt_text }}"/></a>
                            </div>
                            <div class="package-exam-content mx-2 mx-lg-3">
                                <div class="package-exam-title pt-3">
                                    <h2 class="fw-bold"><a href="{{ route('front.view-exam', ['slug' => $exam->slug]) }}">{{ Str::limit($exam->title, 40) }}</a></h2>
                                </div>
                                <div class="row button-and-price pb-3 pb-lg-4">
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
                                                $discountAmount = $exam->discount_type == 1  ? $exam->discount_amount : ($exam->price * $exam->discount_amount) / 100;
                                                $discountPrice = $exam->price - (isset($discountAmount) ? $discountAmount : 0);
                                            @endphp
                                            <div class="package-exam-total-price text-muted">
                                                <s class="text-muted">৳ {{$exam->price ?? 0 }}</s>
                                            </div>
                                            <div class="package-exam-discount-price">৳ {{ $discountPrice }}</div>
                                        </div>
                                    </div>
                                    <div class="col text-end">
                                        <div class="package-exam-button">
                                            <button class="package-exam-details"><a
                                                href="{{ route('front.view-exam', ['slug' => $exam->slug]) }}">View Details </a></button><br>
                                            @if ($exam->admission_last_date > date('Y-m-d H:i'))
                                            <a href="{{ route('front.checkout', ['type' => 'batch_exam', 'slug' => $exam->slug]) }}"><button class="custom-btn btn-12">
                                                <span>ক্লিক করুন!</span><span>পরিক্ষা কিনুন</span>
                                            </button></a>
                                            @else
                                            <a href="#">
                                                <div class="custom-btn btn-12">
                                                    <span>সময় শেষ</span><span>পরিক্ষার সময় শেষ</span>
                                                </div>
                                            </a>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
</main>
@endsection
