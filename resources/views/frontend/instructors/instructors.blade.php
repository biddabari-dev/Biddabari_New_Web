@extends('frontend.master')

@section('body')

<main>

    <section id="Instructor" class="background-res-about py-5"
        style="background-image: url('{{ asset('frontend') }}/assets/images/free-service/free-service-bg.jpg')">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="title-area text-center">
                        <h1 class="fw-bold">Meet our top
                            <span class="">Instructor</span>
                        </h1>
                        <br>
                    </div>
                </div>
            </div>
            {{-- <div class="teachers-category">
                <ul class="nav nav-pills mb-4" id="pills-tab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <a class="nav-link active" id="all-mentors-tab" data-bs-toggle="pill"
                            href="#all-mentors" role="tab" aria-controls="all-mentors" aria-selected="true">All
                            Mentors</a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a class="nav-link" id="for-bcs-tab" data-bs-toggle="pill" href="#for-bcs" role="tab"
                            aria-controls="for-bcs" aria-selected="false">For BCS</a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a class="nav-link" id="for-primary-tab" data-bs-toggle="pill" href="#for-primary"
                            role="tab" aria-controls="for-primary" aria-selected="false">For Primary</a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a class="nav-link" id="for-bank-tab" data-bs-toggle="pill" href="#for-bank" role="tab"
                            aria-controls="for-bank" aria-selected="false">For Bank</a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a class="nav-link" id="for-ict-tab" data-bs-toggle="pill" href="#for-ict" role="tab"
                            aria-controls="for-ict" aria-selected="false">For ICT</a>
                    </li>
                </ul>
            </div> --}}
            <div class="tab-content" id="pills-tabContent">
                <div class="tab-pane fade show active" id="all-mentors" role="tabpanel"
                    aria-labelledby="all-mentors-tab">
                    <div class="container">
                        <div class="instructor-card-area">
                            <div class="row">
                                @forelse($teachers as $teacher)
                                <div class="col-md-4 col-lg-3 pb-4">
                                    <div class="instructor-card">
                                        <div class="instructor-card-img">
                                            <a href="{{ route('front.instructor-details', ['id' => $teacher->id, 'slug' => str_replace(' ', '-', $teacher->name)]) }}"><img src="{{ static_asset($teacher->user->user_photo_path ? $teacher->user->user_photo_path : ($teacher->image ? $teacher->image :'https://png.pngtree.com/png-vector/20190710/ourmid/pngtree-user-vector-avatar-png-image_1541962.jpg') ) }}" alt="" srcset="" style="max-height: 338px"></a>
                                        </div>
                                        <div class="instructor-content">
                                            <h3><a class="text-black" href="{{ route('front.instructor-details', ['id' => $teacher->id, 'slug' => str_replace(' ', '-', $teacher->name)]) }}">{{ $teacher->user->name ?? '' }}</a></h3>
                                            <div class="instructor-review">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="far fa-star"></i>
                                            </div>
                                            <p>{{ $teacher->subject}}</p>
                                        </div>
                                        <div class="instructor-view-button">
                                            <a href="{{ route('front.instructor-details', ['id' => $teacher->id, 'slug' => str_replace(' ', '-', $teacher->name)]) }}" type="button" class="btn btn_warning">View Details</a>
                                        </div>
                                    </div>
                                </div>
                                @empty
                                <div class="col-md-12">
                                    <div class="card card-body">
                                        <p class="text-center fw-bolder">No Instructor Found</p>
                                    </div>
                                </div>
                                @endforelse
                                <div class="col-lg-12 col-md-12 text-center">
                                    <div class="pagination-area">

                                        {{ $teachers->links() }}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- <div class="tab-pane" id="for-bcs" role="tabpanel" aria-labelledby="all-mentors-tab">
                    <div class="container">
                        <div class="instructor-card-area">
                            <div class="row">
                                <div class="col-md-4 col-lg-3 pb-4">
                                    <div class="instructor-card">
                                        <div class="instructor-card-img">
                                            <img src="{{ asset('frontend') }}/assets/images/instructor/mukulsir.jpg" alt="" srcset="">
                                        </div>
                                        <div class="instructor-content">
                                            <h3>{{ $teacher->user->name ?? '' }}</h3>
                                            <div class="instructor-review">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="far fa-star"></i>
                                            </div>
                                            <p></p>
                                        </div>
                                        <div class="instructor-view-button">
                                            <a href="" type="button" class="btn btn_warning">View Details</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane" id="for-primary" role="tabpanel"
                    aria-labelledby="all-mentors-tab">
                    <div class="container">
                        <div class="instructor-card-area">
                            <div class="row">
                                <div class="col-md-4 col-lg-3 pb-4">
                                    <div class="instructor-card">
                                        <div class="instructor-card-img">
                                            <img src="{{ asset('frontend') }}/assets/images/instructor/mukulsir.jpg" alt="" srcset="">
                                        </div>
                                        <div class="instructor-content">
                                            <h3>মাইদুল ইসলাম প্রধান(মুকুল)</h3>
                                            <div class="instructor-review">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="far fa-star"></i>
                                            </div>
                                            <p>5 years of experience teaching Math. Currently working at Weston
                                                school.</p>
                                        </div>
                                        <div class="instructor-view-button">
                                            <a href="" type="button" class="btn btn_warning">View Details</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane" id="for-bank" role="tabpanel" aria-labelledby="all-mentors-tab">
                    <div class="container">
                        <div class="instructor-card-area">
                            <div class="row">
                                <div class="col-md-4 col-lg-3 pb-4">
                                    <div class="instructor-card">
                                        <div class="instructor-card-img">
                                            <img src="{{ asset('frontend') }}/assets/images/instructor/mukulsir.jpg" alt="" srcset="">
                                        </div>
                                        <div class="instructor-content">
                                            <h3>মাইদুল ইসলাম প্রধান(মুকুল)</h3>
                                            <div class="instructor-review">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="far fa-star"></i>
                                            </div>
                                            <p>5 years of experience teaching Math. Currently working at Weston
                                                school.</p>
                                        </div>
                                        <div class="instructor-view-button">
                                            <a href="" type="button" class="btn btn_warning">View Details</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 col-lg-3 pb-4">
                                    <div class="instructor-card">
                                        <div class="instructor-card-img">
                                            <img src="{{ asset('frontend') }}/assets/images/instructor/mukulsir.jpg" alt="" srcset="">
                                        </div>
                                        <div class="instructor-content">
                                            <h3>মাইদুল ইসলাম প্রধান(মুকুল)</h3>
                                            <div class="instructor-review">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="far fa-star"></i>
                                            </div>
                                            <p>5 years of experience teaching Math. Currently working at Weston
                                                school.</p>
                                        </div>
                                        <div class="instructor-view-button">
                                            <a href="" type="button" class="btn btn_warning">View Details</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane" id="for-ict" role="tabpanel" aria-labelledby="all-mentors-tab">
                    <div class="container">
                        <div class="instructor-card-area">
                            <div class="row">
                                <div class="col-md-4 col-lg-3 pb-4">
                                    <div class="instructor-card">
                                        <div class="instructor-card-img">
                                            <img src="{{ asset('frontend') }}/assets/images/instructor/mukulsir.jpg" alt="" srcset="">
                                        </div>
                                        <div class="instructor-content">
                                            <h3>মাইদুল ইসলাম প্রধান(মুকুল)</h3>
                                            <div class="instructor-review">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="far fa-star"></i>
                                            </div>
                                            <p>5 years of experience teaching Math. Currently working at Weston
                                                school.</p>
                                        </div>
                                        <div class="instructor-view-button">
                                            <a href="" type="button" class="btn btn_warning">View Details</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> --}}
            </div>
        </div>
    </section>

</main>

@endsection
