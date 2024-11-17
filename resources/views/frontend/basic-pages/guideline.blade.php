@extends('frontend.master')
@section('title'){{ 'Biddabari | Guidline'}}@endsection
@section('body')
    {{\Illuminate\Support\Facades\Session::put('course_redirect_url',\Illuminate\Support\Facades\Request::url())}}
    <main>
        <section class="background-res background-ats py-5"
            style="background-image: url('{{ asset('frontend') }}/assets/images/blog/blog-bg-1.png')">

            <section id="Guideline">
                <div class="container py-5">
                    <div class="row">
                        <div class="col-lg-12">

                            <div class="title-area text-center">
                                <h2 class="fw-bold">গাইড <span>লাইন </span></h2>
                               <br>
                            </div>
                        </div>
                    </div>
                    <div class="guideline-card-area">
                        <div class="row">
                            <div class="col-md-6 col-lg-4 mb-4">
                                <div class="guideline-area">
                                    <div class="guideline-video">
                                        <div class="ratio ratio-16x9">
                                            <iframe
                                                src="https://www.youtube.com/embed/NjqjVdVJX1g?si=FGIm8sipLMLOwaQX"
                                                title="YouTube video" allowfullscreen></iframe>
                                        </div>
                                    </div>
                                    <div class="guideline-content">
                                        <h6>Most Recent</h6>
                                        <h3>How To Apply In BCS Exam</h3>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-4 mb-4">
                                <div class="guideline-area">
                                    <div class="guideline-video">
                                        <div class="ratio ratio-16x9">
                                            <iframe
                                                src="https://www.youtube.com/embed/NjqjVdVJX1g?si=FGIm8sipLMLOwaQX"
                                                title="YouTube video" allowfullscreen></iframe>
                                        </div>
                                    </div>
                                    <div class="guideline-content">
                                        <h6>Most Recent</h6>
                                        <h3>How To Apply In BCS Exam</h3>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-4 mb-4">
                                <div class="guideline-area">
                                    <div class="guideline-video">
                                        <div class="ratio ratio-16x9">
                                            <iframe
                                                src="https://www.youtube.com/embed/NjqjVdVJX1g?si=FGIm8sipLMLOwaQX"
                                                title="YouTube video" allowfullscreen></iframe>
                                        </div>
                                    </div>
                                    <div class="guideline-content">
                                        <h6>Most Recent</h6>
                                        <h3>How To Apply In BCS Exam</h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section id="Guideline_Download">
                <div class="container">
                    <div class="guideline-download-area mb-5">
                        <div class="row">
                            <div class="col-lg-12">
                                <h4>Download Pdf</h4>
                            </div>
                            <div class="col-lg-12">
                                <div class="download-area align-items-center justify-content-between my-3">
                                    <div class="download-icon-img">
                                        <div>
                                            <i class="fa-regular fa-file-pdf"></i>
                                        </div>
                                        <p>How to apply in BCS Exam <span>(pdf)</span></p>
                                    </div>
                                    <div class="download-view-button">
                                        <a href="" type="button" class="btn btn_warning">
                                            <span><i class="fa-solid fa-download"></i></span> Download Pdf</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </section>

    </main>

@endsection
