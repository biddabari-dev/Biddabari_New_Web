@extends('frontend.master')
@section('meta-url'){{ request()->url() }}@endsection
@section('title')
Biddabari - All Course
@endsection

@section('body')

<main>

    <section id="Home_Our_courses" class="background-res-free-banner py-5"
        style="background-image: url('{{ asset('frontend') }}/assets/images/our-courses/our-courses.png')" ;>
        <div class="container">
            <div class="row">
                <div class="title-area text-center">
                    <h2 class="fw-bold">{{ $result->name }} <span>কোর্স</span>
                    </h2>
                    <p class="text-muted">
                        প্রতিযোগিতামূলক এই জব-মার্কেটে নিজের ক্যারিয়ারকে নিয়ে যান অনন্য
                        চ্চতায়।
                    </p>
                </div>
            </div>
            @if(!empty($result->courseCategories))
            <div class="home-course-category-area">
                <div class="row g-4">
                    @foreach ($result->courseCategories as $courseCategory)
                    <div class="col-md-6 col-lg-3">
                        @if ($courseCategory->id == 157)
                        <a href="{{ route('front.free-courses') }}">
                        <div class="my-course-category">
                            <div class="my-course-category-icon">
                                <i class="fa-solid fa-graduation-cap"></i>
                            </div>
                            <div class="my-course-category-content">
                                <h3>{{ $courseCategory->name }} </h3>
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
                            </div>
                        </div>
                        </a>
                        @endif
                    </div>
                    @endforeach
                </div>
            </div>
            @endif
            <div class="all-courses-area">
                <div class="row"  id="shorting-data">
                    @if(isset($result->courses))
                    @foreach ($result->courses as $course)
                            @include('frontend.courses.include-courses-course', ['course' => $course])
                        @endforeach
                    @endif
                </div>
            </div>
        </div>
    </section>

</main>
@endsection
@push('script')

@endpush
