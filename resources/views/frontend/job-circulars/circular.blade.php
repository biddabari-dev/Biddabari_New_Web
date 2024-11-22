@extends('frontend.master')

@section('body')
    <main>

        <section id="Blog_feature" class="background-res background-ats py-5"
            style="background-image: url('{{ asset('frontend') }}/assets/images/blog/blog-bg.png')">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="title-area text-center">
                            <h2 class="fw-bold">ক্যারিয়ার সংক্রান্ত <span class="">ব্লগিং!</span> </h2>

                        </div>
                    </div>
                </div>
                <div class="row py-2 py-md-5">

                    <div class="col-md-8 mb-3 pe-lg-8">
                        <div class="blog-details-area">
                            <h1> বাংলাদেশ রপ্তানি প্রক্রিয়াকরণ এলাকা কর্তৃপক্ষ (বেপজা) নিয়োগ বিজ্ঞপ্তি </h1>
                            <div class="blog-datetimeby d-flex">
                                <p><i class="fa-regular fa-calendar-days"></i>
                                    {{ date('d F Y') }}
                                </p>
                            </div>
                            <div class="pdf-container">
                                <iframe id="pdf-frame"
                                    src="https://file-examples.com/storage/fef4e75e176737761a179bf/2017/10/file-example_PDF_500_kB.pdf"
                                    class="w-100" style="height: 100vh;" type="application/pdf">
                                </iframe>
                            </div>
                            <div class="mt-3">
                                <ul class="list-unstyled">
                                    <li>পদ সংখ্যা: ৫৬</li>
                                    <li>পদ সংখ্যা: ৫৬</li>
                                    <li>পদ সংখ্যা: ৫৬</li>
                                    <li>পদ সংখ্যা: ৫৬</li>
                                    <li>পদ সংখ্যা: ৫৬</li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 ps-lg-4">
                        <div class="blog-popular-posted-area">
                            <div class="popular-posted-area p-0 mb-4">
                                <div class="card blog-popular-posted-card border-0">
                                    <div class="card-header">
                                        <h4 class="card-title pb-0 mb-0">সর্বশেষ পোস্ট</h4>
                                    </div>
                                    <div class="card-body p-3">
                                        <div>
                                            <div class="row">
                                                <div class="col-12 col-lg-3">
                                                    <div class="blog-feature-img">
                                                        <a href="{{ route('front.blog-details', ['slug' => 'slug']) }}"><img
                                                                src="https://biddabari.s3.ap-southeast-1.amazonaws.com/backend/assets/uploaded-files/blog-management/blogs/বিসিএস-প্রিপারেশনের-জন্য-কোন-কোচিং-ভালো-হবে-1727505375956271580614986.webp"
                                                                alt="{{ 'title' }}" srcset=""></a>
                                                    </div>
                                                </div>
                                                <div class="col-12 col-lg-9">
                                                    <a href="{{ route('front.blog-details', ['slug' => 'slug']) }}"
                                                        class="text-black">
                                                        <div class="blog-feature-content">

                                                            <div class="blog-feature-title">
                                                                <h3>{{ 'title' }}</h3>
                                                            </div>
                                                            <div class="someText">
                                                                <p>{{ 'sub_title' }}</p>
                                                            </div>

                                                        </div>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div>
                                            <div class="row">
                                                <div class="col-12 col-lg-3">
                                                    <div class="blog-feature-img">
                                                        <a href="{{ route('front.blog-details', ['slug' => 'slug']) }}"><img
                                                                src="https://biddabari.s3.ap-southeast-1.amazonaws.com/backend/assets/uploaded-files/blog-management/blogs/বিসিএস-প্রিপারেশনের-জন্য-কোন-কোচিং-ভালো-হবে-1727505375956271580614986.webp"
                                                                alt="{{ 'title' }}" srcset=""></a>
                                                    </div>
                                                </div>
                                                <div class="col-12 col-lg-9">
                                                    <a href="{{ route('front.blog-details', ['slug' => 'slug']) }}"
                                                        class="text-black">
                                                        <div class="blog-feature-content">

                                                            <div class="blog-feature-title">
                                                                <h3>{{ 'title' }}</h3>
                                                            </div>
                                                            <div class="someText">
                                                                <p>{{ 'sub_title' }}</p>
                                                            </div>

                                                        </div>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div>
                                            <div class="row">
                                                <div class="col-12 col-lg-3">
                                                    <div class="blog-feature-img">
                                                        <a href="{{ route('front.blog-details', ['slug' => 'slug']) }}"><img
                                                                src="https://biddabari.s3.ap-southeast-1.amazonaws.com/backend/assets/uploaded-files/blog-management/blogs/বিসিএস-প্রিপারেশনের-জন্য-কোন-কোচিং-ভালো-হবে-1727505375956271580614986.webp"
                                                                alt="{{ 'title' }}" srcset=""></a>
                                                    </div>
                                                </div>
                                                <div class="col-12 col-lg-9">
                                                    <a href="{{ route('front.blog-details', ['slug' => 'slug']) }}"
                                                        class="text-black">
                                                        <div class="blog-feature-content">

                                                            <div class="blog-feature-title">
                                                                <h3>{{ 'title' }}</h3>
                                                            </div>
                                                            <div class="someText">
                                                                <p>{{ 'sub_title' }}</p>
                                                            </div>

                                                        </div>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div>
                                            <div class="row">
                                                <div class="col-12 col-lg-3">
                                                    <div class="blog-feature-img">
                                                        <a href="{{ route('front.blog-details', ['slug' => 'slug']) }}"><img
                                                                src="https://biddabari.s3.ap-southeast-1.amazonaws.com/backend/assets/uploaded-files/blog-management/blogs/বিসিএস-প্রিপারেশনের-জন্য-কোন-কোচিং-ভালো-হবে-1727505375956271580614986.webp"
                                                                alt="{{ 'title' }}" srcset=""></a>
                                                    </div>
                                                </div>
                                                <div class="col-12 col-lg-9">
                                                    <a href="{{ route('front.blog-details', ['slug' => 'slug']) }}"
                                                        class="text-black">
                                                        <div class="blog-feature-content">

                                                            <div class="blog-feature-title">
                                                                <h3>{{ 'title' }}</h3>
                                                            </div>
                                                            <div class="someText">
                                                                <p>{{ 'sub_title' }}</p>
                                                            </div>

                                                        </div>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div>
                                            <div class="row">
                                                <div class="col-12 col-lg-3">
                                                    <div class="blog-feature-img">
                                                        <a href="{{ route('front.blog-details', ['slug' => 'slug']) }}"><img
                                                                src="https://biddabari.s3.ap-southeast-1.amazonaws.com/backend/assets/uploaded-files/blog-management/blogs/বিসিএস-প্রিপারেশনের-জন্য-কোন-কোচিং-ভালো-হবে-1727505375956271580614986.webp"
                                                                alt="{{ 'title' }}" srcset=""></a>
                                                    </div>
                                                </div>
                                                <div class="col-12 col-lg-9">
                                                    <a href="{{ route('front.blog-details', ['slug' => 'slug']) }}"
                                                        class="text-black">
                                                        <div class="blog-feature-content">

                                                            <div class="blog-feature-title">
                                                                <h3>{{ 'title' }}</h3>
                                                            </div>
                                                            <div class="someText">
                                                                <p>{{ 'sub_title' }}</p>
                                                            </div>

                                                        </div>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div>
                                            <div class="row">
                                                <div class="col-12 col-lg-3">
                                                    <div class="blog-feature-img">
                                                        <a href="{{ route('front.blog-details', ['slug' => 'slug']) }}"><img
                                                                src="https://biddabari.s3.ap-southeast-1.amazonaws.com/backend/assets/uploaded-files/blog-management/blogs/বিসিএস-প্রিপারেশনের-জন্য-কোন-কোচিং-ভালো-হবে-1727505375956271580614986.webp"
                                                                alt="{{ 'title' }}" srcset=""></a>
                                                    </div>
                                                </div>
                                                <div class="col-12 col-lg-9">
                                                    <a href="{{ route('front.blog-details', ['slug' => 'slug']) }}"
                                                        class="text-black">
                                                        <div class="blog-feature-content">

                                                            <div class="blog-feature-title">
                                                                <h3>{{ 'title' }}</h3>
                                                            </div>
                                                            <div class="someText">
                                                                <p>{{ 'sub_title' }}</p>
                                                            </div>

                                                        </div>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div>
                                            <div class="row">
                                                <div class="col-12 col-lg-3">
                                                    <div class="blog-feature-img">
                                                        <a href="{{ route('front.blog-details', ['slug' => 'slug']) }}"><img
                                                                src="https://biddabari.s3.ap-southeast-1.amazonaws.com/backend/assets/uploaded-files/blog-management/blogs/বিসিএস-প্রিপারেশনের-জন্য-কোন-কোচিং-ভালো-হবে-1727505375956271580614986.webp"
                                                                alt="{{ 'title' }}" srcset=""></a>
                                                    </div>
                                                </div>
                                                <div class="col-12 col-lg-9">
                                                    <a href="{{ route('front.blog-details', ['slug' => 'slug']) }}"
                                                        class="text-black">
                                                        <div class="blog-feature-content">

                                                            <div class="blog-feature-title">
                                                                <h3>{{ 'title' }}</h3>
                                                            </div>
                                                            <div class="someText">
                                                                <p>{{ 'sub_title' }}</p>
                                                            </div>

                                                        </div>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div>
                                            <div class="row">
                                                <div class="col-12 col-lg-3">
                                                    <div class="blog-feature-img">
                                                        <a href="{{ route('front.blog-details', ['slug' => 'slug']) }}"><img
                                                                src="https://biddabari.s3.ap-southeast-1.amazonaws.com/backend/assets/uploaded-files/blog-management/blogs/বিসিএস-প্রিপারেশনের-জন্য-কোন-কোচিং-ভালো-হবে-1727505375956271580614986.webp"
                                                                alt="{{ 'title' }}" srcset=""></a>
                                                    </div>
                                                </div>
                                                <div class="col-12 col-lg-9">
                                                    <a href="{{ route('front.blog-details', ['slug' => 'slug']) }}"
                                                        class="text-black">
                                                        <div class="blog-feature-content">

                                                            <div class="blog-feature-title">
                                                                <h3>{{ 'title' }}</h3>
                                                            </div>
                                                            <div class="someText">
                                                                <p>{{ 'sub_title' }}</p>
                                                            </div>

                                                        </div>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div>
                                            <div class="row">
                                                <div class="col-12 col-lg-3">
                                                    <div class="blog-feature-img">
                                                        <a href="{{ route('front.blog-details', ['slug' => 'slug']) }}"><img
                                                                src="https://biddabari.s3.ap-southeast-1.amazonaws.com/backend/assets/uploaded-files/blog-management/blogs/বিসিএস-প্রিপারেশনের-জন্য-কোন-কোচিং-ভালো-হবে-1727505375956271580614986.webp"
                                                                alt="{{ 'title' }}" srcset=""></a>
                                                    </div>
                                                </div>
                                                <div class="col-12 col-lg-9">
                                                    <a href="{{ route('front.blog-details', ['slug' => 'slug']) }}"
                                                        class="text-black">
                                                        <div class="blog-feature-content">

                                                            <div class="blog-feature-title">
                                                                <h3>{{ 'title' }}</h3>
                                                            </div>
                                                            <div class="someText">
                                                                <p>{{ 'sub_title' }}</p>
                                                            </div>

                                                        </div>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div>
                                            <div class="row">
                                                <div class="col-12 col-lg-3">
                                                    <div class="blog-feature-img">
                                                        <a href="{{ route('front.blog-details', ['slug' => 'slug']) }}"><img
                                                                src="https://biddabari.s3.ap-southeast-1.amazonaws.com/backend/assets/uploaded-files/blog-management/blogs/বিসিএস-প্রিপারেশনের-জন্য-কোন-কোচিং-ভালো-হবে-1727505375956271580614986.webp"
                                                                alt="{{ 'title' }}" srcset=""></a>
                                                    </div>
                                                </div>
                                                <div class="col-12 col-lg-9">
                                                    <a href="{{ route('front.blog-details', ['slug' => 'slug']) }}"
                                                        class="text-black">
                                                        <div class="blog-feature-content">

                                                            <div class="blog-feature-title">
                                                                <h3>{{ 'title' }}</h3>
                                                            </div>
                                                            <div class="someText">
                                                                <p>{{ 'sub_title' }}</p>
                                                            </div>

                                                        </div>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div>
                                            <div class="row">
                                                <div class="col-12 col-lg-3">
                                                    <div class="blog-feature-img">
                                                        <a href="{{ route('front.blog-details', ['slug' => 'slug']) }}"><img
                                                                src="https://biddabari.s3.ap-southeast-1.amazonaws.com/backend/assets/uploaded-files/blog-management/blogs/বিসিএস-প্রিপারেশনের-জন্য-কোন-কোচিং-ভালো-হবে-1727505375956271580614986.webp"
                                                                alt="{{ 'title' }}" srcset=""></a>
                                                    </div>
                                                </div>
                                                <div class="col-12 col-lg-9">
                                                    <a href="{{ route('front.blog-details', ['slug' => 'slug']) }}"
                                                        class="text-black">
                                                        <div class="blog-feature-content">

                                                            <div class="blog-feature-title">
                                                                <h3>{{ 'title' }}</h3>
                                                            </div>
                                                            <div class="someText">
                                                                <p>{{ 'sub_title' }}</p>
                                                            </div>

                                                        </div>
                                                    </a>
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


    </main>
