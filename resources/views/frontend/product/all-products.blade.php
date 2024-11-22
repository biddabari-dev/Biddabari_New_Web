@extends('frontend.master')
@section('title')
Biddabari - All Books
@endsection
@section('body')
<main>
    <section id="Book_page_banner" class="background-res-book-banner background-ats py-2 py-md-5"
        style="background-image: url('{{ asset('frontend') }}/assets/images/home-page/Background-banner.webp')">
        <div class="container">
            <div class="book-banner">
                {{--<div class="book-banner-image">
                    <a href=""><img src="{{ asset('frontend') }}/assets/images/book-page/book-banner.png" alt="Image 1"></a>
                </div>--}}
                 @foreach($product_sliders as $slider)
                <a href="{{ $slider->link }}">
                    <img src="{{ $slider->image ? static_asset($slider->image) : asset('frontend/assets/images/book-page/book-banner.png') }}"
                            alt="Image 1"
                            style="border-radius: 20px;">
                </a>
                @endforeach
            </div>
        </div>
    </section>

    <section id="All_book" class="background-res-free-service background-ats py-5"
        style="background-image: url('{{ asset('frontend') }}/assets/images/blog/blog-bg-1.png')">
        <div class="container">
            <div class="title-area text-center">
                <h2 class="fw-bold">আমাদের <span class="">বই! </span></h2>
                <br>
            </div>
            <div class="all-courses-area">
                <div class="row g-2 g-md-3 g-lg-4">
                    @foreach($products as $product)
                        @php
                            $discountAmount = $product->discount_type == 1  ? $product->discount_amount : ($product->price * $product->discount_amount) / 100;
                            $discountPrice = $product->price - (isset($discountAmount) ? $discountAmount : 0);
                        @endphp
                    <div class="col-6 col-lg-3">
                        <div class="exam-package-area">
                            <div class="package-exam-image">
                                <a href="{{ route('front.product-details',['id'=>$product->id, 'slug'=>$product->slug]) }}"> <img src="{{ static_asset(isset($product->image) ? $product->image : 'frontend/assets/images/book-page/book.png') }}" alt="{{ $product->title }}" srcset="" /> </a>
                            </div>
                            <div class="package-exam-content mx-2 mx-lg-3">
                                <div class="package-exam-title pt-3">
                                    @if($product->stock_amount > 0)
                                        @php $stock = true; @endphp
                                    <span class="badge bg-success mb-2">In Stock</span>
                                    @else
                                        @php $stock = false; @endphp
                                    <span class="badge bg-warning"> Out of Stock</span>
                                    @endif

                                    <h2 class="fw-bold"><a class="text-black" href="{{ route('front.product-details',['id'=>$product->id, 'slug'=>$product->slug]) }}">{{ $product->title }} </a></h2>
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
                                            <div class="package-exam-total-price text-muted">
                                                <s class="text-muted"> ৳ {{ number_format($product->price) ?? 0 }}</s>
                                            </div>
                                            <div class="package-exam-discount-price">৳ {{ $discountAmount ? number_format($discountAmount) : number_format($product->price) }}</div>
                                        </div>
                                    </div>
                                    <div class="col text-end">
                                        <div class="package-exam-button">
                                            <div class="package-exam-details">
                                                <a href="{{ route('front.product-details',['id'=>$product->id, 'slug'=>$product->slug]) }}">View Details </a>
                                            </div>
                                            <a href="{{ route('front.view-cart',[$product->id]) }}" >
                                                <div class="custom-btn btn-12">
                                                    <span>ক্লিক করুন!</span><span> বইটি কিনুন</span>
                                                </div>
                                            </a>
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


