@extends('frontend.master')

@section('meta-description')
    @foreach($seos as $seo){{ $seo->meta_description ?? ''}}@endforeach
@endsection

@section('meta-keywords')
    @foreach($seos as $seo){{ $seo->meta_keywords ?? ''}}@endforeach
@endsection

{{--@section('meta-title')
    @foreach($seos as $seo){{ $seo->slug ?? ''}}@endforeach
@endsection--}}

@section('title')
    @foreach($seos as $seo){{ $seo->meta_tags ?? ''}}@endforeach
@endsection

@section('meta-url'){{ request()->url() }}@endsection

@section('body')
    <main>
        <section id="Course_details">
            <div class="container">
                <div class="row g-4 py-5">
                    <div class="col-md-7 col-lg-8">
                        <div class="course-details-title">
                            <h2>{{ $course->title ?? '' }}</h2>
                            <p>{{ $course->sub_title ?? '' }}</p>
                            <div class="customer-book-rating mb-3">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="far fa-star"></i>
                                <span>4.8 (5 Customer Review)</span>
                            </div>
                        </div>
                        <div class="course-details-video my-4">
                            <div class="ratio ratio-16x9">
                                @php
                                    $url = $course->featured_video_url ?? '';
                                    $videoId = '';
                                    if ($url) {
                                        $urlComponents = parse_url($url);
                                        if (isset($urlComponents['query'])) {
                                            parse_str($urlComponents['query'], $query);
                                            $videoId = $query['v'] ?? '';
                                        }
                                    }
                                @endphp
                                @if (!empty($course->featured_video_url))
                                    <iframe
                                        src="https://www.youtube.com/embed/{{ $videoId }}?origin=https://plyr.io&iv_load_policy=3&modestbranding=1&playsinline=1&showinfo=0&rel=0&enablejsapi=1"
                                        allowfullscreen allowtransparency>
                                    </iframe>
                                @else
                                    <img src="{{ asset(isset($course->banner) ? $course->banner : 'frontend/assets/images/exam-page/bankjob-banner.jpg') }}" class="w-100 img-fluid" alt="{{ $course->alt_text }}" title="{{ $course->banner_title }}">
                                @endif

                            </div>
                        </div>

                        <div class="course-description-area">
                            <div class="course-description-tab-button">
                                <ul class="nav nav-pills nav-fill gap-2 mb-4" id="pills-tab" role="tablist">
                                    <li class="nav-item" role="presentation">
                                        <a class="nav-link active" id="overview-tab" data-bs-toggle="pill"
                                           href="#overview" role="tab" aria-controls="overview"
                                           aria-selected="true">Overview</a>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <a class="nav-link" id="instructor-tab" data-bs-toggle="pill"
                                           href="#instructor" role="tab" aria-controls="instructor-class"
                                           aria-selected="false">Instructor</a>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <a class="nav-link" id="routine-tab" data-bs-toggle="pill" href="#routine"
                                           role="tab" aria-controls="routine-class"
                                           aria-selected="false">Routine</a>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <a class="nav-link" id="review-tab" data-bs-toggle="pill" href="#review"
                                           role="tab" aria-controls="review-class" aria-selected="false">Review</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="tab-content" id="pills-tabContent">
                                <div class="tab-pane fade show active" id="overview" role="tabpanel"
                                     aria-labelledby="overview-tab">
                                    <div class="overview-area">
                                        <div class="overview-title">
                                            <h4>Description</h4>
                                        </div>
                                        <div class="overview-content">
                                            <p>{!! $course->description !!}</p>
                                        </div>
                                       {{-- <div class="learn-this-course mb-4">
                                            <div class="learn-course-title">
                                                <h4>What you will learn in this course</h4>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="learn-course-text">
                                                        <div class="text d-flex">
                                                            <i class="fa-solid fa-circle-check"></i>
                                                            <p>Lorem ipsum dolor sit amet consectetur adipisicing
                                                                elit.
                                                                dolorem repellendus. Incidunt totam Lorem ipsum
                                                                dolor
                                                                sit amet. </p>
                                                        </div>
                                                        <div class="text d-flex">
                                                            <i class="fa-solid fa-circle-check"></i>
                                                            <p>Lorem ipsum dolor sit amet consectetur adipisicing
                                                                elit.
                                                                Vero,
                                                                dolorem </p>
                                                        </div>
                                                        <div class="text d-flex">
                                                            <i class="fa-solid fa-circle-check"></i>
                                                            <p>Lorem ipsum dolor sit amet consectetur adipisicing
                                                                elit.
                                                                Vero,
                                                                dolorem repellendus. </p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="learn-course-text">
                                                        <div class="text d-flex">
                                                            <i class="fa-solid fa-circle-check"></i>
                                                            <p>Lorem ipsum dolor sit amet consectetur adipisicing
                                                                elit.
                                                                Vero,
                                                                dolorem repellendus. Incidunt totam Lorem ipsum
                                                                dolor
                                                                sit. </p>
                                                        </div>
                                                        <div class="text d-flex">
                                                            <i class="fa-solid fa-circle-check"></i>
                                                            <p>Lorem ipsum dolor sit amet consectetur adipisicing
                                                                elit.
                                                                Vero,
                                                                dolorem repellendus</p>
                                                        </div>
                                                        <div class="text d-flex">
                                                            <i class="fa-solid fa-circle-check"></i>
                                                            <p>Lorem ipsum dolor sit amet consectetur adipisicing
                                                                elit.
                                                                Vero,
                                                                dolorem repellendus. Incidunt totam </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>--}}

                                        <div class="course-curriculum-area mb-4">
                                            <div class="course-curriculum-title py-4">
                                                <h4>কোর্সের পরিপূর্ণ কারিকুলাম</h4>
                                            </div>
                                            <div class="main-accordian">
                                                <div class="accordion" id="accordionPanelsStayOpenExample">
                                                    <div class="accordion-item">
                                                        <h4 class="accordion-header">
                                                            <button class="accordion-button" type="button"
                                                                    data-bs-toggle="collapse"
                                                                    data-bs-target="#panelsStayOpen-collapseOne"
                                                                    aria-expanded="true"
                                                                    aria-controls="panelsStayOpen-collapseOne">
                                                                Modern JavaScript Programming
                                                            </button>
                                                        </h4>
                                                        <div id="panelsStayOpen-collapseOne"
                                                             class="accordion-collapse collapse show">
                                                            <div class="accordion-body">
                                                                <div class="sub-accordian">
                                                                    <div class="accordion accordion-flush"
                                                                         id="accordionFlushExample">
                                                                        <div class="accordion-item">
                                                                            <h5 class="accordion-header">
                                                                                <button
                                                                                    class="accordion-button collapsed"
                                                                                    type="button"
                                                                                    data-bs-toggle="collapse"
                                                                                    data-bs-target="#flush-collapseOne"
                                                                                    aria-expanded="false"
                                                                                    aria-controls="flush-collapseOne">
                                                                                    Getting Started With JavaScript
                                                                                </button>
                                                                            </h5>
                                                                            <div id="flush-collapseOne"
                                                                                 class="accordion-collapse collapse"
                                                                                 data-bs-parent="#accordionFlushExample">
                                                                                <div class="accordion-body">
                                                                                    <div
                                                                                        class="accordion-body-content d-flex justify-content-between mb-2">
                                                                                        <div class="text d-flex">
                                                                                            <i
                                                                                                class="fa-solid fa-circle-play"></i>
                                                                                            <p>Introduction & Course
                                                                                                Overview</p>
                                                                                        </div>
                                                                                        <div class="v-button">
                                                                                            <a href="">
                                                                                                <p><i
                                                                                                        class="fa-solid fa-play"></i>
                                                                                                    ফ্রি ভিডিও</p>
                                                                                            </a>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div
                                                                                        class="accordion-body-content d-flex justify-content-between mb-2">
                                                                                        <div class="text d-flex">
                                                                                            <i
                                                                                                class="fa-solid fa-circle-play"></i>
                                                                                            <p>Introduction & Course
                                                                                                Overview</p>
                                                                                        </div>
                                                                                        <div class="v-button">
                                                                                            <a href="">
                                                                                                <p><i
                                                                                                        class="fa-solid fa-play"></i>
                                                                                                    ফ্রি ভিডিও</p>
                                                                                            </a>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div
                                                                                        class="accordion-body-content d-flex justify-content-between mb-2">
                                                                                        <div class="text d-flex">
                                                                                            <i
                                                                                                class="fa-solid fa-circle-play"></i>
                                                                                            <p>Introduction & Course
                                                                                                Overview</p>
                                                                                        </div>
                                                                                        <div class="v-button">
                                                                                            <a href="">
                                                                                                <p><i
                                                                                                        class="fa-solid fa-play"></i>
                                                                                                    ফ্রি ভিডিও</p>
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
                                                        <div id="panelsStayOpen-collapseOne"
                                                             class="accordion-collapse collapse show">
                                                            <div class="accordion-body">
                                                                <div class="sub-accordian">
                                                                    <div class="accordion accordion-flush"
                                                                         id="accordionFlushExample">
                                                                        <div class="accordion-item">
                                                                            <h5 class="accordion-header">
                                                                                <button
                                                                                    class="accordion-button collapsed"
                                                                                    type="button"
                                                                                    data-bs-toggle="collapse"
                                                                                    data-bs-target="#flush-collapseOne"
                                                                                    aria-expanded="false"
                                                                                    aria-controls="flush-collapseOne">
                                                                                    Getting Started With JavaScript
                                                                                </button>
                                                                            </h5>
                                                                            <div id="flush-collapseOne"
                                                                                 class="accordion-collapse collapse"
                                                                                 data-bs-parent="#accordionFlushExample">
                                                                                <div class="accordion-body">
                                                                                    <div
                                                                                        class="accordion-body-content d-flex justify-content-between mb-2">
                                                                                        <div class="text d-flex">
                                                                                            <i
                                                                                                class="fa-solid fa-circle-play"></i>
                                                                                            <p>Introduction & Course
                                                                                                Overview</p>
                                                                                        </div>
                                                                                        <div class="v-button">
                                                                                            <a href="">
                                                                                                <p><i
                                                                                                        class="fa-solid fa-play"></i>
                                                                                                    ফ্রি ভিডিও</p>
                                                                                            </a>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div
                                                                                        class="accordion-body-content d-flex justify-content-between mb-2">
                                                                                        <div class="text d-flex">
                                                                                            <i
                                                                                                class="fa-solid fa-circle-play"></i>
                                                                                            <p>Introduction & Course
                                                                                                Overview</p>
                                                                                        </div>
                                                                                        <div class="v-button">
                                                                                            <a href="">
                                                                                                <p><i
                                                                                                        class="fa-solid fa-play"></i>
                                                                                                    ফ্রি ভিডিও</p>
                                                                                            </a>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div
                                                                                        class="accordion-body-content d-flex justify-content-between mb-2">
                                                                                        <div class="text d-flex">
                                                                                            <i
                                                                                                class="fa-solid fa-circle-play"></i>
                                                                                            <p>Introduction & Course
                                                                                                Overview</p>
                                                                                        </div>
                                                                                        <div class="v-button">
                                                                                            <a href="">
                                                                                                <p><i
                                                                                                        class="fa-solid fa-play"></i>
                                                                                                    ফ্রি ভিডিও</p>
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
                                                        <div id="panelsStayOpen-collapseOne"
                                                             class="accordion-collapse collapse show">
                                                            <div class="accordion-body">
                                                                <div class="sub-accordian">
                                                                    <div class="accordion accordion-flush"
                                                                         id="accordionFlushExample">
                                                                        <div class="accordion-item">
                                                                            <h5 class="accordion-header">
                                                                                <button
                                                                                    class="accordion-button collapsed"
                                                                                    type="button"
                                                                                    data-bs-toggle="collapse"
                                                                                    data-bs-target="#flush-collapseOne"
                                                                                    aria-expanded="false"
                                                                                    aria-controls="flush-collapseOne">
                                                                                    Getting Started With JavaScript
                                                                                </button>
                                                                            </h5>
                                                                            <div id="flush-collapseOne"
                                                                                 class="accordion-collapse collapse"
                                                                                 data-bs-parent="#accordionFlushExample">
                                                                                <div class="accordion-body">
                                                                                    <div
                                                                                        class="accordion-body-content d-flex justify-content-between mb-2">
                                                                                        <div class="text d-flex">
                                                                                            <i
                                                                                                class="fa-solid fa-circle-play"></i>
                                                                                            <p>Introduction & Course
                                                                                                Overview</p>
                                                                                        </div>
                                                                                        <div class="v-button">
                                                                                            <a href="">
                                                                                                <p><i
                                                                                                        class="fa-solid fa-play"></i>
                                                                                                    ফ্রি ভিডিও</p>
                                                                                            </a>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div
                                                                                        class="accordion-body-content d-flex justify-content-between mb-2">
                                                                                        <div class="text d-flex">
                                                                                            <i
                                                                                                class="fa-solid fa-circle-play"></i>
                                                                                            <p>Introduction & Course
                                                                                                Overview</p>
                                                                                        </div>
                                                                                        <div class="v-button">
                                                                                            <a href="">
                                                                                                <p><i
                                                                                                        class="fa-solid fa-play"></i>
                                                                                                    ফ্রি ভিডিও</p>
                                                                                            </a>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div
                                                                                        class="accordion-body-content d-flex justify-content-between mb-2">
                                                                                        <div class="text d-flex">
                                                                                            <i
                                                                                                class="fa-solid fa-circle-play"></i>
                                                                                            <p>Introduction & Course
                                                                                                Overview</p>
                                                                                        </div>
                                                                                        <div class="v-button">
                                                                                            <a href="">
                                                                                                <p><i
                                                                                                        class="fa-solid fa-play"></i>
                                                                                                    ফ্রি ভিডিও</p>
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
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        {{--<div class="who-this-course-area mb-4">
                                            <div class="title py-3">
                                                <h4>Who This Course is for :</h4>
                                            </div>
                                            <div class="who-this-course-text">
                                                <p><span><i class="fa-solid fa-arrow-right"></i></span> This course
                                                    is
                                                    for those who want to launch a Freelance Web Design career.</p>
                                                <p><span><i class="fa-solid fa-arrow-right"></i></span> This course
                                                    is
                                                    for those who want to launch a Freelance Web Design career.</p>
                                                <p><span><i class="fa-solid fa-arrow-right"></i></span> This course
                                                    is
                                                    for those who want to launch a Freelance Web Design career.</p>
                                                <p><span><i class="fa-solid fa-arrow-right"></i></span> This course
                                                    is
                                                    for those who want to launch a Freelance Web Design career.</p>
                                                <p><span><i class="fa-solid fa-arrow-right"></i></span> This course
                                                    is
                                                    for those who want to launch a Freelance Web Design career.</p>
                                            </div>
                                        </div>

                                        <div class="course-requirment-area mb-4">
                                            <div class="title">
                                                <h4>Course Requirments</h4>
                                            </div>
                                            <div class="requirment-text">
                                                <ul>
                                                    <li>
                                                        <p>Nunc auctor consequat lorem, in posuere enim hendrerit
                                                            sed.
                                                        </p>
                                                    </li>
                                                    <li>
                                                        <p>Nunc auctor consequat lorem, in posuere enim hendrerit
                                                            sed.
                                                        </p>
                                                    </li>
                                                    <li>
                                                        <p>Nunc auctor consequat lorem, in posuere enim hendrerit
                                                            sed.
                                                        </p>
                                                    </li>
                                                    <li>
                                                        <p>Nunc auctor consequat lorem, in posuere enim hendrerit
                                                            sed.
                                                        </p>
                                                    </li>
                                                    <li>
                                                        <p>Nunc auctor consequat lorem, in posuere enim hendrerit
                                                            sed.
                                                        </p>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>--}}

                                        <div class="course-routine-area mb-4">
                                            <div class="title py-3">
                                                <h4>Course Routine</h4>
                                            </div>
                                            <div class="course-routine-form">
                                                <table class="table table-borderless">
                                                    <thead>
                                                    <tr>
                                                        <th scope="col">#SL</th>
                                                        <th scope="col">Topic</th>
                                                        <th scope="col">Date</th>
                                                        <th scope="col">Day</th>
                                                        <th scope="col">Time</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                        @if (isset($course->courseRoutines))
                                                            @php
                                                                $i = 0;
                                                            @endphp
                                                            @foreach ($course->courseRoutines as $courseRoutine)
                                                                @if ($courseEnrollStatus == 'true')
                                                                    @if ($courseRoutine->is_fack == 0)
                                                                        <tr>
                                                                            <td>{{ ++$i }}</td>
                                                                            <td>{{ $courseRoutine->content_name }}
                                                                            </td>
                                                                            <td>{{ showDate($courseRoutine->date_time) }}
                                                                            </td>
                                                                            <td>{{ $courseRoutine->day }}</td>
                                                                            <td>{{ showTime($courseRoutine->date_time) }}
                                                                            </td>
                                                                        </tr>
                                                                    @endif
                                                                @else
                                                                    @if ($courseRoutine->is_fack == 1)
                                                                        <tr>
                                                                            <td>{{ ++$i }}</td>
                                                                            <td>{{ $courseRoutine->content_name }}
                                                                            </td>
                                                                            <td>{{ showDate($courseRoutine->date_time) }}
                                                                            </td>
                                                                            <td>{{ $courseRoutine->day }}</td>
                                                                            <td>{{ showTime($courseRoutine->date_time) }}
                                                                            </td>
                                                                        </tr>
                                                                    @endif
                                                                @endif
                                                            @endforeach
                                                        @endif
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>

                                        <div class="course-instructor-area mb-4">
                                             <div class="instructor-title py-3">
                                                <h4>Course Instructor ({{ count($course->teachers) }})</h4>
                                            </div>
                                            @foreach ($course->teachers as $teacher)
                                             <div class="instructor-area mb-3">
                                                <div class="instructor-img d-flex">
                                                    <a href="{{ route('front.instructor-details', ['id' => $teacher->id, 'slug' => str_replace(' ', '-', $teacher->name)]) }}">
                                                        <img src="{{ !empty($teacher->image) ? asset($teacher->image) : asset('frontend/man.png') }}" alt="instructor"/>
                                                    </a>
                                                    <div class="instructor-text">
                                                        <h6>
                                                            {{ isset($teacher->first_name) ? $teacher->first_name . ' ' . $teacher->last_name : $teacher->user->name }}
                                                        </h6>
                                                        <p>{{ $teacher->subject ?? '' }}</p>
                                                        <div class="instructor-rating mb-2">
                                                            <i class="fas fa-star"></i>
                                                            <span>4.9 Course rating</span>
                                                            <i class="fa-solid fa-people-group"></i>
                                                            <span>Students</span>
                                                            <i class="fa-solid fa-circle-play"></i>
                                                            <span>Courses</span>
                                                        </div>
                                                        <p>{!! Str::limit($teacher->description, 90) !!}</p>
                                                    </div>
                                                </div>
                                            </div>
                                           @endforeach
                                        </div>

                                        <div class="course-rating-area mb-4">
                                            <div class="title py-4">
                                                <h4>Course Rating</h4>
                                            </div>
                                            <div class="rating-area">
                                                <div class="row g-3">
                                                    <div class="col-md-3">
                                                        <div class="main-rating ">
                                                            <h2>4.8</h2>
                                                            <div class="rating mb-3">
                                                                <i class="fas fa-star"></i>
                                                                <i class="fas fa-star"></i>
                                                                <i class="fas fa-star"></i>
                                                                <i class="fas fa-star"></i>
                                                                <i class="far fa-star"></i>
                                                            </div>
                                                            <p>Course Rating</p>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="rating-star">
                                                            <div class="rating mb-2">
                                                                <i class="fas fa-star"></i>
                                                                <i class="fas fa-star"></i>
                                                                <i class="fas fa-star"></i>
                                                                <i class="fas fa-star"></i>
                                                                <i class="fas fa-star"></i>
                                                                <span>5 Start Rating</span>
                                                            </div>
                                                        </div>
                                                        <div class="rating-star">
                                                            <div class="rating mb-2">
                                                                <i class="fas fa-star"></i>
                                                                <i class="fas fa-star"></i>
                                                                <i class="fas fa-star"></i>
                                                                <i class="fas fa-star"></i>
                                                                <i class="far fa-star"></i>
                                                                <span>5 Start Rating</span>
                                                            </div>
                                                        </div>
                                                        <div class="rating-star">
                                                            <div class="rating mb-2">
                                                                <i class="fas fa-star"></i>
                                                                <i class="fas fa-star"></i>
                                                                <i class="fas fa-star"></i>
                                                                <i class="far fa-star"></i>
                                                                <i class="far fa-star"></i>
                                                                <span>5 Start Rating</span>
                                                            </div>
                                                        </div>
                                                        <div class="rating-star">
                                                            <div class="rating mb-2">
                                                                <i class="fas fa-star"></i>
                                                                <i class="fas fa-star"></i>
                                                                <i class="far fa-star"></i>
                                                                <i class="far fa-star"></i>
                                                                <i class="far fa-star"></i>
                                                                <span>5 Start Rating</span>
                                                            </div>
                                                        </div>
                                                        <div class="rating-star">
                                                            <div class="rating mb-2">
                                                                <i class="fas fa-star"></i>
                                                                <i class="far fa-star"></i>
                                                                <i class="far fa-star"></i>
                                                                <i class="far fa-star"></i>
                                                                <i class="far fa-star"></i>
                                                                <span>5 Start Rating</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-5">
                                                        <div class="progress-bar-container">
                                                            <div class="progress-row">
                                                                <div class="progress-bar-75"></div>
                                                                <span class="percentage">75%</span>
                                                            </div>
                                                            <div class="progress-row">
                                                                <div class="progress-bar-45"></div>
                                                                <span class="percentage">45%</span>
                                                            </div>
                                                            <div class="progress-row">
                                                                <div class="progress-bar-21"></div>
                                                                <span class="percentage">21%</span>
                                                            </div>
                                                            <div class="progress-row">
                                                                <div class="progress-bar-12"></div>
                                                                <span class="percentage">12%</span>
                                                            </div>
                                                            <div class="progress-row">
                                                                <div class="progress-bar-5"></div>
                                                                <span class="percentage">05%</span>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>

                                            </div>
                                        </div>

                                        <div class="student-feedback-area mb-4">
                                            <div class="feedback-top d-flex justify-content-between py-5">
                                                <div class="title">
                                                    <h4>Student Feedback</h4>
                                                </div>
                                                <div class="dropdown-rating">
                                                    <div class="dropdown">
                                                        <button class="dropdown-toggle" type="button"
                                                                data-bs-toggle="dropdown" aria-expanded="false">
                                                            5 Start Rating
                                                        </button>
                                                        <ul class="dropdown-menu">
                                                            <li><a class="dropdown-item" href="#">5</a></li>
                                                            <li><a class="dropdown-item" href="#">4</a></li>
                                                            <li><a class="dropdown-item" href="#">3</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            @foreach ($comments as $comment)
                                              <div class="feedback-area mb-3">
                                                <div class="feedback-author-img d-flex">
                                                    <img src="{{ $comment->user && !empty($comment->user->profile_photo_path) ? asset($comment->user->profile_photo_path) : asset('frontend/man.png') }}" alt="Student" />
                                                    <div class="feedback-text">
                                                        <h6>{{ isset($comment->user_id) ? $comment->user->name : 'Guest' }}
                                                            <span>{{ $comment->created_at->diffForHumans() }}</span>
                                                        </h6>
                                                        <div class="feedback-rating mb-2">
                                                            <i class="fas fa-star"></i>
                                                            <i class="fas fa-star"></i>
                                                            <i class="fas fa-star"></i>
                                                            <i class="fas fa-star"></i>
                                                            <i class="far fa-star"></i>
                                                        </div>
                                                        <p>{!! Str::limit($comment->message, 90) !!}</p>
                                                    </div>
                                                </div>
                                            </div>
                                            @endforeach
                                        </div>

                                        <div class="comment-box-area">
                                            <div class="title py-3">
                                                <h4>Leave a Reply</h4>
                                            </div>
                                            <div class="box">
                                                <form action="{{ route('front.new-comment') }}" method="post">
                                                    @csrf
                                                    <input type="hidden" name="type" value="course">
                                                    <input type="hidden" name="parent_model_id" value="{{ $course->id }}">
                                                    <input type="hidden" name="name" value="{{ auth()->check() ? auth()->user()->name : '' }}">
                                                    <input type="hidden" name="email" value="{{ auth()->check() ? auth()->user()->email : '' }}">
                                                    <input type="hidden" name="mobile" value="{{ auth()->check() ? auth()->user()->mobile : '' }}">
                                                    <div class="mb-3">
                                                        <textarea type="text" name="message" class="form-control" id="" rows="4" aria-describedby="emailHelp"></textarea>
                                                    </div>
                                                    <button type="submit" class="btn_warning">Submit</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-5 col-lg-4">
                        <div class="course-cart-area">
                            <div class="course-price d-flex justify-content-between">
                                <h4>Tk 1499 <s>3000</s>
                                </h4>
                                <div class="discount">
                                    <p>50% off</p>
                                </div>
                            </div>
                            <div class="left-days ">
                                <p><i class="fa-regular fa-clock"></i> 2 days left at this price ! </p>
                            </div>
                            <div class="course-short-description">
                                <div class="description-column d-flex justify-content-between">
                                    <p><i class="fa-regular fa-clock"></i> Course Duration</p>
                                    <p>6 Month</p>
                                </div>
                                <div class="description-column d-flex justify-content-between">
                                    <p><i class="fa-solid fa-signal"></i> Course Level</p>
                                    <p>Beginner to Advance</p>
                                </div>
                                <div class="description-column d-flex justify-content-between">
                                    <p><i class="fa-solid fa-people-group"></i> Student Enroll</p>
                                    <p>155,4500</p>
                                </div>
                                <div class="description-column d-flex justify-content-between">
                                    <p><i class="fa-solid fa-language"></i> Language</p>
                                    <p>Manarin</p>
                                </div>
                                <div class="description-column d-flex justify-content-between">
                                    <p><i class="fa-solid fa-earth-europe"></i> Subtitle Language</p>
                                    <p>English</p>
                                </div>
                            </div>
                            <div class="coupon-code-area">
                                <div class="title">
                                    <h5>Apply Promo Code</h5>
                                </div>
                                <div class="promo-code-container">
                                    <input type="text" class="promo-input" placeholder="Apply Promo Code">
                                    <button class="promo-button">Apply</button>
                                </div>
                            </div>
                            <div class="course-purchase-button">
                                <h6>কোর্সটি কিনুন </h6>
                                <p><span class="fw-bold">Note : </span>all course have 30-days money-back guarantee
                                </p>
                            </div>
                            <div class="course-includes-area">
                                <div class="title">
                                    <h5>This Course includes :</h5>
                                </div>
                                <p><i class="fa-regular fa-clock"></i> Lifetime access</p>
                                <p><i class="fa-solid fa-dollar-sign"></i> 30 Day money back guaranty</p>
                                <p><i class="fa-regular fa-file"></i> Free exercises file & downloadable resources
                                </p>
                                <p><i class="fa-solid fa-trophy"></i> Shareable certificate of completion</p>
                                <p><i class="fa-solid fa-tv"></i> Access on mobile , tablet and TV</p>
                                <p><i class="fa-regular fa-file"></i> English subtitles</p>
                                <p><i class="fa-solid fa-globe"></i> 100% online course</p>
                            </div>
                            <div class="cart-contact">
                                <h5>কোর্সটি সম্পর্কে বিস্তারিত জানতে
                                    কল করুন </h5>
                                <h4><i class="fa-solid fa-phone"></i> +8801896060800-15</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection

@push('style')

@endpush
@push('script')

@endpush
