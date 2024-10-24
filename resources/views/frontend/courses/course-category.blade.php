@extends('frontend.master')
@section('meta-url'){{ request()->url() }}@endsection
@section('title')
Biddabari - All Course
@endsection

@section('body')

<main>

    <section id="Home_Our_courses" class="background-res-free-banner py-5"
        style="background-image: url('{{ asset('frontend') }}/assets/images/our-courses/our-courses.png')" ;>
        <div class="container">
            <div class="row">
                <div class="title-area text-center">
                    <h2 class="fw-bold">{{ $courseCategory->name }} <span>কোর্স</span>
                    </h2>
                    <p class="text-muted">
                        প্রতিযোগিতামূলক এই জব-মার্কেটে নিজের ক্যারিয়ারকে নিয়ে যান অনন্য
                        চ্চতায়।
                    </p>
                </div>
            </div>

            <div class="all-courses-area">
                <div class="row"  id="shorting-data">
                    @foreach ($courseCategory->courses as $course)
                    <div class="col-md-6 col-lg-3 mb-4">
                        <div class="exam-package-area">
                            <div class="package-exam-image">
                                <a href="{{ route('front.course-details', ['slug' => $course->slug]) }}"><img src="{{ static_asset($course->banner ? $course->banner : 'frontend/assets/images/exam-page/bankjob-banner.jpg') }}" alt="{{ $course->alt_text }}"/></a>
                            </div>
                            <div class="package-exam-content ms-3">
                                <div class="package-exam-title pt-3">
                                    <h2 class="fw-bold"><a href="{{ route('front.course-details', ['slug' => $course->slug]) }}">{{ Str::limit($course->title, 40) }}</a></h2>
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
                                        {{--<div class="package-exam-price">
                                            @php
                                                $discountAmount = $course->discount_type == 1  ? $course->discount_amount : ($course->price * $course->discount_amount) / 100;
                                                $discountPrice = $course->price - (isset($discountAmount) ? $discountAmount : 0);
                                            @endphp
                                            <div class="package-exam-total-price text-muted">
                                                <s class="text-muted">৳ {{$course->price ?? 0 }}</s>
                                            </div>
                                            <div class="package-exam-discount-price">৳ {{ $discountPrice }}</div>
                                        </div>--}}

                                        @php
                                            $currentDate = \Carbon\Carbon::now();
                                            $discountStartDate = \Carbon\Carbon::parse($course->discount_start_date);
                                            $discountEndDate = \Carbon\Carbon::parse($course->discount_end_date);
                                            $isDiscountActive = $currentDate->between($discountStartDate, $discountEndDate);
                                            $discountAmount = ($isDiscountActive && $course->discount_type == 1)
                                                                ? $course->discount_amount
                                                                : (($isDiscountActive && $course->discount_type == 2)
                                                                    ? ($course->price * $course->discount_amount) / 100
                                                                    : 0);
                                            $discountPrice = $course->price - $discountAmount;
                                        @endphp

                                        <div class="package-exam-price">

                                            @if($isDiscountActive)
                                                <div class="package-exam-total-price text-muted">
                                                    <s class="text-muted">৳ {{ $course->price ?? 0 }}</s>
                                                </div>
                                                <div class="package-exam-discount-price">৳ {{ $discountPrice }}</div>
                                            @else
                                                <div class="package-exam-discount-price">৳ {{ $course->price }}</div>
                                            @endif
                                        </div>

                                    </div>
                                    <div class="col">
                                        <div class="package-exam-button">
                                            <button class="package-exam-details"><a
                                                    href="{{ route('front.course-details', ['slug' => $course->slug]) }}">View Details </a></button><br>
                                            @if ($course->admission_last_date > date('Y-m-d H:i'))
                                            <a href="{{ route('front.checkout', ['type' => 'course', 'slug' => $course->slug]) }}"><button class="custom-btn btn-12">
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
            </div>
        </div>
    </section>

</main>
@endsection
@push('script')

@endpush
