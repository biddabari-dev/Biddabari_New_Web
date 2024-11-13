@extends('frontend.student-master')

@section('student-body')
    <section class="pb-5">
        <div class="row">
            <div class="col-md-12">
                <div class="section-title text-center mb-4">
                    <h2> ড্যাশবোর্ড </h2>
                    {{-- <hr class="w-25 mx-auto bg-danger" /> --}}
                </div>
            </div>
        </div>
        <div class="row g-4">
            <div class="col-6 col-lg-3">
                <div class="card card-body shadow-sm">
                    <a href="{{ route('front.student.my-courses') }}">
                    <div class="corce_exam_mobile_res">
                        <div>
                            <span>কোর্স সমূহ</span>
                            <h3>{{ $totalEnrolledCourse }}</h3>
                        </div>
                        <div class="corce_exam-icon">
                            <i class="fa fa-wallet"></i>
                        </div>
                    </div>
                    </a>
                </div>
            </div>
            <div class="col-6 col-lg-3">
                <div class="card card-body shadow-sm">
                    <a href="{{ route('front.student.my-exams') }}">
                    <div class="corce_exam_mobile_res">
                        <div>
                            <span>পরীক্ষা সমূহ</span>
                            <h3>{{ $totalEnrolledExams }}</h3>
                        </div>
                        <div class="corce_exam-icon">
                            <i class="fa fa-wallet"></i>
                        </div>
                    </div>
                    </a>
                </div>
            </div>
            <div class="col-6 col-lg-3">
                <div class="card card-body shadow-sm">
                    <a href="{{ route('front.student.my-orders') }}">
                    <div class="corce_exam_mobile_res">
                        <div>
                            <span>প্রোডাক্ট সমূহ</span>
                            <h3>{{ $totalPurchasedProducts }}</h3>
                        </div>
                        <div class="corce_exam-icon">
                            <i class="fa fa-wallet"></i>
                        </div>
                    </div>
                    </a>
                </div>
            </div>
            <div class="col-6 col-lg-3">
                <div class="card card-body shadow-sm">
                    <div class="corce_exam_mobile_res">
                        <div>
                            <span>পেন্ডিং অর্ডার</span>
                            <h3>{{ $totalPendingOrders }}</h3>
                        </div>
                        <div class="corce_exam-icon">
                            <i class="fa fa-wallet"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="mt-3 row">
            <div class="col-md-12">
                <div class="card  course_exam_mobile_res">
                    <div class="card-header">
                        <h3 class="text-center f-s-32">Enrolled Courses & Exams</h3>
                    </div>
                    <div class="card-body overflow-scroll">
                        <table class="table table-striped f-s-22">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Type</th>
                                    <th>Price</th>
                                    <th>Paid Amount</th>
                                    <th>Due</th>
                                    <th>Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($orders as $order)
                                    @if ($order->ordered_for != 'product')
                                        <tr>
                                            <td class="custome_td">
                                                {{ $order->ordered_for == 'course' ? $order->course->title : '' }}
                                                {{ $order->ordered_for == 'batch_exam' ? $order->batchExam->title : '' }}
                                            </td>
                                            <td>
                                                {{ $order->ordered_for == 'course' ? 'Course' : '' }}
                                                {{ $order->ordered_for == 'batch_exam' ? 'Exam' : '' }}
                                            </td>
                                            <td>{{ $order->total_amount }}</td>
                                            <td>{{ $order->paid_amount }}</td>
                                            <td>{{ $order->total_amount - $order->paid_amount }}</td>
                                            <td>{{ $order->status }}</td>
                                        </tr>
                                    @endif
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