@endsection
@push('style')
    <style>
        .pdf-container {
            height: 100vh;
            /* Full viewport height */
            display: flex;
            justify-content: center;
            align-items: center;
        }

        iframe {
            width: 100%;
            height: 100%;
            border: none;
        }

        /* @media (max-width: 767px) {
              iframe {
                transform: scale(0.33); /* Zoom to 33% */
        transform-origin: 0 0;
        /* Keep the content anchored to the top-left corner */
        width: 100%;
        /* Increase width to maintain proportionality after scaling */
        height: 100%;
        /* Increase height to maintain proportionality after scaling */
        }
        }

        */
    </style>
@endpush
@push('script')
    <script>
        // Adjust zoom level for mobile view
        function adjustPdfZoom() {
            const iframe = document.getElementById('pdf-frame');
            const isMobile = window.matchMedia("(max-width: 767px)").matches;

            if (isMobile) {
                iframe.src =
                    "https://file-examples.com/storage/fef4e75e176737761a179bf/2017/10/file-example_PDF_500_kB.pdf#zoom=35";
            } else {
                iframe.src =
                    "https://file-examples.com/storage/fef4e75e176737761a179bf/2017/10/file-example_PDF_500_kB.pdf";
            }
        }

        // Run on load and on resize
        adjustPdfZoom();
        window.addEventListener('resize', adjustPdfZoom);
    </script>
@endpush
