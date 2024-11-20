<div class="col-6 col-lg-3 mt-4">
    <div class="exam-package-area">
        <div class="package-exam-image">
            <a href="{{ route('front.course-details', ['slug' => $course->slug]) }}"><img
                    src="{{ static_asset($course->banner ? $course->banner : 'frontend/assets/images/exam-page/bankjob-banner.jpg') }}"
                    alt="{{ $course->alt_text }}" /></a>
        </div>
        <div class="package-exam-content mx-2 mx-lg-3">
            <div class="package-exam-title pt-3">
                <h2>
                    <a
                        href="{{ route('front.course-details', ['slug' => $course->slug]) }}">{{ Str::limit($course->title, 40) }}</a>
                </h2>
            </div>
            <div class="row button-and-price pb-3 pb-lg-4">
                <div class="col">
                    <div class="package-exam-rating">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="far fa-star"></i>
                    </div>
                    {{-- <div class="package-exam-price">
                        @php
                            $discountAmount = $course->discount_type == 1  ? $course->discount_amount : ($course->price * $course->discount_amount) / 100;
                            $discountPrice = $course->price - (isset($discountAmount) ? $discountAmount : 0);
                        @endphp
                        <div class="package-exam-total-price text-muted">
                            <s class="text-muted">৳ {{$course->price ?? 0 }}</s>
                        </div>
                        <div class="package-exam-discount-price">৳ {{ $discountPrice }}</div>
                    </div> --}}

                    @php
                        $currentDate = \Carbon\Carbon::now();
                        $discountStartDate = \Carbon\Carbon::parse($course->discount_start_date);
                        $discountEndDate = \Carbon\Carbon::parse($course->discount_end_date);
                        $isDiscountActive = $currentDate->between($discountStartDate, $discountEndDate);
                        $discountAmount =
                            $isDiscountActive && $course->discount_type == 1
                                ? $course->discount_amount
                                : ($isDiscountActive && $course->discount_type == 2
                                    ? ($course->price * $course->discount_amount) / 100
                                    : 0);
                        $discountPrice = $course->price - $discountAmount;
                    @endphp

                    <div class="package-exam-price">

                        @if ($isDiscountActive)
                            <div class="package-exam-total-price text-muted">
                                <s class="text-muted">৳ {{ $course->price ?? 0 }}</s>
                            </div>
                            <div class="package-exam-discount-price">৳ {{ $discountPrice }}</div>
                        @else
                            <div class="package-exam-discount-price">৳ {{ $course->price }}</div>
                        @endif
                    </div>

                </div>
                <div class="col text-end">
                    <div class="package-exam-button">
                        <div class="package-exam-details">
                            <a href="{{ route('front.course-details', ['slug' => $course->slug]) }}">View Details </a>
                        </div>
                        @if ($course->admission_last_date > date('Y-m-d H:i'))
                            <a href="{{ route('front.checkout', ['type' => 'course', 'slug' => $course->slug]) }}">
                                <div class="custom-btn btn-12">
                                    <span>ক্লিক করুন!</span><span>কোর্সটি কিনুন</span>
                                </div>
                            </a>
                        @else
                            <a href="#">
                                <div class="custom-btn btn-12">
                                    <span>সময় শেষ</span><span>ভর্তির সময় শেষ</span>
                                </div>
                            </a>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
