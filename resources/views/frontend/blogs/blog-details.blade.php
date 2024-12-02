@extends('frontend.master')


@section('meta-description'){{ $seo->meta_description ?? ''}}@endsection

@section('meta-keywords'){{ $seo->meta_keywords ?? ''}}@endsection

@section('title'){{ $seo->meta_tags ?? ''}}@endsection


@section('body')
    <main>

        <section class="background-res-why background-ats"
            style="background-image: url('{{ asset('frontend') }}/assets/images/blog/blog-bg-1.png')">

            <section id="Blog_details">
                <div class="container">
                    <div class="row py-5">
                        <div class="blog-details-area">
                            <div class="blog-details-top-content">
                                <div class="publish-date">
                                    <p>আপডেট: <br> <span>{{ date('d F Y',strtotime($blog->created_at)) }}</span></p>
                                </div>
                                <div class="blog-details-title">
                                    <h1>{{ $blog->title }}</h1>
                                </div>
                                <div class="someText">
                                    <p>{{ $blog->sub_title }}</p>
                                </div>
                                {{--<div class="blog-details-social-icon d-flex">
                                    <div class="icon">
                                        <a href=""><i class="fa-brands fa-square-facebook"></i></a>
                                    </div>
                                    <div class="icon">
                                        </a><a href=""><i class="fa-brands fa-twitter"></i></a>
                                    </div>
                                    <div class="icon">
                                        <a href=""><i class="fa-brands fa-linkedin"></i></a>
                                    </div>
                                    <div class="icon">
                                        <a href=""><i class="fa-brands fa-instagram"></i></a>
                                    </div>
                                </div>--}}
                            </div>
                            <div class="blog-slider-area py-4">
                                <div class="blog-slide">
                                    <div class="blog-slide-images">
                                        <a href="">
                                            <img src="{{ static_asset($blog->image ? $blog->image : 'frontend/assets/images/blog/blog-img.jpg') }}" alt="" srcset="">
                                        </a>
                                    </div>
                                </div>
                                <div class="blog-slide-content">
                                    <p>{!! $blog->body !!}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section id="LeaveA_reply">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="blog-leaveAreply_area">
                                <div class="leave-reply-title">
                                    <h4>Leave A Reply</h4>
                                    <p>Allready have an account ? Sign in to leave a reply</p>
                                </div>
                                <div class="leaveA-reply-form">
                                    <form id="" action="{{ route('front.new-comment') }}" method="post">
                                        @csrf
                                        <input type="hidden" name="type" value="blog">
                                        <input type="hidden" name="parent_model_id" value="{{ $blog->id }}">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="mb-3">
                                                    <label for="fullName" class="form-label">Full Name</label>
                                                    <input type="text" class="form-control icon-input" name="name" value="{{ auth()->check() ? auth()->user()->name : '' }}"
                                                        placeholder="Enter your full name"
                                                        aria-describedby="nameHelp">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="mb-3">
                                                    <label for="email" class="form-label">Mobile</label>
                                                    <input type="number" name="mobile" value="{{ auth()->check() ? auth()->user()->mobile : '' }}" class="form-control icon-input"
                                                        placeholder="Enter your Mobile No." aria-describedby="emailHelp">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mb-3 form-check">
                                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                            <label class="form-check-label" for="exampleCheck1">Save my name and
                                                email
                                                in
                                                this browser for a next time comment.</label>
                                        </div>
                                        <div class="mb-3">
                                            <label for="comment" class="form-label">Comment</label>
                                            <textarea type="text" class="form-control icon-input" name="message"
                                                placeholder="Space for your comments" rows="3"
                                                aria-describedby="commentHelp"></textarea>
                                        </div>

                                        <button type="submit" class="btn btn_warning">Submit</button>
                                    </form>
                                </div>
                                @if(!empty($comments))
                                <div class="comments-area py-4">
                                    <div class="comment-title py-4">
                                        <h4>Comments</h4>
                                    </div>
                                    @foreach($comments as $comment)
                                    <div class="comment mb-4">
                                        <div class="comment-author-img d-flex">
                                            <img src="{{ asset('frontend') }}/man.png" alt="" srcset="">
                                            <div class="name">
                                                <h6>{{ $comment->name }} </h6>
                                                <p>{{ date('d.m.Y',strtotime($comment->created_at)) }}</p>
                                            </div>
                                        </div>
                                        <p>{{ $comment->message }}</p>
                                    </div>
                                    @endforeach
                                </div>
                                @endif
                            </div>
                        </div>
                        <div class="col-md-2"></div>
                        <div class="col-md-4">
                            <div class="top-cat-area">
                                <div class="top-cat-title py-4">
                                    <h4><span>Top</span> Categories</h4>
                                </div>
                                @foreach($blogCategories as $topCategory)
                                <div class="categories-hints d-flex justify-content-between">
                                    <p>{{ $topCategory->name }}</p>
                                    <p>{{ $topCategory->blogCount() }}</p>
                                </div>
                                @endforeach
                            </div>
                            <div class="tag-search-area py-4">
                                <div class="teg-search-title">
                                    <h4><span>Browse</span> By Categories</h4>
                                </div>
                                <div class="tag-area">
                                    <div class="tags pt-4">
                                        @foreach($blogCategories as $category)
                                        <a href="{{ route('front.category-blogs', $category->slug) }}" class="btn btn-outline-success tag_btn">{{ $category->name }}</a>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section id="Blog_feature">
                <div class="container">
                    <div class="row py-5">
                        <div class="blog-details-latest-title">
                            <h4><span>Latest</span> Blogs</h4>
                        </div>
                        <div class="col-md-6 mb-3 pe-lg-5">
                            <div class="blog-feature-area ">
                                @foreach($recentBlogs as $key=>$recentblog)
                                    @if($key < 3)
                                    <div class="feature-this-month-area mb-3">
                                        <div class="row">
                                            <div class="col-12 col-lg-5">
                                                <div class="blog-feature-img">
                                                <a href="{{ route('front.blog-details', ['slug' => $recentblog->slug]) }}"> <img src="{{ static_asset(isset($recentblog->image) ? $recentblog->image : 'frontend/assets/images/blog/blog-img.jpg') }}" alt="{{ $recentblog->title }}" srcset=""></a>
                                                </div>
                                            </div>
                                            <div class="col-12 col-lg-7">
                                                <div class="blog-feature-content">
                                                    <div class="blog-category mt-2">
                                                        <h6><span>{{ $recentblog->blogCategory->name }}</span></h6>
                                                    </div>
                                                    <div class="blog-feature-title">
                                                        <h3>{{ $recentblog->title }}</h3>
                                                    </div>
                                                    <div class="blog-datetimeby d-flex">
                                                        <img src="{{ static_asset('frontend') }}/assets/images/blog/blog-by.png" alt="" srcset="">
                                                        <p> {{ $recentblog->user->name }} |</p>
                                                        <p><i class="fa-regular fa-calendar-days"></i> {{ date('d F Y',strtotime($recentblog->created_at)) }}
                                                        </p>
                                                    </div>
                                                    <div class="someText">
                                                        <p>{{ $recentblog->sub_title }}</p>
                                                    </div>
                                                    <div class="blog-read-button">
                                                        <a href="{{ route('front.blog-details', ['slug' => $recentblog->slug]) }}" type="button"
                                                            class="btn btn_warning">View Details</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    @endif
                                @endforeach
                            </div>
                        </div>
                        <div class="col-md-6 ps-lg-5">
                            <div class="blog-popular-posted-area">
                                @foreach($recentBlogs as $key=>$recentblog)
                                    @if($key >= 3 && $key < 8)
                                    <div class="popular-posted-area mb-4">
                                        <div class="row">
                                            <div class="col-12 col-lg-3">
                                                <div class="blog-feature-img">
                                                    <img src="{{ static_asset(isset($recentblog->image) ? $recentblog->image : 'frontend/assets/images/blog/blog-img.jpg') }}" alt="{{ $recentblog->title }}" srcset="">
                                                </div>
                                            </div>
                                            <div class="col-12 col-lg-9">
                                                <div class="blog-feature-content">
                                                    <div class="blog-category mt-2">
                                                        <h6><span>Travel</span></h6>
                                                    </div>
                                                    <div class="blog-feature-title">
                                                        <h3>{{ $recentblog->title }}</h3>
                                                    </div>
                                                    <div class="someText">
                                                        <p>{{ $recentblog->sub_title }}</p>
                                                    </div>
                                                    <div class="blog-datetimeby d-flex">
                                                        <img src="{{ static_asset('frontend') }}/assets/images/blog/blog-by.png" alt="" srcset="">
                                                        <p> {{ $recentblog->user->name }} |</p>
                                                        <p><i class="fa-regular fa-calendar-days"></i> {{ date('d F Y',strtotime($recentblog->created_at)) }}</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    @endif
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </section>

        </section>

    </main>
@endsection

