@extends('frontend.master')
@section('title'){{ 'Biddabari | Job Circular'}}@endsection
@section('body')

<main>

<section id="Job_circular" class="background-res background-ats py-5"
    style="background-image: url('{{ asset('frontend') }}/assets/images/blog/blog-bg-1.png')">
        <div class="container py-5">
            <div class="row">
                <div class="col-lg-12">
                    <div class="title-area text-center">
                        <h2 class="fw-bold">চাকরির  <span>বিজ্ঞাপন </span></h2>
                        <br>
                    </div>
                </div>
            </div>
            <div class="job-circular-card-area">
                <div class="row">
                    @foreach($jobCirculars as $circular)
                    <div class="col-md-6 col-lg-4 mb-4">
                        <div class="job-circular-area">
                            <div class="job-circular-img">
                                <img src="{{ static_asset($circular->image) }}" alt="{{ $circular->job_title }}" srcset="" style="height: 600px;">
                            </div>
                            <div class="job-circular-content">
                                <h6>{{ $circular->circularCategory->title }}</h6>
                                <div class="circular-text-btn">
                                    <h3>{{ $circular->job_title }}</h3>
                                    <a href="{{ static_asset($circular->image) }}" download="{{ $circular->job_title }}.jpg" class="btn btn_warning">Download</a>
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
