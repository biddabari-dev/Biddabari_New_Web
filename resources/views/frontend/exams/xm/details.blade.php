@extends('frontend.master')

@section('title'){{ $seo->meta_keywords ?? $exam->title}}@endsection

@section('meta-description')@section('meta-description'){{ $seo->meta_description ?? Str::limit(strip_tags($exam->description), 155) }}@endsection

@section('og-image'){{ $exam->banner ? asset($exam->banner) : '' }}@endsection

@section('body')
    <main>
        <section id="Course_details">
            <div class="container">
                <div class="row g-4 py-5">
                    <div class="col-md-7 col-lg-8">
                        <div class="course-details-title">
                            <h2>{{ $exam->title ?? '' }}</h2>
                            <p>{{ $exam->sub_title ?? '' }}</p>
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
                                    $url = $exam->featured_video_url ?? '';
                                    $videoId = '';
                                    if ($url) {
                                        $urlComponents = parse_url($url);
                                        if (isset($urlComponents['query'])) {
                                            parse_str($urlComponents['query'], $query);
                                            $videoId = $query['v'] ?? '';
                                        }
                                    }
                                @endphp
                                @if (!empty($exam->featured_video_url))
                                    <iframe
                                        src="https://www.youtube.com/embed/{{ $videoId }}?origin=https://plyr.io&iv_load_policy=3&modestbranding=1&playsinline=1&showinfo=0&rel=0&enablejsapi=1"
                                        allowfullscreen allowtransparency>
                                    </iframe>
                                @else
                                    <img src="{{ static_asset(isset($exam->banner) ? $exam->banner : 'frontend/assets/images/exam-page/bankjob-banner.jpg') }}" class="w-100 img-fluid" alt="{{ $exam->alt_text }}" title="{{ $exam->banner_title }}">
                                @endif

                            </div>
                        </div>

                        <div class="course-description-area">

                            <div class="course-description-tab-button">
                                <ul class="nav nav-pills nav-fill gap-2 mb-4" id="pills-tab" role="tablist">
                                    <li class="nav-item" role="presentation">
                                        <a class="nav-link active" id="overview-tab" data-bs-toggle="pill" href="#overview" role="tab"
                                           aria-controls="overview" aria-selected="true">Overview</a>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <a class="nav-link" id="instructor-tab" data-bs-toggle="pill" href="#instructor" role="tab"
                                           aria-controls="instructor-class" aria-selected="false">Instructor</a>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <a class="nav-link" id="routine-tab" data-bs-toggle="pill" href="#routine" role="tab"
                                           aria-controls="routine-class" aria-selected="false">Routine</a>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <a class="nav-link" id="review-tab" data-bs-toggle="pill" href="#review" role="tab"
                                           aria-controls="review-class" aria-selected="false">Review</a>
                                    </li>
                                </ul>
                            </div>

                            <div class="tab-content" id="pills-tabContent-overview">
                                <div class="tab-pane fade show active" id="overview" role="tabpanel" aria-labelledby="overview-tab">
                                    <div class="overview-area">
                                        <div class="overview-title">
                                             <h4>Description :</h4>
                                        </div>
                                        <br>
                                        <div class="overview-content">
                                            <p>{!! $exam->description !!}</p>
                                        </div>

                                        <div class="comment-box-area">
                                            <div class="title py-3">
                                                <h4>Leave a Reply</h4>
                                            </div>
                                            <div class="box">
                                                <form action="{{ auth()->check() ? route('front.new-comment') : route('login') }}" method="{{ auth()->check() ? 'POST' : 'GET'}}">
                                                    @csrf
                                                    <input type="hidden" name="type" value="batch_exam">
                                                    <input type="hidden" name="parent_model_id" value="{{ $exam->id }}">
                                                    <input type="hidden" name="name" value="{{ auth()->check() ? auth()->user()->name : '' }}">
                                                    <input type="hidden" name="email" value="{{ auth()->check() ? auth()->user()->email : '' }}">
                                                    <input type="hidden" name="mobile" value="{{ auth()->check() ? auth()->user()->mobile : '' }}">
                                                    <div class="mb-3">
                                                        <textarea type="text" name="message" class="form-control" id="" rows="4" aria-describedby="emailHelp" placeholder="Write here..." required></textarea>
                                                    </div>
                                                    <button type="submit" class="btn_warning">Submit</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="tab-content" id="pills-tabContent-instructor">
                                <div class="tab-pane fade" id="instructor" role="tabpanel" aria-labelledby="instructor-tab">
                                    <div class="overview-area">
                                        <div class="course-instructor-area mb-4">
                                            <div class="instructor-title py-3">
                                                <h4>Course Instructor ({{ count($exam->teachers) }})</h4>
                                            </div>
                                            @foreach ($exam->teachers as $teacher)
                                                <div class="instructor-area mb-3">
                                                    <div class="instructor-img d-flex">
                                                        <a href="{{ route('front.instructor-details', ['id' => $teacher->id, 'slug' => str_replace(' ', '-', $teacher->name)]) }}">
                                                            <img src="{{ !empty($teacher->image) ? asset($teacher->image) : asset('frontend/man.png') }}" alt="instructor"/>
                                                        </a>
                                                        <div class="instructor-text">
                                                            <h6>{{ isset($teacher->first_name) ? $teacher->first_name . ' ' . $teacher->last_name : $teacher->user->name }}</h6>
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
                                    </div>
                                </div>
                            </div>

                            <div class="tab-content" id="pills-tabContent-routine">
                                <div class="tab-pane fade" id="routine" role="tabpanel" aria-labelledby="routine-tab">
                                    <div class="overview-area">
                                        <div class="course-routine-area mb-4">
                                            <div class="title py-3">
                                                <h4>Course Routine</h4>
                                            </div>
                                            <div class="course-routine-form">
                                                <table class="table table-borderless">
                                                    <thead>
                                                    <tr>
                                                        <th scope="col">SL</th>
                                                        <th scope="col">Topic</th>
                                                        <th scope="col">Date</th>
                                                        <th scope="col">Day</th>
                                                        <th scope="col">Time</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    @if (isset($exam->courseRoutines))
                                                        @php $i = 0; @endphp
                                                        @foreach ($exam->courseRoutines as $courseRoutine)
                                                            @if ($enrollStatus == 'true' && $courseRoutine->is_fack == 0)
                                                                <tr>
                                                                    <td style="width: 5%;">{{ ++$i }}</td>
                                                                    <td style="width: 45%;">{{ $courseRoutine->content_name }}</td>
                                                                    <td style="width: 20%;"><p>{{ \Carbon\Carbon::parse($courseRoutine->date_time)->format('j F, Y') }}</p></td>
                                                                    <td style="width: 15%;">{{ $courseRoutine->day }}</td>
                                                                    <td style="width: 15%;">{{ showTime($courseRoutine->date_time) }}</td>
                                                                </tr>
                                                            @elseif($enrollStatus == 'false' && $courseRoutine->is_fack == 1)
                                                                <tr>
                                                                    <td style="width: 5%;">{{ ++$i }}</td>
                                                                    <td style="width: 45%;">{{ $courseRoutine->content_name }}</td>
                                                                    <td style="width: 20%;">{{ \Carbon\Carbon::parse($courseRoutine->date_time)->format('j F, Y') }}</td>
                                                                    <td style="width: 15%;">{{ $courseRoutine->day }}</td>
                                                                    <td style="width: 15%;">{{ showTime($courseRoutine->date_time) }}</td>
                                                                </tr>
                                                            @endif
                                                        @endforeach
                                                    @endif
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="tab-content" id="pills-tabContent-review">
                                <div class="tab-pane fade" id="review" role="tabpanel" aria-labelledby="review-tab">
                                    <div class="overview-area">
                                        <div class="student-feedback-area mb-4">
                                            <div class="feedback-top d-flex justify-content-between py-5">
                                                <div class="title">
                                                    <h4>Student Feedback</h4>
                                                </div>
                                            </div>
                                            @foreach ($comments as $comment)
                                                <div class="feedback-area mb-3">
                                                    <div class="feedback-author-img d-flex">
                                                        <img src="{{ $comment->user && !empty($comment->user->profile_photo_path) ? asset($comment->user->profile_photo_path) : asset('frontend/man.png') }}" alt="Student" />
                                                        <div class="feedback-text">
                                                            <h6>{{ isset($comment->user_id) ? $comment->user->name : 'Guest' }}<span>&nbsp; {{ $comment->created_at->diffForHumans() }}</span></h6>
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
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="col-md-5 col-lg-4">
                        <div class="course-cart-area">
                            @php
                                $discountPrice = 0;
                                $parcent = 0;
                                if ($exam->has_discount_validity == 'true' && $exam->price > 0) {
                                    $discountPrice = $exam->price - $exam->discount_amount;
                                    $parcent = ($exam->discount_amount / $exam->price) * 100;
                                } else {
                                    $regular_price = $exam->price;
                                }
                            @endphp

                            <div class="course-price d-flex justify-content-between">
                                @if ($exam->has_discount_validity == 'true' && $exam->price > 0)
                                    <h4>৳ {{ number_format($discountPrice) }} <s>৳ {{ number_format($exam->price) }}</s></h4>
                                    <div class="discount">
                                        <p>{{ round($parcent) }}% off</p>
                                    </div>
                                @else
                                    <h4>৳ {{ number_format($regular_price ?? 0) }}</h4>
                                @endif
                            </div>

                            @php
                                $admissionLastDate = \Carbon\Carbon::parse($exam->admission_last_date);
                                $now = \Carbon\Carbon::now();
                                $daysLeft = $now->diffInDays($admissionLastDate);
                                $status = false;
                                if($admissionLastDate > $now){
                                    $status = true;
                                }

                            @endphp

                            <div class="left-days">
                                @if ($status == true)
                                    <p><i class="fa-regular fa-clock"></i> {{ $daysLeft }} day{{ $daysLeft > 1 ? 's' : '' }} left at this price!</p>
                                @else
                                    <p><i class="fa-regular fa-clock"></i> Admission deadline has passed.</p>
                                @endif
                            </div>

                            <div class="course-short-description">
                                <div class="description-column d-flex justify-content-between">
                                    <p><i class="fa-regular fa-clock"></i> Course Duration</p>
                                    <p>{{ $exam->duration_in_month ?? 0 }} Month</p>
                                </div>
                                <div class="description-column d-flex justify-content-between">
                                    <p><i class="fa-solid fa-people-group"></i> Student Enroll</p>
                                    <p>{{ $totalStudentEnrollments }}</p>
                                </div>
                                <div class="description-column d-flex justify-content-between">
                                    <p><i class="fa-solid fa-print"></i> Total Exam</p>
                                    <p>{{ $exam->total_exam ?? '' }}</p>
                                </div>
                            </div>
                            {{--<div class="coupon-code-area">
                                <div class="title">
                                    <h5>Apply Promo Code</h5>
                                </div>
                                <div class="promo-code-container">
                                    <input type="text" class="promo-input" placeholder="Apply Promo Code">
                                    <button class="promo-button">Apply</button>
                                </div>
                            </div>--}}
                            <div class="course-purchase-button">

                                @if ($exam->is_paid == 1)
                                    @if ($enrollStatus == 'false')
                                        @php
                                            $date = date('Y-m-d H:i');
                                        @endphp
                                        @if ($exam->admission_last_date > $date)
                                            <a href="{{ route('front.checkout', ['type' => 'course', 'slug' => $exam->slug, 'rc' => $_GET['rc'] ?? '']) }}"
                                               class="default-btn bg-default-color mt-4"><h6>কোর্সটি কিনুন </h6></a>
                                        @else
                                            <a class="default-btn bg-default-color btn-block mt-4"><h6>ভর্তির সময় শেষ</h6></a>
                                        @endif

                                        <ul class="social-link">
                                        </ul>
                                    @elseif($enrollStatus == 'pending')
                                        <a href="javascript:void(0)" class="default-btn bg-default-color mt-2"><h4>Your Order is Pending</h4></a>
                                    @endif
                                @else
                                    @if ($enrollStatus == 'false')
                                        @if (auth()->check())
                                            <a href="" data-course-id="{{ $exam->id }}"
                                               onclick="event.preventDefault(); document.getElementById('freeCourseOrderForm').submit()"
                                               class="default-btn bg-default-color order-free-course"> <h4>কোর্সটি করুন</h4> </a>
                                        @else
                                            <a href="{{ route('login') }}" data-course-id="{{ $exam->id }}"
                                               class="default-btn bg-default-color order-free-course"> <h4>কোর্সটি করুন</h4> </a>
                                        @endif
                                        <form
                                            action="{{ route('front.place-free-course-order', ['course_id' => $exam->id]) }}"
                                            method="post" id="freeCourseOrderForm">
                                            @csrf

                                            <input type="hidden" name="ordered_for" value="course">
                                        </form>
                                    @endif
                                @endif

                                {{--<h6>কোর্সটি কিনুন </h6>--}}
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
                            <br>
                            <div class="cart-contact">
                                <h5>কোর্সটি সম্পর্কে বিস্তারিত জানতে কল করুন </h5>
                                <h4 style="text-align: center"><i class="fa-solid fa-phone"></i> 09644433300</h4>
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

<script>
    document.addEventListener('DOMContentLoaded', function () {
        var videoModal = document.getElementById('videoModal');
        var videoFrame = document.getElementById('videoFrame');

        document.querySelectorAll('.open-video-modal').forEach(function (button) {
            button.addEventListener('click', function () {
                var videoId = this.getAttribute('data-video-id');
                if (videoId) {
                    videoFrame.src = 'https://www.youtube.com/embed/' + videoId + '?origin=https://plyr.io&iv_load_policy=3&modestbranding=1&playsinline=1&showinfo=0&rel=0&enablejsapi=1';
                }
            });
        });

        videoModal.addEventListener('hidden.bs.modal', function () {
            videoFrame.src = '';
        });
    });
</script>

@endpush
