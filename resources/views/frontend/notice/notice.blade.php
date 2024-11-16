@extends('frontend.master')
@section('title') Biddabari | Notice @endsection
@push('style')
    <link rel="stylesheet" href="{{ asset('/') }}backend/ppdf/css/pdfviewer.jquery.css" />
    <style>
        .pdf-toolbar {
            display: none;
        }

        #pdf-container {
            overflow: scroll;
            height: 500px;
        }
    </style>
@endpush
@section('body')
<main>

    <section id="All_notice" class="background-res background-ats py-2 py-mb-5"
        style="background-image: url('{{ asset('frontend') }}/assets/images/notice-page/notice-page-bg.png')">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="title-area text-center">
                        <br>
                        <h2 class="fw-bold">প্রজ্ঞাপন / <span>নোটিশ!</span>
                        </h2>
                        <br>
                    </div>
                </div>
            </div>
            <div class="notice-category-area">
                <div class="row g-4">
                    <div class="col-md-6 col-lg-4">
                        <div class="my-notice-category">
                            <div class="my-notice-category-icon">
                                <i class="fa-solid fa-circle-exclamation"></i>
                                <!-- <img src="{{ asset('frontend') }}/assets/images/home-page/category/home.png" alt="" srcset=""> -->
                            </div>
                            <div class="my-notice-category-content">
                                <h3>Latest Notice</h3>
                                <p>প্রতিযোগিতামূলক এই জব-মার্কেটে নিজের ক্যারিয়ারকে</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="my-notice-category">
                            <div class="my-notice-category-icon">
                                <i class="fa-solid fa-circle-exclamation"></i>
                                <!-- <img src="{{ asset('frontend') }}/assets/images/home-page/category/home.png" alt="" srcset=""> -->
                            </div>
                            <div class="my-notice-category-content">
                                <h3>Last 7 Days Notices</h3>
                                <p>প্রতিযোগিতামূলক এই জব-মার্কেটে নিজের ক্যারিয়ারকে</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="my-notice-category">
                            <div class="my-notice-category-icon">
                                <i class="fa-solid fa-circle-exclamation"></i>
                                <!-- <img src="{{ asset('frontend') }}/assets/images/home-page/category/home.png" alt="" srcset=""> -->
                            </div>
                            <div class="my-notice-category-content">
                                <h3>Last Month Notices</h3>
                                <p>প্রতিযোগিতামূলক এই জব-মার্কেটে নিজের ক্যারিয়ারকে</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="notice-content-area">
                <div class="row g-4">
                    @foreach($notices as $notice)
                    <div class="col-md-6 col-lg-4">
                        <div class="notice-content text-center" onclick="showModal('{{ static_asset($notice->image) }}', '{{ $notice->title }}')">
                            <div class="notice-title">
                                <h3>{!! $notice->title !!}</h3>
                            </div>
                            <div class="notice-image">
                                @if (isset($notice->image))
                                    <img src="{{ static_asset($notice->image) }}" alt="{{ $notice->title }}" srcset="">
                                @endif
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
</main>
<!-- Modal Structure -->
<div id="imageModal" class="modal fade mt-5" tabindex="-1" aria-labelledby="imageModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 id="imageModalLabel" class="modal-title"></h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body text-center">
                <img id="modalImage" src="" class="img-fluid" alt="">
            </div>
        </div>
    </div>
</div>

@endsection
@push('script')
    <script>
        function showModal(imageSrc, title) {
            document.getElementById('modalImage').src = imageSrc;
            document.getElementById('imageModalLabel').innerText = title;
            var modal = new bootstrap.Modal(document.getElementById('imageModal'));
            modal.show();
        }
    </script>
@endpush
