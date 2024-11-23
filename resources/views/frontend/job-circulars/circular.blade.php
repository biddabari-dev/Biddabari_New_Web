@extends('frontend.master')

@section('body')
    <main>

        <section id="Blog_feature" class="background-res background-ats py-5"
            style="background-image: url('{{ asset('frontend') }}/assets/images/blog/blog-bg.png')">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="title-area text-center">
                            <h2 class="fw-bold"> চাকরির <span class="">বিজ্ঞাপন!</span> </h2>

                        </div>
                    </div>
                </div>
                <div class="row py-2 py-md-5">

                    <div class="col-md-8 mb-3 pe-lg-8">
                        <div id="add-details">
                            <div class="blog-details-area">
                                <h1 id="title"> {{ $latest_circular->job_title }} </h1>
                                <div class="blog-datetimeby d-flex">
                                    <p class="mb-0"><span class="text-brand"> Deadline : </span> <i class="fa-regular fa-calendar-days text-brand"></i>
                                        {{ date('d M Y', strtotime($latest_circular->expire_date)) }}
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
                                        src="{{ $latest_circular->image }}"
                                        class="w-100"
                                        style="height: 100vh;"
                                        type="application/pdf">
                                    </iframe>
                                    @else
                                        <img src="{{ static_asset($latest_circular->image) }}" class="w-100" style="height: 100vh;" alt="{{ $latest_circular->job_title }}">
                                    @endif
                                </div>
                                <div class="mt-3">
                                    {!! $latest_circular->description !!}
                                </div>
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
                                        @foreach($jobCirculars as $circular)
                                        @php
                                        $filePath = $circular->image;
                                        $extension = pathinfo($filePath, PATHINFO_EXTENSION);
                                        @endphp
                                            <div class="card" style="box-shadow: rgba(50, 50, 93, 0.25) 0px 2px 5px -1px, rgba(0, 0, 0, 0.3) 0px 1px 3px -1px;">
                                                <div class="row align-items-center p-2">
                                                    <!-- Image Section -->
                                                    <div class="col-sm-4 col-lg-3 mb-3 mb-lg-0">
                                                        <div class="blog-feature-img text-center text-lg-start">
                                                            <a href="javascript:void(0);" class="job-item" data-id="{{ $circular->id }}">
                                                                <img
                                                                    src="{{ ($extension!='pdf') ? static_asset($circular->image) : asset('frontend/assets/images/job-circular/36C3-PDF-encryption-featured2.jpg') }}"
                                                                    alt="{{ $circular->job_title }}"
                                                                    class="img-fluid" style="height: 60px">
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <!-- Content Section -->
                                                    <div class="col-sm-8 col-lg-9">
                                                        <a href="javascript:void(0);" class="job-item text-black" data-id="{{ $circular->id }}">
                                                            <div class="blog-feature-content">
                                                                <h3 class="h5 blog-feature-title">{{ $circular->job_title }}</h3>
                                                                <p class="mb-0"><span class="text-brand"> Deadline : </span> <i class="fa-regular fa-calendar-days text-brand"></i>
                                                                    {{ date('d M Y', strtotime($circular->expire_date)) }}
                                                                </p>
                                                            </div>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
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
    </style>
@endpush
@push('script')
    <script>
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
                    console.log(response)
                    $('#loading').hide();
                    $('#add-details').html(response.html);
                },
                error: function() {
                    alert('An error occurred while fetching job details.');
                }
            });
        });
    });
    </script>
@endpush
