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
                        <h2>{{ $cartContents->title }}</h2>
                        <p>{!! Str::limit(strip_tags($cartContents->description), 222) !!}</p>
                            <h3>Price : <strong class="text-brand">{{ $cartContents->total_amount_after_discount ?? $cartContents->price }} Tk.</strong> </h3>
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
                        <img src="{{ static_asset($cartContents->image ? $cartContents->image : 'frontend/assets/images/exam-page/bankjob-banner.jpg') }}" alt="">
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
                        <form action="{{ route('front.common-order', ['model_id' => $cartContents->id]) }}"
                            method="post" enctype="multipart/form-data" >
                          @csrf
                          <h3>Check Out Summary</h3>
                          <input type="hidden" name="model_id" value="{{ $cartContents->id }}">
                          <input type="hidden" name="course_id" value="{{ $cartContents->id }}">
                          <input type="hidden" name="total_amount" value="{{ $cartContents->total_amount_after_discount ?? $cartContents->price }}">
                          <input type="hidden" name="used_coupon" value="0">
                          <input type="hidden" name="coupon_code" value="">
                          <input type="hidden" name="coupon_amount" value="">
                          <input type="hidden" name="ordered_for" value="product">
                          <input type="hidden" name="rc" value="{{ $_GET['rc'] ?? '' }}">

                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Full Name</label>
                                <input type="text" id="paidTo" onkeydown="return /[a-zA-Z ]/i.test(event.key)" required name="name" class="form-control"
                                                   placeholder="Enter your name" value="{{ auth()->check() ? auth()->user()->name : '' }}"/>
                                @if(!auth()->check())<div class="form-text text-danger">আপনার এই নামে একাউন্ট তৈরি হবে</div>@endif
                                @error('paid_to')<span class="text-danger"></span>@enderror
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputNumber1" class="form-label">Mobile No.</label>
                                <input type="text" pattern="^01[3-9]\d{8}$" title="Please enter a valid mobile number"  onkeypress="return isNumberKey(event)" id="phone" name="mobile" required class="form-control"
                                                   placeholder="Enter your mobile no" value="{{ auth()->check() ? auth()->user()->mobile : '' }}"/>
                                @if(!auth()->check()) <div class="form-text text-danger">আপনার এই নম্বরে একাউন্ট তৈরি হবে</div> @endif
                                @error('mobile')<span class="text-danger"></span>@enderror
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputNumber2" class="form-label">Confirm Mobile No.</label>
                                <input type="text" format="" onkeypress="return isNumberKey(event)" id="confirmPhone" name="confirm_mobile" required class="form-control"
                                                   placeholder="Enter your phone no" value="{{ auth()->check() ? auth()->user()->mobile : '' }}"/>
                            </div>
                            <div class="mb-3">
                                <label for="paidTo" class="form-label">Full Address</label>
                                <textarea type="text" required name="shipping_address" class="form-control" cols="30" rows="3"
                                       placeholder="জেলা,থানা ও সম্পূর্ণ ঠিকানা দিন। গ্রাম/শহর, বাসা নং (পাশে কোন বাজার থাকলে নাম লিখুন)"></textarea>
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
</main>
@endsection
@push('style')

@endpush

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
