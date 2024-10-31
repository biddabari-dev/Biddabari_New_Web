@extends('frontend.master')
@section('meta-url'){{ request()->url() }}@endsection
@section('title')
Biddabari - All Course
@endsection

@section('body')

<main>
    <section id="Home_add">
        <div class="home-1st-add-image">
            <img src="{{ asset('frontend') }}/assets/images/home-page/home-page-bn.webp" alt="Home 1st Add Banner"
                srcset="">
        </div>
    </section>
    {{-- <section id="Home_add">
        <div class="home-1st-add-image" >
            <img src="{{ asset('frontend') }}/assets/images/our-courses/banner-4.jpeg" style="height: 500px !important;" alt="Home 1st Add Banner"
                srcset="">
        </div>
    </section> --}}

    <section id="Free-service-banner" class="background-res-free-banner background-ats py-5"
        style="background-image: url('{{ asset('frontend') }}/assets/images/home-page/home-page-main-banner.jpg')">
        <div class="container">
            <div class="free-course-banner">
                <div class="free-course-banner-image">
                    <a href=""><img src="{{ asset('frontend') }}/assets/images/our-courses/banner-4.jpeg" alt="Image 1" style="border-radius: 20px;" ></a>
                </div>
                <div class="free-course-banner-image">
                    <a href=""><img src="{{ asset('frontend') }}/assets/images/our-courses/banner-4.jpeg" alt="Image 1" style="border-radius: 20px;"></a>
                </div>
                <div class="free-course-banner-image">
                    <a href=""><img src="{{ asset('frontend') }}/assets/images/our-courses/banner-4.jpeg" alt="Image 1" style="border-radius: 20px;"></a>
                </div>

            </div>
        </div>
    </section>

    <section id="Home_Our_courses" class="background-res-free-banner py-5"
        style="background-image: url('{{ asset('frontend') }}/assets/images/our-courses/our-courses.png')" >
        <div class="container">
            <div class="row">
                <div class="title-area text-center">
                    <h2 class="fw-bold">আমাদের <span>কোর্স</span>
                    </h2>
                    <p class="text-muted">
                        প্রতিযোগিতামূলক এই জব-মার্কেটে নিজের ক্যারিয়ারকে নিয়ে যান অনন্য
                        চ্চতায়।
                    </p>
                </div>
            </div>

            <div class="home-course-category-area">
                <div class="row g-4">
                    @foreach ($courseCategories as $courseCategory)
                    <div class="col-md-6 col-lg-3">
                        @if ($courseCategory->id == 157)
                        <a href="{{ route('front.free-courses') }}">
                        <div class="my-course-category">
                            <div class="my-course-category-icon">
                                <i class="fa-solid fa-graduation-cap"></i>
                            </div>
                            <div class="my-course-category-content">
                                <h3>{{ $courseCategory->name }} </h3>
                                <p>প্রতিযোগিতামূলক এই জব-মার্কেটে নিজের ক্যারিয়ারকে</p>
                            </div>
                        </div>
                        </a>
                        @else
                        <a href="{{ route('front.category-courses', ['slug' => $courseCategory->slug]) }}">
                        <div class="my-course-category">
                            <div class="my-course-category-icon">
                                <i class="fa-solid fa-graduation-cap"></i>
                            </div>
                            <div class="my-course-category-content">
                                <h3>{{ $courseCategory->name }} </h3>
                                <p>প্রতিযোগিতামূলক এই জব-মার্কেটে নিজের ক্যারিয়ারকে</p>
                            </div>
                        </div>
                        </a>
                        @endif
                    </div>
                    @endforeach
                </div>
            </div>

            <div class="all-courses-area">
                <div class="row"  id="shorting-data">
                    @if(isset($courses))
                        @foreach ($courses as $course)
                            @include('frontend.courses.include-courses-course', ['course' => $course])
                        @endforeach
                    @endif
                </div>
                <div class="auto-load text-center" style="display: none;">
                    <svg version="1.1" id="L9" xmlns="http://www.w3.org/2000/svg"
                        xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                        height="60" viewBox="0 0 100 100" enable-background="new 0 0 0 0"
                        xml:space="preserve">
                        <path fill="#000"
                            d="M73,50c0-12.7-10.3-23-23-23S27,37.3,27,50 M30.9,50c0-10.5,8.5-19.1,19.1-19.1S69.1,39.5,69.1,50">
                            <animateTransform attributeName="transform" attributeType="XML" type="rotate"
                                dur="1s" from="0 50 50" to="360 50 50" repeatCount="indefinite" />
                        </path>
                    </svg>
                </div>
                <div class="see-more-button text-center mt-3">
                    <button id="load-more" type="button" class="btn btn_warning">আরো দেখুন</button>
                </div>
            </div>
        </div>
    </section>

</main>
@endsection
@push('script')
<script>
    var page = 1;
    $("#load-more").on('click',function(){
        page++;
        infinteLoadMore(page);
    })
    /*------------------------------------------
    call infinteLoadMore()
    --------------------------------------------*/
    function infinteLoadMore(page) {
        $.ajax({
                url:"?page=" + page,
                datatype: "html",
                type: "get",
                beforeSend: function() {
                    $('.auto-load').show();
                }
            })
            .done(function(response) {
                if (response.html == '') {
                    $('.auto-load').html("We don't have more course");
                    return;
                }
                $('.auto-load').hide();
                $("#shorting-data").append(response.html).show(100);
            })
            .fail(function(jqXHR, ajaxOptions, thrownError) {
                console.log('Server error occured');
            });
    }
</script>
@endpush
