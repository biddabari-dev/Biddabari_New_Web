@extends('frontend.student-master')

@section('student-body')
    <section class="pb-3">
        <div class="row">
            <div class="section-title text-center mb-2">
                <h2> আমার কোর্স সমূহ</h2>
                <hr class="w-25 mx-auto bg-danger"/>
            </div>
        </div>
        <div class="row">
            @if(!empty($courseOrders))
                @forelse($courseOrders as $courseOrder)
                    <div class="col-lg-3 col-md-6">
                        <div class="courses-item position-relative">
                                <a href="{{ route('front.student.course-contents', ['course_id' => $courseOrder->course->id, 'slug' => $courseOrder->course->slug]) }}" @if($courseOrder->status == 'pending') onclick="event.preventDefault(); toastr.error('Your request is pending. Please wait till your request is approved.')" @endif>
                                    <img src="{{ static_asset($courseOrder->course->banner) }}" alt="Courses" class="img-fluid" style="height: 230px; width:100%;" />
                                </a>
                                <div class="content">
                                    <h4><a class="text-black" href="{{ route('front.student.course-contents', ['course_id' => $courseOrder->course->id, 'slug' => $courseOrder->course->slug]) }}" @if($courseOrder->status == 'pending') onclick="event.preventDefault(); toastr.error('Your request is pending. Please wait till your request is approved.')" @endif>{{ $courseOrder->course->title }}</a></h4>
                                </div>

                            @if($courseOrder->status == 'pending')
                                <div class="position-absolute top-0" style="right: 8px">
                                    <span class="text-white badge bg-primary">Pending</span>
                                </div>
                            @endif
                        </div>
                    </div>
                @empty
                    <div class="col-lg-4 col-md-6">
                        <div class="courses-item">
                            <p class="text-center">No Courses Enrolled Yet</p>
                        </div>
                    </div>
                @endforelse
            @endif
        </div>
    </section>
@endsection
