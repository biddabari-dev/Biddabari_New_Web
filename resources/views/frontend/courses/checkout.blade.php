@extends('frontend.master')
@section('robots', 'noindex')
@section('title')
Biddabari - The First Job Study Online Platform in Bangladesh
@endsection

@section('body')
<main>

    <section id="Checkout" class="bg-light py-5">
        <div class="container">
            <div class="row g-4 justify-content-between">
                <div class="col-lg-6">
                    <div class="checkout-title">
                        <h2>{{ $course->title }}</h2>
                        <p>{!! Str::limit(strip_tags($course->description), 222) !!}</p>
                            <h3>{{ $reqFor == 'course' ? 'Course' : 'Batch Exam' }} Price : <strong class="text-brand">{{ $course->total_amount_after_discount ?? $course->price }} Tk.</strong> </h3>
                        <div class="checkout-exam-duration">
                            <p>Duration @if (now()->diffInDays($course->admission_last_date, false) > 0)
                                {{ now()->diffInDays($course->admission_last_date) }} days remaining
                            @else
                                The course has ended
                            @endif</p>
                        </div>
                        <div class="customer-book-rating">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="far fa-star"></i>
                            <span>4.8 <span>(5 Customer Review)</span></span>
                        </div>
                    </div>
                    <div>
                        <img src="{{ static_asset($course->banner ? $course->banner : 'frontend/assets/images/exam-page/bankjob-banner.jpg') }}" alt="">
                    </div>
                    {{-- সুবিধামত ফি পরিশোধ করুন --}}
                    {{-- <div class="checkout-details">
                        <h4>সুবিধামত ফি পরিশোধ করুন</h4>
                        <p>লাইভ ক্লাস, পরীক্ষা– সব নিয়ে বছরব্যাপী পড়াশোনার আয়োজন</p>

                        <!-- First card -->
                        <div class="course-card">
                            <div class="form-check">
                                <input type="radio" id="flexRadioDefault1" name="courseSelect" class="form-check-input">
                            </div>
                            <div class="course-info d-flex justify-content-between" onclick="document.getElementById('flexRadioDefault1').click()">
                                <div>
                                    <div class="course-title">সম্পূর্ণ বছর + টেস্ট প্রেপ কোর্স + শেষ মুহূর্তের
                                        প্রস্তুতি কোর্স</div>
                                    <div class="course-details">জানুয়ারি ২০২৪ থেকে SSC 2025 পরীক্ষা পর্যন্ত
                                        [SSC
                                        2025 টেস্ট প্রেপ কোর্স + SSC 2025 পরীক্ষার শেষ মুহূর্তের প্রস্তুতি
                                        কোর্স]
                                    </div>
                                </div>
                                <div class="text-end">
                                    <div class="d-flex align-items-center">
                                        <div class="price">$14.00 </div>
                                        <div class="old-price">$26.00</div>
                                    </div>
                                    <div class="discount">
                                        <div class="discount-number">56% off</div>
                                    </div>
                                </div>
                            </div>

                        </div>

                        <!-- Second card -->
                        <div class="course-card d-flex">
                            <div class="form-check">
                                <input type="radio" id="flexRadioDefault2" name="courseSelect" class="form-check-input" checked>
                            </div>
                            <div class="course-info d-flex justify-content-between" onclick="document.getElementById('flexRadioDefault2').click()">
                                <div>
                                    <div class="course-title">সম্পূর্ণ বছর + টেস্ট প্রেপ কোর্স + শেষ মুহূর্তের
                                        প্রস্তুতি কোর্স</div>
                                    <div class="course-details">জানুয়ারি ২০২৪ থেকে SSC 2025 পরীক্ষা পর্যন্ত
                                        [SSC
                                        2025 টেস্ট প্রেপ কোর্স + SSC 2025 পরীক্ষার শেষ মুহূর্তের প্রস্তুতি
                                        কোর্স]
                                    </div>
                                </div>
                                <div class="text-end">
                                    <div class="d-flex align-items-center">
                                        <div class="price">$14.00 </div>
                                        <div class="old-price">$26.00</div>
                                    </div>
                                    <div class="discount">
                                        <div class="discount-number">56% off</div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div> --}}
                </div>

                <div class="col-lg-5">
                    <div class="get-in-touch-form">
                        <form action="{{ route('front.common-order', ['model_id' => $course->id]) }}"
                            method="post" enctype="multipart/form-data" >
                          @csrf

                          <input type="hidden" name="model_id" value="{{ $course->id }}">
                          <input type="hidden" name="course_id" value="{{ $course->id }}">
                          <input type="hidden" name="total_amount" value="{{ $course->total_amount_after_discount ?? $course->price }}">
                          <input type="hidden" name="used_coupon" value="0">
                          <input type="hidden" name="coupon_code" value="">
                          <input type="hidden" name="coupon_amount" value="">
                          <input type="hidden" name="ordered_for" value="{{ $reqFor ?? 'course' }}">
                          @if(!empty($batch_exam_subscription_id))
                          <input type="hidden" name="batch_exam_subscription_id" value="{{ $batch_exam_subscription_id ?? '' }}">
                          @endif
                          <input type="hidden" name="rc" value="{{ $_GET['rc'] ?? '' }}">
                            <h3>Check Out Summary</h3>

                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Full Name</label>
                                <input type="text" id="paidTo" onkeydown="return /[a-zA-Z ]/i.test(event.key)" required name="name" class="form-control"
                                                   placeholder="Enter your name" value="{{ auth()->check() ? auth()->user()->name : '' }}"/>
                                @if(!auth()->check())<div class="form-text text-danger">আপনার এই নাম এ কোর্সটি রেজিস্টার করা হবে</div>@endif
                                @error('paid_to')<span class="text-danger"></span>@enderror
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputNumber1" class="form-label">Mobile No.</label>
                                <input type="text" pattern="^01[3-9]\d{8}$" title="Please enter a valid mobile number"  onkeypress="return isNumberKey(event)" id="phone" name="mobile" required class="form-control"
                                                   placeholder="Enter your mobile no" value="{{ auth()->check() ? auth()->user()->mobile : '' }}"/>
                                @if(!auth()->check()) <div class="form-text text-danger">আপনার এই নাম এ কোর্সটি রেজিস্টার করা হবে</div> @endif
                                @error('mobile')<span class="text-danger"></span>@enderror
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputNumber2" class="form-label">Confirm Mobile No.</label>
                                <input type="text" format="" onkeypress="return isNumberKey(event)" id="confirmPhone" name="confirm_mobile" required class="form-control"
                                                   placeholder="Enter your phone no" value="{{ auth()->check() ? auth()->user()->mobile : '' }}"/>
                                                   @if(Session::has('error'))
                                                   <span class="text-danger f-s-18 float-start">{{ Session::get('error') }}</span>
                                                    @endif
                            </div>

                            <div class="border rounded px-4 py-2 mb-3">
                                <div class="form-check d-flex justify-content-between align-items-center">
                                    <input class="form-check-input" type="radio" value="bkash" name="payment_method"
                                        id="flexRadioDefault3" checked>
                                    <img src="{{ asset('frontend') }}/assets/images/checkout/bkash.png" for="flexRadioDefault3" alt="">
                                </div>
                            </div>
                            <div class="border rounded px-4 py-2 mb-3">
                                <div class="form-check d-flex justify-content-between align-items-center">
                                    <input class="form-check-input" type="radio" value="ssl" name="payment_method"
                                    id="flexRadioDefault4">
                                    <img src="{{ asset('frontend') }}/assets/images/checkout/bank-icons.jpg" for="flexRadioDefault4" alt="">
                                </div>
                            </div>

                            <button  type="submit" class="btn btn-checkout d-block mt-5 w-100">Submit</button>
                        </form>
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

