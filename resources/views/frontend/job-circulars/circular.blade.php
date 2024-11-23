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
<<<<<<< HEAD
                        <div>
                            <h1> {{ $latest_circular->job_title }} </h1>
=======
                        <div class="blog-details-area">
                            <h1> বাংলাদেশ রপ্তানি প্রক্রিয়াকরণ এলাকা কর্তৃপক্ষ (বেপজা) নিয়োগ বিজ্ঞপ্তি </h1>
>>>>>>> b7395deb54fa764d104c7f3c6cee3b6e7f9a5049
                            <div class="blog-datetimeby d-flex">
                                <p><i class="fa-regular fa-calendar-days"></i>
                                    {{ date('d F Y',strtotime($latest_circular->created_at)) }}
                                </p>
                            </div>
                            <div class="pdf-container">
                                @php
                                $filePath = $latest_circular->image;
                                $extension = pathinfo($filePath, PATHINFO_EXTENSION);
                                if($extension == 'pdf'){
                                    $pdf = true;
                                }else{
                                    $pdf = false;
                                }
                                @endphp
                                @if($pdf == true)
                                <iframe id="pdf-frame"
<<<<<<< HEAD
                                    src="{{ $latest_circular->image }}"
                                    class="w-100"
                                    style="height: 100vh;"
                                    type="application/pdf">
=======
                                    src="https://file-examples.com/storage/fef4e75e176737761a179bf/2017/10/file-example_PDF_500_kB.pdf"
                                    class="w-100" style="height: 100vh;" type="application/pdf">
>>>>>>> b7395deb54fa764d104c7f3c6cee3b6e7f9a5049
                                </iframe>
                                @else
                                    <img src="{{ static_asset($latest_circular->image) }}" alt="{{ $latest_circular->job_title }}">
                                @endif
                            </div>
                            <div class="mt-3">
                                <ul class="list-unstyled">
                                    <li>পদ সংখ্যা: ৫৬</li>
                                    <li>পদ সংখ্যা: ৫৬</li>
                                    <li>পদ সংখ্যা: ৫৬</li>
                                    <li>পদ সংখ্যা: ৫৬</li>
                                </ul>
                            </div>
                        </div>
                        <div id="loading" style="display:none;">
                            <p>Loading...</p>
                        </div>
                    </div>

                    <div class="col-md-4 ps-lg-4">
                        <div class="blog-popular-posted-area">
<<<<<<< HEAD
                            @foreach($jobCirculars as $circular)
                            <div class="popular-posted-area mb-2">
                                <div class="row">
                                    <div class="col-12 col-lg-3">
                                        <div class="blog-feature-img">
                                            <a href="javascript:void(0);" class="job-item" data-id="{{ $circular->id }}">
                                                <img src="{{ static_asset(isset($circular->image) ? $circular->image : 'frontend/assets/images/blog/blog-img.jpg') }}"
                                                    alt="{{ $circular->job_title }}"
                                                    style="height:55px;">
                                            </a>
=======
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
>>>>>>> b7395deb54fa764d104c7f3c6cee3b6e7f9a5049
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
<<<<<<< HEAD
                                    <div class="col-12 col-lg-9">
                                        <a href="javascript:void(0);" class="job-item" data-id="{{ $circular->id }}">
                                            <div class="blog-feature-content">
                                                <div class="blog-feature-title text-black">
                                                    <h3>{{ $circular->job_title }}</h3>
                                                </div>
                                                <div class="blog-datetimeby d-flex">
                                                    <p><i class="fa-regular fa-calendar-days"></i>
                                                        {{ date('d F Y',strtotime($circular->created_at)) }}
                                                    </p>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            @endforeach

=======

                                </div>
                            </div>
>>>>>>> b7395deb54fa764d104c7f3c6cee3b6e7f9a5049
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
<<<<<<< HEAD
<script>
    // Adjust zoom level for mobile view
    // function adjustPdfZoom() {
    //     const iframe = document.getElementById('pdf-frame');
    //     const isMobile = window.matchMedia("(max-width: 767px)").matches;

    //     if (isMobile) {
    //         iframe.src = "https://file-examples.com/storage/fef4e75e176737761a179bf/2017/10/file-example_PDF_500_kB.pdf#zoom=35";
    //     } else {
    //         iframe.src = "https://file-examples.com/storage/fef4e75e176737761a179bf/2017/10/file-example_PDF_500_kB.pdf";
    //     }
    // }

    // Run on load and on resize
    // adjustPdfZoom();
    // window.addEventListener('resize', adjustPdfZoom);

    $(document).ready(function() {
    // Listen for clicks on job items
    $(document).on('click', '.job-item', function() {
        const jobId = $(this).data('id');

        // Fetch job details using AJAX
        $.ajax({
            url: `/job-details/${jobId}`,
            method: 'GET',
            beforeSend: function() {
                $('#loading').show();
            },
            success: function(response) {
                if (response.success) {
                    $('#loading').hide();
                    const data = response.data;

                    // Update the left-side content dynamically
                    $('.pdf-container').html(data.image.endsWith('.pdf') ?
                        `<iframe id="pdf-frame" src="static_asset${data.static_asset_url})" class="w-100" style="height: 100vh;" type="application/pdf"></iframe>` :
                        `<img src="${data.static_asset_url}" alt="${data.job_title}" class="w-100">`
                    );

                    $('h1').text(data.job_title);
                    $('.blog-datetimeby p').html(`<i class="fa-regular fa-calendar-days"></i> ${new Date(data.created_at).toLocaleDateString('en-US', { day: '2-digit', month: 'long', year: 'numeric' })}`);
                } else {
                    alert('Error: ' + response.message);
                }
            },
            error: function() {
                alert('An error occurred while fetching job details.');
            }
        });
    });
});

</script>
=======
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
>>>>>>> b7395deb54fa764d104c7f3c6cee3b6e7f9a5049
@endpush
