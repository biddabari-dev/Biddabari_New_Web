@extends('frontend.master')

@section('body')
    <main>

        <section id="Instructor_details" class="background-ats background-res  py-5"
                 style="background-image: url('{{ asset('frontend') }}/assets/images/instructor/instructor-details-bg.png')">
            <div class="container">
                <div class="row g-4 align-items-end">
                    <div class="col-md-3">
                        <div class="teacher-image">
                            <img src="{{ !empty($teacher->image) ? static_asset($teacher->image) : asset('frontend/man.png') }}" alt="" srcset="">
                        </div>
                    </div>
                    <div class="col-md-9">
                        <div class="teacher-details">
                            <h3>{{ ($teacher->first_name) . ' ' . ($teacher->last_name) ?: 'No Name' }}</h3>
                            <p>{{ $teacher->subject ?? '' }}</p>
                            <div class="teacher-contact-button">
{{--
                                <a href="#" type="button" class="btn btn_warning">Contact Now</a>
--}}
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row g-4 mt-4">
                    <div class="col-lg-12">

                        <div class="teachers-category">
                            <ul class="nav nav-pills mb-4" id="pills-tab" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <a class="nav-link active" id="teacher-class-tab" data-bs-toggle="pill"
                                       href="#teacher-class" role="tab" aria-controls="teacher-class"
                                       aria-selected="false">্যারের ভিডিও ক্লাস দেখতে ক্লিক করুন</a>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <a class="nav-link" id="teacher-about-tab" data-bs-toggle="pill"
                                       href="#teacher-about" role="tab" aria-controls="teacher-about"
                                       aria-selected="true">স্যার সম্পর্কে  জানতে এখানে ক্লিক করুন</a>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-lg-12">
                        <div class="tab-content" id="pills-tabContent">
                            <div class="tab-pane" id="teacher-about" role="tabpanel"
                                 aria-labelledby="teacher-about-tab">
                                <div class="container">
                                    <div class="instructor-about-area">
                                        <div class="teacher-about-content">
                                            <h3>Teacher Introduction :</h3>
                                            <p>{{ $teacher->github ?? '' }}</p>
                                        </div>
                                        <br>
                                        <div class="teacher-quality">
                                            <h3>Biographical Info :</h3>
                                            <p>{{ $teacher->description ?? '' }}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="tab-pane fade show active" id="teacher-class" role="tabpanel"
                                 aria-labelledby="teacher-class-tab">
                                <div class="container">
                                    <div class="instructor-class-area">
                                        <div class="teacher-free-class">
                                            <div class="row">
                                                <div class="col-12">
                                                    <h2>Free Class :</h2>
                                                </div>
                                                @if (!empty($teacher->teacher_intro_video))
                                                 <div class="col-md-6 col-lg-4 pb-4">
                                                    <div class="instructor-card">
                                                        <div class="instructor-card-video">
                                                            <div class="ratio ratio-16x9">
                                                                @php
                                                                    $url = $teacher->teacher_intro_video ?? '';
                                                                    $videoId = '';
                                                                    if ($url) {
                                                                        $urlComponents = parse_url($url);
                                                                        if (isset($urlComponents['query'])) {
                                                                            parse_str($urlComponents['query'], $query);
                                                                            $videoId = $query['v'] ?? '';
                                                                        }
                                                                    }
                                                                @endphp
                                                                <iframe
                                                                    src="https://www.youtube.com/embed/{{ $videoId }}?origin=https://plyr.io&iv_load_policy=3&modestbranding=1&playsinline=1&showinfo=0&rel=0&enablejsapi=1"
                                                                    allowfullscreen allowtransparency>
                                                                </iframe>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>
                                                @endif
                                                @if (!empty($teacher->demo_video_1))
                                                <div class="col-md-6 col-lg-4 pb-4">
                                                    <div class="instructor-card">
                                                        <div class="instructor-card-video">
                                                            <div class="ratio ratio-16x9">
                                                                @php
                                                                    $url = $teacher->demo_video_1 ?? '';
                                                                    $videoId = '';
                                                                    if ($url) {
                                                                        $urlComponents = parse_url($url);
                                                                        if (isset($urlComponents['query'])) {
                                                                            parse_str($urlComponents['query'], $query);
                                                                            $videoId = $query['v'] ?? '';
                                                                        }
                                                                    }
                                                                @endphp
                                                                <iframe
                                                                    src="https://www.youtube.com/embed/{{ $videoId }}?origin=https://plyr.io&iv_load_policy=3&modestbranding=1&playsinline=1&showinfo=0&rel=0&enablejsapi=1"
                                                                    allowfullscreen allowtransparency>
                                                                </iframe>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                @endif
                                                @if (!empty($teacher->demo_video_2))
                                                <div class="col-md-6 col-lg-4 pb-4">
                                                    <div class="instructor-card">
                                                        <div class="instructor-card-video">
                                                            <div class="ratio ratio-16x9">
                                                                @php
                                                                    $url = $teacher->demo_video_2 ?? '';
                                                                    $videoId = '';
                                                                    if ($url) {
                                                                        $urlComponents = parse_url($url);
                                                                        if (isset($urlComponents['query'])) {
                                                                            parse_str($urlComponents['query'], $query);
                                                                            $videoId = $query['v'] ?? '';
                                                                        }
                                                                    }
                                                                @endphp
                                                                <iframe
                                                                    src="https://www.youtube.com/embed/{{ $videoId }}?origin=https://plyr.io&iv_load_policy=3&modestbranding=1&playsinline=1&showinfo=0&rel=0&enablejsapi=1"
                                                                    allowfullscreen allowtransparency>
                                                                </iframe>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                               @endif
                                            </div>
                                        </div>
                                        <div class="instructor-courses-area">

                                            <div class="row">
                                                <div class="col-12">
                                                    <h2>Courses :</h2>
                                                </div>
                                                @foreach($latestCourses as $latestCourse)
                                                    <div class="col-md-6 col-lg-4 pb-4">
                                                        <div class="teacher-course-area">
                                                            <div class="teacher-course-img w-100">
                                                                <img src="{{ static_asset(isset($latestCourse->banner) ? $latestCourse->banner : 'frontend/assets/images/exam-page/bankjob-banner.jpg') }}" alt="" srcset="">
                                                            </div>
                                                            <div class="teacher-course-content">
                                                                <h4>{{ Str::limit($latestCourse->title, 20) }}</h4>
                                                                <p class="text-muted">{!! Str::limit(strip_tags($latestCourse->description, 35)) !!}</p>
                                                                @php
                                                                    $discountPrice = $latestCourse->price - $latestCourse->discount_amount;
                                                                    $regularPrice = $latestCourse->price;
                                                                    $now = \Carbon\Carbon::now();
                                                                @endphp

                                                                @if($now->between(dateTimeFormatYmdHi($latestCourse->discount_start_date), dateTimeFormatYmdHi($latestCourse->discount_end_date)))
                                                                    <h5>
                                                                        <span>৳ {{ number_format($discountPrice) }}</span>
                                                                        <span><s>৳ {{ number_format($latestCourse->price) }}</s></span>
                                                                    </h5>
                                                                @else
                                                                    <h5>
                                                                        <span>৳ {{ number_format($regularPrice) }}</span>
                                                                    </h5>
                                                                @endif
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
                    </div>
                </div>
            </div>
        </section>

    </main>
@endsection
