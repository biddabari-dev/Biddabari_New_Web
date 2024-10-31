@extends('frontend.master')

@section('title')
    Biddabari - ভিডিও ক্লাস ও পরীক্ষা – একদম ফ্রি
@endsection

@section('body')
    <div class="courses-area-two section-bg py-5 bg-white" style="background-image: url('{{ asset('frontend') }}/assets/images/free-service/free-service-bg.jpg')">
        <div class="container">
            <div class="col-12 mb-4">
                <div class="section-title text-center">
                    <h2 class="">{{ $category->name }}<span class="text-brand f-s-24"
                            style="display:inline; margin:0; padding: 0;"> প্রস্তুতি </span> </h2>
                    <hr class="w-25 mx-auto bg-danger" />
                </div>
            </div>


            <div class="row">
                <div class="col-12 ms-auto">
                    <ul class="nav nav-pills all-course-page-nav-pills justify-content-center text-center">
                        <li class="nav-item mb-3 me-2">
                            <a class="nav-link default-btn bg-default-color text-white bg-brand" data-bs-toggle="pill" href="#freeClass">
                                <span class="f-s-30 f-s-24">ফ্রি ক্লাস করুন</span>
                            </a>
                        </li>
                        <li class="nav-item mb-3">
                            <a class="nav-link default-btn bg-default-color text-white bg-brand" data-bs-toggle="pill" href="#freeExams">
                                <span class="f-s-30 f-s-24">ফ্রি পরীক্ষা দিন</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="tab-content mt-3">
                <div class="tab-pane fade show active px-1" id="freeClass">
                    <div class="border-0 rounded-0">
                        <div class="row">
                            @forelse ($results as $item)
                                @php
                                    $url = $item->categoryVideo->video_link ?? '';
                                    $videoId = '';
                                    if ($url) {
                                        $urlComponents = parse_url($url);
                                        if (isset($urlComponents['query'])) {
                                            parse_str($urlComponents['query'], $query);
                                            $videoId = $query['v'] ?? '';
                                        }
                                    }
                                @endphp
                                @if (!empty($item->categoryVideo->video_link))
                                    <div class="col-md-6 col-lg-4 p-2">
                                        <div class="card video-container" >
                                            <div class="video-foreground">
                                                <div class="plyr__video-embed" id="player">
                                                    <iframe
                                                        src="https://www.youtube.com/embed/{{ $videoId }}?origin=https://plyr.io&iv_load_policy=3&modestbranding=1&playsinline=1&showinfo=0&rel=0&enablejsapi=1"
                                                        allowfullscreen allowtransparency allow="autoplay"></iframe>
                                                </div>
                                                <div class="content p-2">
                                                    <h5><a href="" class="text-black">{{ $item->categoryVideo->title }}</a></h5>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endif
                            @empty
                                <div class="col-md-12">
                                    <div class="card card-body">
                                        <h2 class="text-center">No Classes Available yet.</h2>
                                    </div>
                                </div>
                            @endforelse
                        </div>
                    </div>
                </div>

                <div class="tab-pane fade px-1" id="freeExams">
                    <div class="card card-body border-0 rounded-0">
                        <div class="row">
                            <h3>Second Part</h3>
                        </div>
                    </div>
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
<script>
    function showVideoModal(videoId) {
        // Update the iframe src in the modal with the videoId
        let modalIframe = document.querySelector('#modalPlayer iframe');
        modalIframe.src = `https://www.youtube.com/embed/${videoId}?origin=https://plyr.io&iv_load_policy=3&modestbranding=1&playsinline=1&showinfo=0&rel=0&enablejsapi=1&autoplay=1`;

        // Show the modal
        let videoModal = new bootstrap.Modal(document.getElementById('videoModal'));
        videoModal.show();

        // Stop the video when the modal is hidden
        document.getElementById('videoModal').addEventListener('hidden.bs.modal', function () {
            modalIframe.src = "";
        });
    }
</script>
@endpush
