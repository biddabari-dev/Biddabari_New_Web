@extends('frontend.master')
@section('title') Biddabari | Notice @endsection
@push('style')
    <link rel="stylesheet" href="{{ asset('/') }}backend/ppdf/css/pdfviewer.jquery.css" />
    <style>
        .pdf-toolbar {
            display: none;
        }

        #pdf-container {
            overflow: scroll;
            height: 500px;
        }
    </style>
@endpush
@section('body')
<main>

    <section id="All_notice" class="background-res background-ats py-5"
        style="background-image: url('{{ asset('frontend') }}/assets/images/notice-page/notice-page-bg.png')">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="title-area text-center">
                        <h2 class="fw-bold">সকল <span>নোটিশ</span> সমূহ
                        </h2>
                        <p class="text-muted">
                            প্রতিযোগিতামূলক এই জব-মার্কেটে নিজের ক্যারিয়ারকে নিয়ে যান অনন্য
                            চ্চতায়।
                        </p>
                    </div>
                </div>
            </div>
            <div class="notice-category-area">
                <div class="row g-4">
                    <div class="col-md-6 col-lg-4">
                        <div class="my-notice-category">
                            <div class="my-notice-category-icon">
                                <i class="fa-solid fa-circle-exclamation"></i>
                                <!-- <img src="{{ asset('frontend') }}/assets/images/home-page/category/home.png" alt="" srcset=""> -->
                            </div>
                            <div class="my-notice-category-content">
                                <h3>Latest Notice</h3>
                                <p>প্রতিযোগিতামূলক এই জব-মার্কেটে নিজের ক্যারিয়ারকে</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="my-notice-category">
                            <div class="my-notice-category-icon">
                                <i class="fa-solid fa-circle-exclamation"></i>
                                <!-- <img src="{{ asset('frontend') }}/assets/images/home-page/category/home.png" alt="" srcset=""> -->
                            </div>
                            <div class="my-notice-category-content">
                                <h3>Last 7 Days Notices</h3>
                                <p>প্রতিযোগিতামূলক এই জব-মার্কেটে নিজের ক্যারিয়ারকে</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="my-notice-category">
                            <div class="my-notice-category-icon">
                                <i class="fa-solid fa-circle-exclamation"></i>
                                <!-- <img src="{{ asset('frontend') }}/assets/images/home-page/category/home.png" alt="" srcset=""> -->
                            </div>
                            <div class="my-notice-category-content">
                                <h3>Last Month Notices</h3>
                                <p>প্রতিযোগিতামূলক এই জব-মার্কেটে নিজের ক্যারিয়ারকে</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="notice-content-area">
                <div class="row g-4">
                    @foreach($notices as $notice)
                    <div class="col-md-6 col-lg-4">
                        <div class="notice-content text-center">
                            <div class="notice-title">
                                <h3>{!! $notice->title !!}</h3>
                            </div>
                            <div class="notice-image">
                                @if (isset($notice->image))
                                    <img src="{{ asset($notice->image) }}" alt="{{ $notice->title }}" srcset="">
                                @endif
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

