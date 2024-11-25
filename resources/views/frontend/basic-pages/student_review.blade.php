@extends('frontend.master')

@section('title')
    Biddabari -  শিক্ষার্থীরা যা বলে
@endsection

@section('body')
    <div class="courses-area-two section-bg py-5 bg-white"
        style="background-image: url('{{ asset('frontend') }}/assets/images/free-service/free-service-bg.jpg')">
        <div class="container">
            <div class="col-12 mb-4">
                <div class="section-title text-center">
                    <h2 class="fw-bold">  শিক্ষার্থীরা  <span class="text-brand">যা বলে...</span> </h2>
                </div>
            </div>
            <div id="Student_review">
                <div class="student-review-area pb-4">
                    <div class="student-review-slider slider">
                        @foreach($student_opinions as $student_opinion)
                        @if($student_opinion->show_type == 'image')
                        <div class="student-review mb-4">
                            <div class="student-review-content">
                                @if(!empty($student_opinion->image))
                                    <div class="student-image">
                                        <img src="{{ static_asset($student_opinion->image ?? 'frontend/assets/images/testimonials/s-1.jpg') }}" alt="" class="">
                                    </div>
                                @endif
                                <div class="student-name mt-2">
                                    <h4>{{ $student_opinion->name }}</h4>
                                </div>
                                {{-- <div class="review">
                                    <img src="{{ static_asset($student_opinion->comment) }}"
                                        alt="" srcset="" style="width: 100%">
                                </div> --}}
                                <div class="review">
                                    <img src="https://biddabari.s3.ap-southeast-1.amazonaws.com/backend/assets/uploaded-files/student-opinion/opinions/-1732109133-473166410852112.jpg"
                                        alt="" srcset="" style="width: 100%">
                                </div>
                            </div>
                        </div>
                        @endif
                        @endforeach
                    </div>
                </div>
            </div>

            <div class="tab-content mt-3">
                <div class="tab-pane fade show active px-1" id="freeClass">
                    <div class="border-0 rounded-0">
                        <div class="row">
                        @foreach($student_opinions as $student_opinion)
                            @if($student_opinion->show_type == 'video')
                            @php
                                $url = $student_opinion->video_link ?? '';
                                $videoId = '';
                                if ($url) {
                                    $urlComponents = parse_url($url);
                                    if (isset($urlComponents['query'])) {
                                        parse_str($urlComponents['query'], $query);
                                        $videoId = $query['v'] ?? '';
                                    }
                                }
                            @endphp
                            <div class="col-md-6 col-lg-4 p-2">
                                <div class="card video-container">
                                    <div class="video-foreground">
                                        <div class="content p-2">
                                            <h5 class="mt-2">{{ $student_opinion->name }}</h5>
                                        </div>
                                        <div class="plyr__video-embed" id="player">
                                            <iframe
                                                src="https://www.youtube.com/embed/{{ $videoId }}?origin=https://plyr.io&iv_load_policy=3&modestbranding=1&playsinline=1&showinfo=0&rel=0&enablejsapi=1"
                                                title="YouTube video player" allowfullscreen allowtransparency
                                                allow="autoplay; encrypted-media; picture-in-picture"
                                                referrerpolicy="strict-origin-when-cross-origin"
                                                style="position: absolute; top: 0; left: 0; width: 100%; height: 100%;"></iframe>
                                        </div>
                                        <div onclick="showVideoModal('https://www.youtube.com/embed/{{ $videoId }}?autoplay=1')"
                                            style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; cursor: pointer;">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endif
                        @endforeach
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <div class="modal fade" id="videoModal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="embed-responsive embed-responsive-16by9">
                        <iframe id="modalVideo" class="embed-responsive-item" allow="autoplay; encrypted-media"
                            allowfullscreen></iframe>
                    </div>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"
                        style="position: absolute;"></button>
                </div>
            </div>
        </div>
    </div>
@endsection
@push('style')
    @include('plyr.plyr_css')
    <style>
        @media only screen and (min-width: 320px) and (max-width: 480px) {
            .f-s-24 {
                font-size: 24px !important;
            }
        }
    </style>
@endpush
@push('script')
    @include('plyr.plyr_scripts')
@endpush
@push('style')
    <style>
        .embed-responsive {
            position: relative;
            display: block;
            width: 100%;
            padding: 0;
            overflow: hidden;
        }

        .embed-responsive-16by9 {
            padding-top: 56.25%;
            /* 16:9 Aspect Ratio */
        }

        .embed-responsive .embed-responsive-item,
        .embed-responsive iframe {
            position: absolute;
            top: 0;
            left: 0;
            bottom: 0;
            right: 0;
            width: 100%;
            height: 100%;
            border: 0;
        }

        .video-thumbnail {
            position: relative;
            width: 300px;
            /* Set the size you want for the video thumbnail */
            height: 180px;
            background-image: url('your-thumbnail.jpg');
            /* Use a video thumbnail image */
            background-size: cover;
            cursor: pointer;
        }

        .custom-play-button {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            width: 50px;
            /* Adjust size of the play button */
            height: 50px;
            background: url('custom-play-icon.png') no-repeat center center;
            background-size: contain;
            z-index: 1;
        }

        .modal-body {
            position: relative;
        }

        .modal-body .btn-close {
            position: absolute;
            top: -20px !important;
            right: 0px;
            border-radius: 50%;
            width: 26px;
            height: 26px;
            z-index: 1100;
            background-color: #ffffff;
            opacity: 0.5;
            display: block !important;
        }
    </style>
@endpush
@push('script')
    <script>
        // Function to show video modal and set video source
        function showVideoModal(videoSrc) {
            document.getElementById('modalVideo').src = videoSrc + "?autoplay=1"; // Autoplay the video
            $('#videoModal').modal('show');
        }
        // When the modal is hidden, remove the src to stop the video
        $('#videoModal').on('click', '.btn-close', function() {
            document.getElementById('modalVideo').src = ''; // This will stop the video
            $('#videoModal').modal('hide');
        });
    </script>
@endpush
