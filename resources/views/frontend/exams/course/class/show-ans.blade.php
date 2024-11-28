@extends('frontend.student-master')

@section('student-body')
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="section-title ">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="text-center"> {!! $content->title !!} Question Answers</h3>
                            <div class="text-center exam-all-marks" >
                                <p style="color: #21225f; font-weight:600;"> Your Position : <strong class="text-brand"> {{ $myPosition->position }} </strong><br>
                                    Total Mark : {{ $myPosition->courseSectionContent->exam_total_questions * $myPosition->courseSectionContent->exam_per_question_mark }} <br>
                                    Right  Answer : {{ $myPosition->total_right_ans }} <br>
                                    Wrong  Answer : {{ $myPosition->total_wrong_ans }} <br>
                                    Negative Mark : {{ $myPosition->courseSectionContent->exam_negative_mark * $myPosition->total_wrong_ans }} <br>
                                    Obtained  Marks : {{ $myPosition->result_mark }} <i class="{{ $myPosition->status=='pass' ? 'text-success': 'text-danger' }} text-capitalize">({{  $myPosition->status }})</i> <br>
                                    Duration : {{ \Carbon\CarbonInterval::seconds($myPosition->required_time)->cascade()->forHumans() }}
                                </p>
                            </div>
                            <hr class="w-25 mx-auto bg-danger"/>
                        </div>

                        <div class="card-body">
                            <div class="row ">
                                @if($content->content_type == 'video')
                                    @foreach($content->questionStoresForClassXm as $questionStore)
                                         <div class="col-md-6 mt-3 {{$questionStore->has_answered !=1 ? 'bg-warning' : ''}}" >
                                            <h3>{!! $questionStore->question !!}</h3>
                                             @if(!empty($questionStore->question_image))
                                                 <img src="{{ $questionStore->question_image }}" class="fit-image" alt="" style="max-height: 350px" />
                                             @endif
                                            @if($content->content_type == 'video')
                                                <div class="mt-2">
                                                    <ul class="nav flex-column">
                                                        @foreach($questionStore->questionOptions as $questionOption)
                                                            <li class="f-s-20 border px-2 {{ $questionOption->is_correct == 1 ? 'correct-ans-bg' : '' }} {{ isset($questionOption->my_ans) && $questionOption->my_ans == 1 ? 'correct-ans-bg' : '' }} {{ isset($questionOption->my_ans) && $questionOption->my_ans == 0 ? 'bg-danger' : '' }}"><p class="{{ $questionOption->is_correct == 1 ? 'text-white' : '' }}">{{ $questionOption->option_title }}</p></li>
                                                        @endforeach
                                                    </ul>
                                                    @if($questionStore->has_all_wrong_ans == 1)
                                                        <span class="text-danger">All Options are incorrect.</span>
                                                    @endif
                                                    <div class="mt-2">
                                                        <a href="#" class="toggleAnsDes nav-link"  data-question-id="{{ $questionStore->id }}">Show Answer Description</a>
                                                        @if(isset($questionStore->mcq_ans_description))
                                                            <div class="mt-2" id="ansDes{{ $questionStore->id }}" style="display: none">
                                                                {!! $questionStore->mcq_ans_description !!}
                                                            </div>
                                                        @endif
                                                    </div>

                                                </div>
                                            @elseif($content->content_type == 'written_exam')
                                                <div>
                                                    <p class="f-s-20">{!! $questionStore->written_que_ans !!}</p>
                                                </div>
                                            @endif
                                        </div>
                                    @endforeach
                                @elseif($content->content_type == 'written_exam')
                                    <div class="col-md-12 mt-3">
                                        <div id="pdf-container"></div>
                                    </div>
                                @endif

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
@push('style')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!--<link rel="stylesheet" href="{{ asset('/') }}backend/assets/plugins/pdf-draw/pdfannotate.css">-->
    <!--<link rel="stylesheet" href="{{ asset('/') }}backend/assets/plugins/pdf-draw/styles.css">-->
    <style>
        /*.canvas-container, canvas { width: 100%!important; margin-top: 10px!important;}*/
    </style>

    <link rel="stylesheet" href="{{ asset('/') }}backend/ppdf/css/pdfviewer.jquery.css" />
    <style>
        .pdf-toolbar {display: none;}
        #pdf-container {overflow: scroll; height: 500px;}
        .aks-video-player { width: 99%!important;/* min-height: 450px*/}
    </style>

    {{-- <style>
        .correct-ans-bg { background-color: #B2DB9A}
    </style> --}}

    <style>
        .correct-ans-bg { background-color: green}
        .bg-warning {
            background-color: #fcd8c3 !important;
            /* padding: 1px; */
        }
        .bg-danger{ background-color: #ed2222}

        .section-title p{
            padding: 8px 0px !important;
            color: black
        }
        .section-title h3{
            padding-top:5px;
        }
    </style>
@endpush

@push('script')

    <!--ppdf-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdf.js/2.6.347/pdf.min.js"></script>
<script src="{{ asset('/') }}backend/ppdf/js/pdfviewer.jquery.js"></script>

    <script>

    var pdflink = "{{ isset($writtenFile) ? asset($writtenFile->written_xm_file) : null }}";
    @if(!empty($writtenFile->written_xm_file))

    $('#pdf-container').pdfViewer(pdflink);
        @endif

    </script>
    <script>
        $(document).on('click', '.toggleAnsDes', function () {
            event.preventDefault();
            var questionStoreId = $(this).attr('data-question-id');
            $('#ansDes'+questionStoreId).toggle(500);
        })
    </script>
@endpush
