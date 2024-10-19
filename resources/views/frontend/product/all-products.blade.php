@extends('frontend.master')

@section('body')
<main>
    <section id="Book_page_banner" class="background-res-book-banner background-ats py-5"
        style="background-image: url('{{ asset('frontend') }}/assets/images/free-service/free-service-banner-bg.png')">
        <div class="container">
            <div class="book-banner">
                <div class="book-banner-image">
                    <a href=""><img src="{{ asset('frontend') }}/assets/images/book-page/book-banner.png" alt="Image 1"></a>
                </div>
                <div class="book-banner-image">
                    <a href=""><img src="{{ asset('frontend') }}/assets/images/book-page/book-banner.png" alt="Image 1"></a>
                </div>
            </div>
        </div>
    </section>

    <section id="All_book" class="background-res-free-service background-ats py-5"
        style="background-image: url('{{ asset('frontend') }}/assets/images/blog/blog-bg-1.png')">
        <div class="container">
            <div class="title-area text-center">
                <h2 class="fw-bold">আমাদের <span class="">বই সমূহ </span></h2>
                <p class="text-muted">
                    প্রতিযোগিতামূলক এই জব-মার্কেটে নিজের ক্যারিয়ারকে নিয়ে যান অনন্য
                    চ্চতায়। আপনার জন্য <br />প্রয়োজনীয় সব ক্যাটাগরিই রয়েছে এখানে।
                    বেছে নিন আপনার সবচেয়ে পছন্দের কোর্সটি।
                </p>
            </div>
            <div class="all-book-area">
                <div class="row all-exam-area">
                    @foreach($products as $product)
                    <div class="col-md-6 col-lg-3 mb-4">
                        <div class="book-area">
                            <div class="book-image">
                                <img src="{{ asset(isset($product->image) ? $product->image : 'frontend/assets/images/book-page/book.png') }}" alt="{{ $product->title }}" srcset="" />
                            </div>
                            <div class="book-content ms-3">
                                <div class="book-title pt-3">
                                    <h6>In Stock</h6>
                                    <h2 class="fw-bold">{{ $product->title }} </h2>
                                </div>
                                <div class="row button-and-price pb-2">
                                    <div class="col">
                                        <div class="book-rating">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="far fa-star"></i>
                                        </div>
                                        <div class="book-price">
                                            <div class="book-total-price text-muted">
                                                <s class="text-muted"> ট 580</s>
                                            </div>
                                            <div class="book-discount-price">ট 520</div>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="book-button">
                                            <button class="book-details"> <a href="book-details.html">View
                                                    Details</a> </button><br>
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


