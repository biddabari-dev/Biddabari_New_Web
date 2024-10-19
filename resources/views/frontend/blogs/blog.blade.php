@extends('frontend.master')

@section('body')

<main>

    <section id="Blog_feature" class="background-res background-ats py-5"
        style="background-image: url('{{ asset('frontend') }}/assets/images/blog/blog-bg.png')">
        <div class="container">
            <div class="row">
                <div class="title-area text-center">
                    <h2 class="fw-bold">আমাদের <span class="">ব্লগ সমূহ</span> </h2>
                    <p class="text-muted">
                        প্রতিযোগিতামূলক এই জব-মার্কেটে নিজের ক্যারিয়ারকে নিয়ে যান অনন্য
                        চ্চতায়। আপনার জন্য <br />প্রয়োজনীয় সব ক্যাটাগরিই রয়েছে এখানে।
                        বেছে নিন আপনার সবচেয়ে পছন্দের কোর্সটি।
                    </p>
                </div>
            </div>
            <div class="row py-5">

                <div class="col-md-6 mb-3 pe-lg-5">
                    <div class="blog-feature-area ">
                        <h4><span>Feature</span> This month</h4>
                        @foreach($blogs as $blog)
                        <div class="feature-this-month-area mb-3">
                            <div class="row">
                                <div class="col-12 col-lg-5">
                                    <div class="blog-feature-img">
                                       <a href="{{ route('front.blog-details', ['slug' => $blog->slug]) }}"> <img src="{{ asset(isset($blog->image) ? $blog->image : 'frontend/assets/images/blog/blog-img.jpg') }}" alt="{{ $blog->title }}" srcset=""></a>
                                    </div>
                                </div>
                                <div class="col-12 col-lg-7">
                                    <div class="blog-feature-content">
                                        <div class="blog-category mt-2">
                                            <h6><span>{{ $blog->blogCategory->name }}</span></h6>
                                        </div>
                                        <div class="blog-feature-title">
                                            <h3>{{ $blog->title }}</h3>
                                        </div>
                                        <div class="blog-datetimeby d-flex">
                                            <img src="{{ asset('frontend') }}/assets/images/blog/blog-by.png" alt="" srcset="">
                                            <p> {{ $blog->user->name }} |</p>
                                            <p><i class="fa-regular fa-calendar-days"></i> {{ date('d F Y',strtotime($blog->created_at)) }}
                                            </p>
                                        </div>
                                        <div class="someText">
                                            <p>{{ $blog->sub_title }}</p>
                                        </div>
                                        <div class="blog-read-button">
                                            <a href="{{ route('front.blog-details', ['slug' => $blog->slug]) }}" type="button"
                                                class="btn btn_warning">View Details</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach

                    </div>
                </div>

                <div class="col-md-6 ps-lg-5">
                    <div class="blog-popular-posted-area">
                        <h4><span>Popular</span> Posted</h4>
                        <div class="popular-posted-area mb-4">
                            <div class="row">
                                <div class="col-12 col-lg-3">
                                    <div class="blog-feature-img">
                                        <img src="{{ asset('frontend') }}/assets/images/blog/blog-img.jpg" alt="" srcset="">
                                    </div>
                                </div>
                                <div class="col-12 col-lg-9">
                                    <div class="blog-feature-content">
                                        <div class="blog-category mt-2">
                                            <h6><span>Travel</span></h6>
                                        </div>
                                        <div class="blog-feature-title">
                                            <h3>সব চাকরির বাংলা বিষয়ের প্রস্তু...</h3>
                                        </div>
                                        <div class="someText">
                                            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit.</p>
                                        </div>
                                        <div class="blog-datetimeby d-flex">
                                            <img src="{{ asset('frontend') }}/assets/images/blog/blog-by.png" alt="" srcset="">
                                            <p> Mizanur |</p>
                                            <p><i class="fa-regular fa-clock"></i> 7 min. to read</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="popular-posted-area mb-4">
                            <div class="row">
                                <div class="col-12 col-lg-3">
                                    <div class="blog-feature-img">
                                        <img src="{{ asset('frontend') }}/assets/images/blog/blog-img.jpg" alt="" srcset="">
                                    </div>
                                </div>
                                <div class="col-12 col-lg-9">
                                    <div class="blog-feature-content">
                                        <div class="blog-category mt-2">
                                            <h6><span>Travel</span></h6>
                                        </div>
                                        <div class="blog-feature-title">
                                            <h3>সব চাকরির বাংলা বিষয়ের প্রস্তু...</h3>
                                        </div>
                                        <div class="someText">
                                            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit.</p>
                                        </div>
                                        <div class="blog-datetimeby d-flex">
                                            <img src="{{ asset('frontend') }}/assets/images/blog/blog-by.png" alt="" srcset="">
                                            <p> Mizanur |</p>
                                            <p><i class="fa-regular fa-clock"></i> 7 min. to read</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="popular-posted-area mb-4">
                            <div class="row">
                                <div class="col-12 col-lg-3">
                                    <div class="blog-feature-img">
                                        <img src="{{ asset('frontend') }}/assets/images/blog/blog-img.jpg" alt="" srcset="">
                                    </div>
                                </div>
                                <div class="col-12 col-lg-9">
                                    <div class="blog-feature-content">
                                        <div class="blog-category mt-2">
                                            <h6><span>Travel</span></h6>
                                        </div>
                                        <div class="blog-feature-title">
                                            <h3>সব চাকরির বাংলা বিষয়ের প্রস্তু...</h3>
                                        </div>
                                        <div class="someText">
                                            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit.</p>
                                        </div>
                                        <div class="blog-datetimeby d-flex">
                                            <img src="{{ asset('frontend') }}/assets/images/blog/blog-by.png" alt="" srcset="">
                                            <p> Mizanur |</p>
                                            <p><i class="fa-regular fa-clock"></i> 7 min. to read</p>
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

    <section id="Recently_posted">
        <div class="container py-4">
            <div class="blog-recently-posted-area">
                <h2><span>Recently</span> Posted</h2>
                <div class="row g-5 py-5">
                    <div class="col-md-6  py-5">
                        <div class="blog-recently-posted-content">
                            <div class="blog-category mt-2">
                                <h6><span>বিসিএস</span></h6>
                            </div>
                            <div class="blog-recently-posted-title">
                                <h3>৪৭ তম বিসিএস প্রস্তুতি</h3>
                            </div>
                            <div class="blog-datetimeby">
                                <img src="{{ asset('frontend') }}/assets/images/blog/blog-by.png" alt="" srcset="">
                                <p> Mizanur</p>
                                <span>|</span>
                                <p><i class="fa-regular fa-calendar-days"></i> 07 April 199</p>
                                <span>|</span>
                                <p><i class="fa-regular fa-clock"></i> 7 min. to read</p>
                            </div>
                            <div class="someText">
                                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Omnis,
                                    rerum? Lorem ipsum dolor sit amet, consectetur adipisicing elit. Harum,
                                    quod?
                                    Porro consequatur reprehenderit voluptate impedit, excepturi et dolores ab
                                    qui
                                    saepe aliquid voluptatem voluptates iure perferendis ut in quia obcaecati
                                    deserunt consectetur corporis sapiente cumque suscipit quas necessitatibus
                                    mollitia! Sint dicta aliquam eaque. Neque repudiandae at saepe! At omnis
                                    assumenda ipsum nesciunt nostrum numquam,</p>
                            </div>
                            <div class="blog-read-button">
                                <a href="blog-details.html" type="button" class="btn btn_warning">View
                                    Details</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="blog-recently-posted-img">
                            <img src="{{ asset('frontend') }}/assets/images/blog/blog-img-1.jpg" class="w-100" alt="" srcset="">
                        </div>
                    </div>

                </div>
                <div class="row g-5 py-5">
                    <div class="col-md-6">
                        <div class="blog-recently-posted-img">
                            <img src="{{ asset('frontend') }}/assets/images/blog/blog-img-1.jpg" class="w-100" alt="" srcset="">
                        </div>
                    </div>
                    <div class="col-md-6 py-5">
                        <div class="blog-recently-posted-content">
                            <div class="blog-category mt-2">
                                <h6><span>বিসিএস</span></h6>
                            </div>
                            <div class="blog-recently-posted-title">
                                <h3>৪৭ তম বিসিএস প্রস্তুতি</h3>
                            </div>
                            <div class="blog-datetimeby">
                                <img src="{{ asset('frontend') }}/assets/images/blog/blog-by.png" alt="" srcset="">
                                <p> Mizanur</p>
                                <span>|</span>
                                <p><i class="fa-regular fa-calendar-days"></i> 07 April 199</p>
                                <span>|</span>
                                <p><i class="fa-regular fa-clock"></i> 7 min. to read</p>
                            </div>
                            <div class="someText">
                                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Omnis,
                                    rerum? Lorem ipsum dolor sit amet, consectetur adipisicing elit. Harum,
                                    quod?
                                    Porro consequatur reprehenderit voluptate impedit, excepturi et dolores ab
                                    qui
                                    saepe aliquid voluptatem voluptates iure perferendis ut in quia obcaecati
                                    deserunt consectetur corporis sapiente cumque suscipit quas necessitatibus
                                    mollitia! Sint dicta aliquam eaque. Neque repudiandae at saepe! At omnis
                                    assumenda ipsum nesciunt nostrum numquam,</p>
                            </div>
                            <div class="blog-read-button">
                                <a href="blog-details.html" type="button" class="btn btn_warning">View
                                    Details</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="App_store" class="background-res background-ats py-5"
        style="background-image: url('{{ asset('frontend') }}/assets/images/exam-page/footer-background.png')">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="style-2phone-image">
                        <img src="{{ asset('frontend') }}/assets/images/exam-page/2-mobile.png" class="img-fluid" alt="" srcset="">
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
                                <img class="img-fluid" src="{{ asset('frontend') }}/assets/images/exam-page/app-store.png"
                                    alt="App Store" srcset=""></a>
                        </div>
                        <div class="play-store">
                            <a href="#">
                                <img class="img-fluid" src="{{ asset('frontend') }}/assets/images/exam-page/google-play.png"
                                    alt="Google Play Store" srcset=""></a>
                        </div>
                    </div>

                </div>
            </div>
        </div>

    </section>


</main>


@endsection

