
@foreach ($courses as $course)
    <div class="col-md-6 col-lg-3 mb-4">
        <div class="exam-package-area">
            <div class="package-exam-image">
                <a href="{{ route('front.course-details', ['slug' => $course->slug]) }}"><img src="{{ asset($course->banner ? $course->banner : 'frontend/assets/images/exam-page/bankjob-banner.jpg') }}" alt="{{ $course->alt_text }}"/></a>
            </div>
            <div class="package-exam-content ms-3">
                <div class="package-exam-title pt-3">
                    <h2 class="fw-bold"><a href="{{ route('front.course-details', ['slug' => $course->slug]) }}">{{ Str::limit($course->title, 40) }}</a></h2>
                </div>
                <div class="row button-and-price pb-2">
                    <div class="col">
                        <div class="package-exam-rating">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="far fa-star"></i>
                        </div>
                        <div class="package-exam-price">
                            @php
                                $discountAmount = $course->discount_type == 1  ? $course->discount_amount : ($course->price * $course->discount_amount) / 100;
                                $discountPrice = $course->price - (isset($discountAmount) ? $discountAmount : 0);
                            @endphp
                            <div class="package-exam-total-price text-muted">
                                <s class="text-muted">৳ {{$course->price ?? 0 }}</s>
                            </div>
                            <div class="package-exam-discount-price">৳ {{ $discountPrice }}</div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="package-exam-button">
                            <button class="package-exam-details"><a
                                    href="{{ route('front.course-details', ['slug' => $course->slug]) }}">View Details </a></button><br>
                            @if ($course->admission_last_date > date('Y-m-d H:i'))
                            <a href="{{ route('front.checkout', ['type' => 'course', 'slug' => $course->slug]) }}"><button class="custom-btn btn-12">
                                <span>ক্লিক করুন!</span><span>কোর্সটি কিনুন</span>
                            </button></a>
                            @else
                            <button class="custom-btn btn-12">
                                <span>সময় শেষ</span><span>ভর্তির সময় শেষ</span>
                            </button>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endforeach