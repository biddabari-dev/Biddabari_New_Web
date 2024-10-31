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
                    <h2 class="fw-bold">{{ $courseCategory->name }} <span>কোর্স</span>
                    </h2>
                    <p class="text-muted">
                        প্রতিযোগিতামূলক এই জব-মার্কেটে নিজের ক্যারিয়ারকে নিয়ে যান অনন্য
                        চ্চতায়।
                    </p>
                </div>
            </div>

            <div class="all-courses-area">
                <div class="row"  id="shorting-data">
                    @if(isset($courseCategory->courses))
                    @foreach ($courseCategory->courses as $course)
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
