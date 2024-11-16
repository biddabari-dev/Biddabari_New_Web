@extends('frontend.master')

@section('title') {{ $seo->meta_keywords ?? ''}}@endsection
@section('meta-description') {{ $seo->meta_description ?? Str::limit(strip_tags($product->description), 155) }} @endsection
@section('og-image'){{ $product->image }} @endsection

@section('body')
<main>

    <section id="Book_details">
        <div class="container py-5">
            <div class="book-details-area">
                <div class="row g-4">
                    <div class="col-md-6 col-lg-4">
                        <div class="book-image-area">
                            <div class="book-image d-flex">
                                <img src="{{ static_asset(isset($product->image) ? $product->image : 'frontend/logo/biddabari-card-logo.jpg') }}" alt="package-image"
                                    srcset="" />
                                <div class="see-more-btn">
                                    <a href="javascript:void(0)" data-id="{{ $product->id }}" target="_blank" type="button" class="btn btn_warning show-pdf">একটু পরে দেখুন</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="book-details-description-area">
                            <div class="book-available">
                            <h6>{{ $product->stock_amount > 0 ? 'In Stock' : 'Out Of Stock' }}</h6>
                            </div>
                            <div class="book-title">
                                <h2 class="fw-bold">{{ $product->title }}</h2>
                            </div>
                            <div class="customer-book-rating mb-3">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="far fa-star"></i>
                                <span>(5 Customer Review)</span>
                            </div>
                            <div class="book-by">
                                <p>লেখক : <span>{{ $product->productAuthor->name }}</span></p>
                                <p>প্রকাশনী : <span>Biddabari</span></p>
                                <p>বিষয় : <span>{{ $product->title }}</span></p>
                                <p>কভার : <span>Good Printing Press</span></p>
                            </div>
                            @php
                                if ($product->has_discount_validity == 'true') {
                                    $discountPrice = $product->price - $product->discount_amount;
                                    $parcent = ($product->discount_amount / $product->price) * 100;
                                } else {
                                    $regular_price = $product->price;
                                }
                            @endphp

                            <div class="book-price">
                                <div class="book-total-price">
                                    @if ($product->has_discount_validity == 'true')
                                        <h2>৳ {{ number_format($discountPrice) }}
                                            <s class="text-muted">৳ {{ number_format($product->price) }}</s>
                                            <span>({{ round($parcent) }}% Discount)</span>
                                        </h2>
                                    @else
                                        <h2>৳ {{ number_format($regular_price) }}</h2>
                                    @endif
                                </div>
                            </div>

                            <div class="book-by">
                                <p>সম্পাদনা : Biddabari</p>
                                <p>পৃষ্ঠা : 870 (Opset white pages)</p>
                            </div>
                            <div class="book-description">
                                <h4>Description</h4>
                                <p id="short-description" class="text-justify">
                                    {!! Str::limit(strip_tags($product->description), 155) !!}
                                    <span id="read-more" style="color: red; cursor: pointer;">Read More</span>
                                </p>
                                <p id="full-description" style="display: none; text-align:justify">
                                    {{ strip_tags($product->description) }}
                                    <br>
                                    <span id="read-less" style="color: red; cursor: pointer;">Read Less</span>
                                </p>
                            </div>
                            <div class="purchase-button">
                                <a href="{{ route('front.view-cart',[$product->id]) }}" type="button" class="btn btn_warning">এখনই কিনুন</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 col-lg-4">
                        <div class="row">
                            @foreach($latestProducts as $latestProduct)
                            <div class="col-md-6 col-lg-12">
                                <a class="text-black" href="{{ route('front.product-details', ['slug' => $latestProduct->slug]) }}">
                                    <div class="related-book-details mb-3">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="related-book-img">
                                                    <img src="{{ static_asset(isset($latestProduct->image) ? $latestProduct->image : 'frontend/assets/images/book-page/book.png') }}" alt="" srcset="">
                                                </div>
                                            </div>
                                            <div class="col-md-8">
                                                <div class="related-book-content">
                                                    <div class="related-book-title d-flex justify-content-between">
                                                        <h6>{{ $latestProduct->title }}</h6>
                                                        <p>{!! $product->stock_amount > 0 ? 'In Stock' : '<span class="text-warning"> Stock Out</span>' !!}</p>
                                                    </div>
                                                    <div class="related-book-owner">
                                                        <p>by <span>{{ $latestProduct->productAuthor->name }}</span></p>
                                                    </div>
                                                    <div class="customer-book-rating">
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="far fa-star"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>

                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="All_book">
        <div class="container pb-5">
            <div class="all-book-area">
                <div class="row all-exam-area">
                    <div class="all-book-title">
                        <h3>Latest <span>Books</span></h3>
                    </div>
                    <div class="row g-2 g-md-3 g-lg-4">
                        @foreach($latestProducts as $product)
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
        </div>
    </section>
