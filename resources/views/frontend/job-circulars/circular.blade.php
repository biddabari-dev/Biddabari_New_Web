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
                        <h2 class="fw-bold">জব <span>সার্কুলার </span></h2>
                        <p>প্রতিযোগিতামূলক এই জব-মার্কেটে নিজের ক্যারিয়ারকে নিয়ে যান অনন্য উচ্চতায়। আপনার জন্য <br>
                            প্রয়োজনীয় সব ক্যাটাগরিই রয়েছে এখানে। বেছে নিন আপনার সবচেয়ে পছন্দের কোর্সটি।</p>
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
