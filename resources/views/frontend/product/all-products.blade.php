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
                {{-- @foreach($product_sliders as $slider)
                <a href="{{ $slider->link }}">
                    <img src="{{ $slider->image ? static_asset($slider->image) : asset('frontend/assets/images/book-page/book-banner.png') }}"
                            alt="Image 1"
                            style="border-radius: 20px;">
                </a>
                @endforeach --}}
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
                <div class="row all-exam-area g-2 g-md-3 g-lg-4">
                    @foreach($products as $product)
                        @php
                            $discountAmount = $product->discount_type == 1  ? $product->discount_amount : ($product->price * $product->discount_amount) / 100;
                            $discountPrice = $product->price - (isset($discountAmount) ? $discountAmount : 0);
                        @endphp
                    <div class="col-6 col-lg-3">
                        <div class="book-area">
                            <div class="book-image">
                                <a href="{{ route('front.product-details',['id'=>$product->id, 'slug'=>$product->slug]) }}"> <img src="{{ static_asset(isset($product->image) ? $product->image : 'frontend/assets/images/book-page/book.png') }}" alt="{{ $product->title }}" srcset="" /> </a>
                            </div>
                            <div class="book-content ms-3">
                                <div class="book-title pt-3">
                                    @if($product->stock_amount > 0)
                                        @php $stock = true; @endphp
                                    <h6>In Stock</h6>
                                    @else
                                        @php $stock = false; @endphp
                                    <h6 class="text-warning"> Out of Stock</h6>
                                    @endif

                                    <h2 class="fw-bold"><a class="text-black" href="{{ route('front.product-details',['id'=>$product->id, 'slug'=>$product->slug]) }}">{{ $product->title }} </a></h2>
                                </div>
                                <div class="row button-and-price pb-3 pb-lg-4">
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
                                                <s class="text-muted"> ৳ {{$product->price ?? 0 }}</s>
                                            </div>
                                            <div class="book-discount-price">৳ {{ $discountAmount ? $discountAmount : $product->price }}</div>
                                        </div>
                                    </div>
                                    <div class="col text-end">
                                        <div class="book-button">
                                            <button class="book-details"> <a href="{{ route('front.product-details',['id'=>$product->id, 'slug'=>$product->slug]) }}">View
                                                    Details</a> </button><br>
                                            <button class="custom-btn btn-12">
                                                <a href="{{ route('front.view-cart',[$product->id]) }}" >
                                                    <span>ক্লিক করুন!</span><span>বইটি কিনুন</span>
                                                </a>
                                            </button>
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


