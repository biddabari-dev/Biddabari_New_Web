@extends('frontend.master')
@section('meta-url'){{ request()->url() }}@endsection
@section('title')
Biddabari - All Course
@endsection

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

    <section id="Home_Our_courses" class="background-res-free-banner py-5"
        style="background-image: url('{{ asset('frontend') }}/assets/images/our-courses/our-courses.png')" ;>
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
                <div class="row"  id="shorting-data">
                    @foreach ($courses as $course)
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
                <div class="auto-load text-center" style="display: none;">
                    <svg version="1.1" id="L9" xmlns="http://www.w3.org/2000/svg"
                        xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                        height="60" viewBox="0 0 100 100" enable-background="new 0 0 0 0"
                        xml:space="preserve">
                        <path fill="#000"
                            d="M73,50c0-12.7-10.3-23-23-23S27,37.3,27,50 M30.9,50c0-10.5,8.5-19.1,19.1-19.1S69.1,39.5,69.1,50">
                            <animateTransform attributeName="transform" attributeType="XML" type="rotate"
                                dur="1s" from="0 50 50" to="360 50 50" repeatCount="indefinite" />
                        </path>
                    </svg>
                </div>
                <div class="see-more-button text-center">
                    <button id="load-more" type="button" class="btn btn_warning">See More</button>
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
@push('script')
<script>
    var page = 1;
    $("#load-more").on('click',function(){
        page++;
        infinteLoadMore(page);
    })
    /*------------------------------------------
    call infinteLoadMore()
    --------------------------------------------*/
    function infinteLoadMore(page) {
        $.ajax({
                url:"?page=" + page,
                datatype: "html",
                type: "get",
                beforeSend: function() {
                    $('.auto-load').show();
                }
            })
            .done(function(response) {
                if (response.html == '') {
                    $('.auto-load').html("We don't have more course");
                    return;
                }
                $('.auto-load').hide();
                $("#shorting-data").append(response.html).show(100);
            })
            .fail(function(jqXHR, ajaxOptions, thrownError) {
                console.log('Server error occured');
            });
    }
</script>
@endpush
