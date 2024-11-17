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

                    <div class="col-md-6 mb-3 pe-lg-5">
                        <div class="blog-feature-area ">
                            <h4><span>Feature</span> This month</h4>
                            @if(isset($this_month_blogs))
                            @foreach ($this_month_blogs as $blog)
                                <div class="feature-this-month-area mb-3">
                                    <div class="row">
                                        <div class="col-12 col-lg-5">
                                            <div class="blog-feature-img">
                                                <a href="{{ route('front.blog-details', ['slug' => $blog->slug]) }}"> <img
                                                        src="{{ static_asset(isset($blog->image) ? $blog->image : 'frontend/assets/images/blog/blog-img.jpg') }}"
                                                        alt="{{ $blog->title }}" srcset=""></a>
                                            </div>
                                        </div>
                                        <div class="col-12 col-lg-7">
                                            <div class="blog-feature-content">
                                                <div class="blog-category mt-2">
                                                    <h6><span>{{ $blog->blogCategory->name }}</span></h6>
                                                </div>
                                                <div class="blog-feature-title">
                                                    <h3 class="m-0">{{ $blog->title }}</h3>
                                                </div>
                                                <div class="blog-datetimeby d-flex">
                                                    {{-- <img src="{{ static_asset('frontend') }}/assets/images/blog/blog-by.png" alt="" srcset=""> --}}
                                                    <p> {{ $blog->user->name }} |</p>
                                                    <p><i class="fa-regular fa-calendar-days"></i>
                                                        {{ date('d F Y', strtotime($blog->created_at)) }}
                                                    </p>
                                                </div>
                                                <div class="someText">
                                                    <p>{!! Str::limit($blog->sub_title, 105) !!}</p>
                                                </div>
                                                <div class="blog-read-button">
                                                    <a href="{{ route('front.blog-details', ['slug' => $blog->slug]) }}"
                                                        type="button" class="btn btn_warning">View Details</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                            @endif
                        </div>
                    </div>

                    <div class="col-md-6 ps-lg-5">
                        <div class="blog-popular-posted-area">
                            <h4><span>Popular</span> Posted</h4>
                            @foreach ($popular_blogs as $popularblog)
                                <div class="popular-posted-area mb-4">
                                    <div class="row">
                                        <div class="col-12 col-lg-3">
                                            <div class="blog-feature-img">
                                                <a href="{{ route('front.blog-details', ['slug' => $popularblog->slug]) }}"><img
                                                        src="{{ static_asset(isset($popularblog->image) ? $popularblog->image : 'frontend/assets/images/blog/blog-img.jpg') }}"
                                                        alt="{{ $popularblog->title }}" srcset=""></a>
                                            </div>
                                        </div>
                                        <div class="col-12 col-lg-9">
                                            <a href="{{ route('front.blog-details', ['slug' => $popularblog->slug]) }}"
                                                class="text-black">
                                                <div class="blog-feature-content">
                                                    <div class="blog-category mt-2">
                                                        <h6><span>{{ $popularblog->blogCategory->name }}</span></h6>
                                                    </div>
                                                    <div class="blog-feature-title">
                                                        <h3>{{ $popularblog->title }}</h3>
                                                    </div>
                                                    <div class="someText">
                                                        <p>{{ $popularblog->sub_title }}</p>
                                                    </div>
                                                    <div class="blog-datetimeby d-flex">
                                                        <p> {{ $popularblog->user->name }} |</p>
                                                        <p><i
                                                                class="fa-regular fa-calendar-days"></i>{{ date('d F Y', strtotime($popularblog->created_at)) }}
                                                        </p>
                                                    </div>
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
        </section>

        <section id="Recently_posted">
            <div class="container py-4">
                <div class="blog-recently-posted-area">
                    <h2><span>Recently</span> Posted</h2>
                    @foreach($recentBlogs as $recent_blog)
                    <div class="row g-4 py-lg-3">
                        <div class="col-md-6 py-2  py-md-5">
                            <div class="blog-recently-posted-content">
                                <div class="blog-category mt-2">
                                    <h6><span>{{ $recent_blog->blogCategory->name }}</span></h6>
                                </div>
                                <div class="blog-recently-posted-title">
                                    <h3>{{ $recent_blog->title }}</h3>
                                </div>
                                <div class="blog-datetimeby">
                                    <p> {{ $recent_blog->user->name }}</p>
                                    <span>|</span>
                                    <p><i class="fa-regular fa-calendar-days"></i> {{ date('d F Y', strtotime($recent_blog->created_at)) }}</p>

                                </div>
                                <div class="someText">
                                    <p>{!! Str::limit(strip_tags($recent_blog->body), 600) !!}</p>
                                </div>
                                <div class="blog-read-button">
                                    <a href="{{ route('front.blog-details', ['slug' => $recent_blog->slug]) }}" type="button" class="btn btn_warning">View
                                        Details</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="blog-recently-posted-img">
                                <img src="{{ static_asset(isset($recent_blog->image) ? $recent_blog->image : 'frontend/assets/images/blog/blog-img.jpg') }}" class="w-100"
                                    alt="{{ $recent_blog->title }}" srcset="">
                            </div>
                        </div>

                    </div>
                    @endforeach
                </div>
            </div>
        </section>

    </main>
@endsection