@section('js')
<script>
    $(document).on('click', '#checkBtn', function () {
        var couponCode = $('#couponCode').val();
        var courseId = $('input[name="course_id"]').val();
        var currentTotal = $('input[name="total_amount"]').val();
        $.ajax({
            url: "{{ route('front.check-coupon') }}",
            method: "GET",
            data: { coupon_code: couponCode, course_id: courseId, current_total: currentTotal },
            success: function (data) {
                console.log(data);
                if (data.status == 'true') {
                    toastr.success(data.message);
                    // $('input[name="total_amount"]').val(data.currentTotal);
                    // $('input[name="used_coupon"]').val(1);
                    $('input[name="coupon_code"]').val(couponCode);
                    $('input[name="coupon_amount"]').val(data.coupon.discount_amount);
                    $('#finalPrice').text(data.currentTotal);
                    $('#couponAmount').text(data.coupon.discount_amount);
                    $('#couponLi').removeClass('d-none');
                } else if (data.status == 'false') {
                    toastr.error(data.message);
                }
            }
        })
    })
</script>
<script>

</script>

<script>
    function isNumberKey(evt) {
        var charCode = (evt.which) ? evt.which : evt.keyCode;
        if (charCode > 31 && (charCode < 48 || charCode > 57))
            return false;
        return true;
        }
</script>


<script>
    window.onload = () => {
        const myInput = document.getElementById('confirmPhone');
        myInput.onpaste = e => e.preventDefault();
    }
</script>
@endsection