</main>

<section id="App_store" class="background-res background-ats py-5"
style="background-image: url('{{ asset('frontend')}}/assets/images/exam-page/footer-background.png')">
<div class="container">
    <div class="row">
        <div class="col-md-6">
            <div class="style-2phone-image">
                <img src="{{ asset('frontend')}}/assets/images/exam-page/2-mobile.png" class="img-fluid" alt="" srcset="">
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
                        <img class="img-fluid" src="{{ asset('frontend')}}/assets/images/exam-page/app-store.png"
                            alt="App Store" srcset=""></a>
                </div>
                <div class="play-store">
                    <a href="#">
                        <img class="img-fluid" src="{{ asset('frontend')}}/assets/images/exam-page/google-play.png"
                            alt="Google Play Store" srcset=""></a>
                </div>
            </div>

        </div>
    </div>
</div>
</section>
{{-- Pdf Modal --}}
<div style="margin-top:80px" class="modal fade show-pdf-modal" id="pdfModal" data-bs-backdrop="static"
data-modal-parent="courseContentModal">
<div class="modal-dialog modal-dialog-centered modal-xl">
    <div class="modal-content">
        <button type="button" class="btn-close position-absolute top-0 end-0" data-bs-dismiss="modal"
            onclick="close_video()" aria-label="Close"></button>
        <div class="modal-body p-0">
            <div class="card card-body p-0" id="pdfContentPrintDiv">
                <div class="my-box pe-3 mx-auto">
                    <div id="pdf-container">
                        <div id="zoom-controls" class="text-center">
                            <button id="zoom-out" class="btn btn-sm btn-info"><i
                                    class="fa fa-minus"></i></button>
                            <button id="zoom-in" class="btn btn-sm btn-primary"><i
                                    class="fa fa-plus"></i></button>
                            <button id="zoom-reset" class="btn btn-sm btn-secondary">Reset Zoom</button>
                            <span id="zoom-percent">100</span>
                        </div>
                        <div id="pages"></div>
                    </div>
                    {{-- <div id="pspdfkit" style="width: 100%; height: 100vh"></div> --}}

                </div>
            </div>
        </div>
    </div>
</div>
</div>
@endsection
@push('style')
<style>
        .modal-body {
            position: relative;
            padding: 0;

        }
        .modal-content {
            background-color: transparent;
            /* Optional: Makes the modal content background transparent */
            border: none;
            /* Remove border */
        }
    .btn-close {
            position: absolute;
            top: -20px !important;
            right: 0px;
            border-radius: 50%;
            width: 32px;
            height: 32px;
            z-index: 1100; /* Higher than video player controls */
            background-color: #ffffff;
            opacity: 0.7; /* Slightly opaque */
            display: block !important; /* Ensure it stays visible */
        }

    /* Increase z-index for close button in the modal */
    .modal .btn-close {
        z-index: 1100;
    }
    #pages {
        text-align: center;
    }

    .page {
        width: 100% !important;
        margin: 10px;
        box-shadow: 0px 0px 3px #000;
        animation: pageIn 1s ease;
        transition: all 1s ease, width 0.2s ease;
    }

    @keyframes pageIn {
        0% {
            transform: translateX(0px);
            opacity: 0;
        }

        100% {
            transform: translateX(0px);
            opacity: 1;
        }
    }

    #zoom-in {}

    #zoom-percent {
        display: inline-block;
    }

    #zoom-percent::after {
        content: "%";
    }

    #zoom-out {}
</style>
@endpush

@push('script')

<script>
$(document).ready(function() {
    $('#full-description').hide();  // Hide the full description when the page loads

    $('#read-more').click(function() {
        $('#short-description').hide();
        $('#full-description').fadeIn(1000);
    });

    $('#read-less').click(function() {
        $('#full-description').fadeOut(function() {
            $('#short-description').fadeIn();
        });
    });
});

