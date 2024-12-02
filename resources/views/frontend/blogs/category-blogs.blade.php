@extends('frontend.master')

@section('title'){{ $seo->meta_tags ?? ''}}@endsection

@section('meta-description') {{ $seo->meta_description ?? ''}}@endsection

@section('meta-keywords'){{ $seo->meta_keywords ?? ''}}@endsection


@section('body')
    <main>

        <section id="Blog_feature" class="background-res background-ats py-5"
            style="background-image: url('{{ asset('frontend') }}/assets/images/blog/blog-bg.png')">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="title-area text-center">
                            <h1 class="fw-bold">{{ $blogCategory->name }} সংক্রান্ত <span class="">ব্লগিং!</span> </h1>

                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="Recently_posted">
            <div class="container py-4">
                <div class="blog-recently-posted-area">
                    @foreach($blogCategory->blogs as $blog)
                    <div class="row g-4 py-lg-3">
                        <div class="col-md-6 py-2">
                            <div class="blog-recently-posted-content">

                                <div class="blog-recently-posted-title">
                                    <h2>{{ $blog->title }}</h2>
                                </div>
                                <div class="blog-datetimeby">
                                    <p> {{ $blog->user->name }}</p>
                                    <span>|</span>
                                    <p><i class="fa-regular fa-calendar-days"></i> {{ date('d F Y', strtotime($blog->created_at)) }}</p>

                                </div>
                                <div class="someText">
                                    <p>{!! Str::limit(strip_tags($blog->body), 800) !!}</p>
                                </div>
                                <div class="blog-read-button">
                                    <a href="{{ route('front.blog-details', ['slug' => $blog->slug]) }}" type="button" class="btn btn_warning">View
                                        Details</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="blog-recently-posted-img">
                                <img src="{{ static_asset(isset($blog->image) ? $blog->image : 'frontend/assets/images/blog/blog-img.jpg') }}" class="w-100"
                                    alt="{{ $blog->title }}" srcset="">
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </section>

    </main>
@endsection