</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdf.js/2.2.2/pdf.min.js"></script>
<script>
    pdfjsLib.GlobalWorkerOptions.workerSrc = 'https://cdnjs.cloudflare.com/ajax/libs/pdf.js/2.2.2/pdf.worker.js';
    // Function to load and render the PDF
    function loadPDF(pdflink) {
        document.querySelector("#pages").innerHTML = "";
        zoomReset();
        fetch(pdflink)
            .then(response => response.arrayBuffer())
            .then(function(data) {
                var typedarray = new Uint8Array(data);

                pdfjsLib.getDocument(typedarray).promise.then(function(pdf) {
                    console.log("The PDF has", pdf.numPages, "page(s).");

                    for (var i = 0; i < pdf.numPages; i++) {
                        (function(pageNum) {
                            pdf.getPage(pageNum).then(function(page) {
                                var viewport = page.getViewport({
                                    scale: 2.0
                                });
                                var pageNumDiv = document.createElement("div");
                                pageNumDiv.className = "pageNumber";
                                pageNumDiv.innerHTML = "Page " + pageNum;

                                var canvas = document.createElement("canvas");
                                canvas.className = "page";
                                canvas.title = "Page " + pageNum;

                                document.querySelector("#pages").appendChild(pageNumDiv);
                                document.querySelector("#pages").appendChild(canvas);

                                canvas.height = viewport.height;
                                canvas.width = viewport.width;

                                var context = canvas.getContext('2d');
                                var renderContext = {
                                    canvasContext: context,
                                    viewport: viewport
                                };

                                page.render(renderContext).promise.then(function() {
                                    console.log('Page rendered');
                                });

                            });
                        })(i + 1);
                    }
                });
            })
            .catch(function(error) {
                console.error('Error loading PDF:', error);
            });
    }

    // Zoom functions
    var curWidth = 60;

    function zoomIn() {
        if (curWidth < 150) {
            curWidth += 10;
            document.querySelector("#zoom-percent").innerHTML = curWidth;
            const pages = document.querySelectorAll(".page");

            pages.forEach(function(page) {
                const style = document.createElement('style');
                style.innerHTML = `.page { width: ${curWidth}% !important; }`;
                document.head.appendChild(style);
            });
        }
    }

    function zoomOut() {
        if (curWidth > 20) {
            curWidth -= 10;
            document.querySelector("#zoom-percent").innerHTML = curWidth;
            const pages = document.querySelectorAll(".page");

            pages.forEach(function(page) {
                const style = document.createElement('style');
                style.innerHTML = `.page { width: ${curWidth}% !important; }`;
                document.head.appendChild(style);
            });
        }
    }


    function zoomReset() {
        curWidth = 100;
        document.querySelector("#zoom-percent").innerHTML = curWidth;
        const pages = document.querySelectorAll(".page");
        pages.forEach(function(page) {
            const style = document.createElement('style');
            style.innerHTML = `.page { width: ${curWidth}% !important; }`;
            document.head.appendChild(style);
        });
    }

    // Bind event listeners when DOM is fully loaded
    document.addEventListener("DOMContentLoaded", function() {
        document.querySelector("#zoom-in").addEventListener("click", zoomIn);
        document.querySelector("#zoom-out").addEventListener("click", zoomOut);
        document.querySelector("#zoom-reset").addEventListener("click", zoomReset);
    });

    // Handle zoom via keyboard input
    window.onkeypress = function(e) {
        if (e.code === "Equal") zoomIn();
        if (e.code === "Minus") zoomOut();
    };

    // Load PDF dynamically when a link is clicked
    $(document).on('click', '.show-pdf', function(event) {
        event.preventDefault();
        var productId = $(this).data('id');
        $.ajax({
            url: "/show-product-pdf/" + productId, // Fetch PDF info dynamically
            method: "GET",
            success: function(data) {
                pdflink = data.featured_pdf;
                if (pdflink) {
                    pdflink ='https://biddabari.s3.ap-southeast-1.amazonaws.com/' +pdflink;
                } else {
                    pdflink = 'default-document.pdf'; // Fallback if no PDF is provided
                }
                // Load the PDF dynamically using the link from the server
                loadPDF(pdflink);
                $('.show-pdf-modal').modal('show');
            },
            error: function(xhr, status, error) {
                console.error('Error fetching PDF data:', error);
            }
        });
    });
</script>

@endpush
