@extends('frontend.master')

@section('body')
@push('style')
<style>
    /* Hide all toolbar buttons initially */
    .pdf-toolbar-btn {
        display: none;
    }

    /* Show only the print, download buttons, and zoom dropdown */
    #btn-print, #btn-download, .pdf-toolbar-zoom {
        display: inline-block; /* Ensure these elements are shown */
    }

    /* Style the toolbar container */
    .pdf-toolbar {
        display: flex;
        align-items: center;
        background-color: #333; /* Dark background for the toolbar */
        color: #fff; /* White text color */
        padding: 10px;
        border-radius: 5px;
    }

    /* Style the title (optional) */
    .pdf-toolbar-title {
        display: none;
    }

    /* Style the visible buttons */
    #btn-print, #btn-download {
        background-color: #555; /* Darker button background */
        border: none;
        color: #fff;
        padding: 5px 10px;;
        margin: 0 2px;
        border-radius: 3px;
        cursor: pointer;
        transition: background-color 0.3s;
    }

    /* Change button color on hover */
    #btn-print:hover, #btn-download:hover {
        background-color: #777;
    }

    /* Style the zoom dropdown */
    .pdf-toolbar-zoom {
        background-color: #555;
        color: #fff;
        border: 1px solid #555;
        border-radius: 3px;
        padding: 5px;
        margin: 0 5px;
    }
    input[type="number"], select {
        display: none;
    }
    </style>

@endpush
<div class="container-fluid" id="grad1">
    <div class="row" style=" min-height: 500px;">
        <div class="col-md-8 quiz-wizard mx-auto">
            <div class="card border-0">

                <section id="Question-head">
                    <div class="background-res-qus-paper py-5"
                        style="background-image: url('{{ asset('frontend') }}/assets/images/exam-page/question-paper-bg.png')">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="exam-title">
                                    <h3>Exam - {{ $exam->title }}</h3>
                                    <p>{{ count($exam->questionStores) }} Questions</p>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-5">
                                <div class="exam-timer  d-none" id="quizDiv">
                                    <div class="quiz-time">
                                        <div class="flipTimer">
                                            @if(isset($exam) && $exam->content_type == 'exam' ? $exam->exam_duration_in_minutes : $exam->written_exam_duration_in_minutes > 60)
                                                <div class="hours"><span class="time-title text-white p-2 mb-1">Hours</span></div>
                                            @endif
                                            <div class="minutes"><span class="time-title text-white p-2 mb-1">Minutes</span></div>
                                            <div class="seconds"><span class="time-title text-white p-2 mb-1">Seconds</span></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="mt-5">
                                    <a href="" class="btn btn-lg start-btn btn-warning bg-brand text-white" data-xm-type="{{ isset($exam) ? $exam->content_type : 'null' }}" >Start</a>
                                </div>
                            </div>

                        </div>
                    </div>
                </section>


                <!-- $quiz->questions->take(100)->shuffle(50)->random(50); -->
                <div class="card-body d-none" id="questionsCard">
                    <div class="row custom_start_exam_scroll">
                        <div class="col-md-12 px-0" id="dtBasicExample">
                            {{--                            <form id="quizForm" action="/user/quizzes/{{ $quiz->id }}/store_results-mega" method="post" class="quiz-form">--}}
                            <form id="quizForm" action="{{ route('front.student.get-batch-exam-result', ['content_id' => $exam->id, 'slug' => str_replace(' ', '-', $exam->title)]) }}" method="post" class="quiz-form" enctype="multipart/form-data">
                                {{ csrf_field() }}
                                <input type="hidden" name="required_time">
                                <input type="hidden" name="_method" value="post"/>
                                <input type="hidden" id="name" value="">
                                <section id="All-Questions">
                                    <div class="container">
                                @if($exam->content_type == 'exam')
                                <div class="row g-4 pt-2 pb-5">
                                    @foreach($exam->questionStores as $index => $question)
                                        <div class="col-md-12 pt-3" id="questionDiv{{ $question->id }}">
                                            <div class="question-title">
                                                <h5>{!! $question->question !!}</h5>
                                                <div>
                                                    <div>
                                                    <p class="anser-mark isConfirm{{ $question->id }}"></p>
                                                </div>
                                                </div>
                                            </div>
                                            @if(!empty($question->question_image))
                                                <div class="{{--image-container--}}">
                                                    <img src="{{ $question->question_image }}" class="fit-image" alt="" style="max-height: 350px; max-width: 94%" />
                                                </div>
                                            @endif

                                            <div class="question-options">
                                                <div class="row">
                                                    @foreach($question->questionOptions as $optionIndex => $questionOption)
                                                    @if(!empty($questionOption->option_title))
                                                    <div class="col-md-6">
                                                        <div class="option justify-content-between" data-ans-id="{{ $questionOption->id }}" >
                                                            <p>{{ $questionOption->option_title }}</p>
                                                            <div class="confirm-button">
                                                                <div class="ok-button" id="ansCheck{{ $questionOption->id }}">
                                                                    <input type="checkbox" class="asw{{ $questionOption->id }} d-none" name="question[{{ $question->id }}][answer]" value="{{ $questionOption->id }}">
                                                                    <a class="check-ans" data-bs-toggle="tooltip" data-bs-placement="top" title="Click To confirm" data-question-id="{{ $question->id }}" data-option-id="{{ $questionOption->id }}"><i class="fa-solid fa-circle-check"></i></a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    @endif
                                                    @endforeach
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                                    {{-- <div class="card-actions d-flex align-items-center finish-div d-none">
                                        <button type="submit" class="action-button finish btn btn-danger">Finish Test</button>
                                    </div> --}}
                                @elseif($exam->content_type == 'written_exam')
                                    @foreach($exam->questionStores as $index => $question)
                                        <div class="row mt-2">
                                            <div class="col-md-12">
                                                {{-- <span class="float-start" style="font-size: 22px"> &nbsp;</span>
                                                <h4 class="float-start fw-bold">{!! $question->question !!}</h4> --}}
                                                <div class="mt-3">
                                                    @if($question->question_file_type == 'pdf')
                                                        <div id="pdf-container" data-pdf-url="{{ asset($question->question_image) }}"></div>
                                                    @else
                                                        <img src="{{ asset($question->question_image) }}" alt="" style="max-height: 400px; width: 94%;">
                                                    @endif
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                    <div class="row mt-3">

                                        <div class="col-md-12 ">
                                            <div class="ansFileUpload"></div>
                                        </div>
                                        <div class="col-md-4 mx-auto mt-3 mb-3">
                                            {{-- <a href="" class="btn btn-danger ">Finish Test</a> --}}
                                            <a href="" class="sticky-submit-btn btn btn-danger w-100 f-s-20">Submit</a>
                                        </div>
                                    </div>
                                @endif
                            </form>
                        </div>
                    </div>
                @if($exam->content_type == 'exam')
                    <div class="col-md-8 text-center mt-3 mx-auto mb-3">
                        {{-- <a href="" class="btn sticky-submit-btn btn-outline-warning d-none">Submit</a> --}}
                        <a href="" class="sticky-submit-btn btn btn-danger btn-outline-warning w-50 f-s-20 d-none">Submit</a>
                    </div>
                @endif
                </div>
            </div>
        </div>

    </div>
</div>

@endsection
@push('style')

<link rel="stylesheet" href="{{ asset('/') }}backend/assets/plugins/step-form-simulator/view-custom.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

<link rel="stylesheet" href="{{ asset('/') }}backend/assets/plugins/clock-counter/flipTimer.css">

<link type="text/css" rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link href="https://fonts.googleapis.com/css?family=Lato:300,700|Montserrat:300,400,500,600,700|Source+Code+Pro&display=swap" rel="stylesheet">
<link rel="stylesheet" href="{{ asset('/') }}backend/assets/plugins/image-uploader-master/dist/image-uploader.min.css">
<style>


    .uploaded {
        text-align: left;
    }
    .now-active {
        /*display: block!important;*/
        /*background: #01a3a4!important;*/
        background: #ffe4d6!important;
        color: black!important;
    }

    .form-card { padding: 10px 2px 20px 25px; border-radius: 10px}

    .check-ans  {
        padding: 4px 3px 0px 4px;
        border-radius: 10px;
    }

</style>
<script src="https://polyfill.io/v3/polyfill.min.js?features=es6"></script>
<script id="MathJax-script" async src="https://cdn.jsdelivr.net/npm/mathjax@3/es5/tex-mml-chtml.js"></script>
<!-- Sweet Alert -->
<link href="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.3/dist/sweetalert2.min.css" rel="stylesheet" />

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="{{ asset('/') }}backend/assets/plugins/pdf-draw/pdfannotate.css">
<link rel="stylesheet" href="{{ asset('/') }}backend/assets/plugins/pdf-draw/styles.css">
<style>
    .canvas-container, canvas { width: 100%!important; margin-top: 10px!important;}
</style>
@endpush

@push('script')

<script type="application/javascript" src="{{ asset('/') }}backend/assets/plugins/clock-counter/jquery.flipTimer.js"></script>
<script type="application/javascript" src="{{ asset('/') }}backend/assets/plugins/image-uploader-master/dist/image-uploader.min.js"></script>

{{--    sweet alert js--}}
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
{{--    <script> var sliderTimer = 6000;</script>--}}


{{--disable page back button start--}}
<script>
    window.history.pushState(null, null, window.location.href);
    window.onpopstate = function() {
        window.history.pushState(null, null, window.location.href);
    };
</script>
{{--disable page back button end--}}

{{--disable page reload start--}}
<script>
    // stop F5 key reload
    $(window).on('keydown', function (event) {
        if (event.keyCode === 116) {
            event.preventDefault();
        }
    })

    // disable right button
    document.addEventListener('contextmenu', function(event) {
        event.preventDefault();
    });

    // disable ctrl R reload
    document.addEventListener('keydown', function(event) {
        if (event.ctrlKey && event.key === 'r') {
            event.preventDefault(); // Prevent the default behavior of Ctrl + R
            console.log('Ctrl + R pressed');
            // You can add your own code here to perform actions when Ctrl + R is pressed.
        }
    });


    document.addEventListener('keydown', (e) => {
        e = e || window.event;
        if(e.keyCode == 116){
            e.preventDefault();
        }
    });
</script>
{{--disable page reload start--}}

{{--<script src="https://cdnjs.cloudflare.com/ajax/libs/pdf.js/2.6.347/pdf.min.js"></script>--}}
{{--<script>pdfjsLib.GlobalWorkerOptions.workerSrc = 'https://cdnjs.cloudflare.com/ajax/libs/pdf.js/2.6.347/pdf.worker.min.js';</script>--}}
{{--<script src="https://cdnjs.cloudflare.com/ajax/libs/fabric.js/4.3.0/fabric.min.js"></script>--}}
{{--<script src="{{ asset('/') }}backend/assets/plugins/pdf-draw/arrow.fabric.js"></script>--}}
{{--<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.2.0/jspdf.umd.min.js"></script>--}}
{{--<script src="https://cdn.rawgit.com/google/code-prettify/master/loader/run_prettify.js"></script>--}}
{{--<script src="{{ asset('/') }}backend/assets/plugins/pdf-draw/pdfannotate.js"></script>--}}
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdf.js/2.6.347/pdf.min.js"></script>
<script src="{{ asset('/') }}backend/ppdf/js/pdfviewer.jquery.js"></script>
<script>
    var pdfUrl = $('#pdf-container').attr('data-pdf-url');

    $('#pdf-container').pdfViewer(pdfUrl);

</script>

<script>

        const beforeUnloadHandler = (event) => {
            var form = $('#quizForm')[0];
            var formData = new FormData(form);
            $.ajax({
                url: "{{ route('front.student.check-if-user-tries-to-reload') }}",
                method: "POST",
                data: formData,
                contentType: false,
                processData: false,
                success: function (response) {
                    console.log(response);
                }
            });

            // Recommended
            event.preventDefault();


            // Included for legacy support, e.g. Chrome/Edge < 119
            event.returnValue = true;

        };

        @if($exam->exam_is_strict == 1)
            @if(currentDateTimeYmdHi() < dateTimeFormatYmdHi($exam->exam_end_time))
                {{ $diffTime  = \Illuminate\Support\Carbon::now()->diffInMinutes($exam->exam_end_time) }}
            @else
                {{ $diffTime = 0 }}
            @endif
        @endif
        @if($exam->written_is_strict == 1)
            @if(currentDateTimeYmdHi() < dateTimeFormatYmdHi($exam->written_end_time))
                {{ $writtenDiffTime  = \Illuminate\Support\Carbon::now()->diffInMinutes($exam->written_end_time) }}
            @else
                {{ $writtenDiffTime = 0 }}
            @endif
        @endif

        $(document).on('click', '.start-btn', function () {
            event.preventDefault();
            var getXmType = $(this).attr('data-xm-type');
            var conditions = '';
            if (getXmType != 'null' && getXmType == 'exam')
            {
                conditions = '<ol type="i" align="left">' +
                    '<li>Make sure you have a stable internet connection.</li>'+
                    '<li>Do not Close or refresh tab before submitting the Exam.</li>'+
                    '<li>Do not Click the Back button on the ok browser while giving.</li>'+
                    '</ol>';
            } else if(getXmType != 'null' && getXmType == 'written_exam')
            {
                conditions = '<ol type="i" align="left">' +
                    '<li>Make sure you have a stable internet connection.</li>'+
                    '<li>Submit your answer sheet photo within 10 minutes of warning message.</li>'+
                    '</ol>';
            }
            Swal.fire({
                title: 'Are you sure to start the exam?',
                html: conditions,
                text: "You won't be able to participate again!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, Confirm!'
            }).then((result) => {
                if (result.isConfirmed) {
                    // Swal.fire(
                    //     'Deleted!',
                    //     'Your file has been deleted.',
                    //     'success'
                    // )
                    $(this).addClass('d-none');
                    $('#quizDiv').removeClass('d-none');
                    $('#questionsCard').removeClass('d-none');
                    $('.finish-div').removeClass('d-none');
                    $('.sticky-submit-btn').removeClass('d-none');

                    $(function() {
                    const $header = $('.sticky-submit-btn');
                    let prevScroll = 0;
                    height = document.body.offsetHeight-window.innerHeight;
                    footer = height - 500;

                    console.log(height);

                    $(window).scroll(function() {
                        let scroll = $(window).scrollTop();
                        if (scroll > footer) {
                        $header.css('bottom','470px');
                        }else{
                        $header.css('bottom','0px');
                        }
                        prevScroll = scroll;
                    });
                    });
// timmer calling start

                        var currentTime = new Date();
                    currentTime.setMinutes(currentTime.getMinutes() + {!! isset($exam) ? ($exam->content_type == 'exam' ? ($exam->exam_is_strict == 1 ? /*++$diffTime*/ ($diffTime < $exam->exam_duration_in_minutes ? $diffTime : $exam->exam_duration_in_minutes) :  $exam->exam_duration_in_minutes) : (($exam->written_is_strict == 1 ? /*++$diffTime*/ ($writtenDiffTime < $exam->written_exam_duration_in_minutes ? $writtenDiffTime : $exam->written_exam_duration_in_minutes) :  $exam->written_exam_duration_in_minutes))) : 1 !!}); //set custom time instead 60

                    $('.flipTimer').flipTimer({
                        direction: 'down',
                        date: currentTime,
                        callback: function () {
                            $('body .action-button.finish').remove();
                            $('#quizForm').submit();
                        },
                    });
                    // timmer calling end
                    var seconds = 1;
                    setInterval(function () {
                        $('input[name="required_time"]').val(seconds++);
                    }, 1000)

                    var nameVal = $('#name').val('a');
                    // send user xm starting status to server
                    $.ajax({
                        url: "{{ route('front.student.set-xm-start-status-to-server') }}",
                        dataType: "JSON",
                        data: {xmType: "batch_exam", xmUrl: "{!! url()->current() !!}", xmContentId: "{{ $exam->id }}" },
                        method: "POST",
                        success: function (response) {
                            console.log(response);
                        }
                    })
                    if (nameVal !== "") {

                        window.addEventListener("beforeunload", beforeUnloadHandler);
                    } else {
                        window.removeEventListener("beforeunload", beforeUnloadHandler);
                    }
                }

            })
        })
        $(document).on('click', '.finish', function () {
            event.preventDefault();
            window.removeEventListener("beforeunload", beforeUnloadHandler);
            document.getElementById('quizForm').submit();
        })
    </script>

    <script>


        $(document).on('click', '.answer-label', function () {
            var questionOptionId = $(this).attr('data-ans-id');
            var questionId = $(this).attr('data-que-id');
            var hasDisableClass = false;
            $('#queRadio'+questionId+ ' .form-radio').each(function () {
                if ($(this).hasClass('disabled-it'))
                {
                    // event.stopPropagation();
                    // return false;
                    // alert('worked');
                    // return false;
                    // $('#queRadio'+questionId+ ' .form-radio').each(function () {
                    //     $(this).off('click');
                    // });
                    hasDisableClass = true;
                }
            })
            if(hasDisableClass)
            {
                // alert('true');
                return false;
            }

            $('#queRadio'+questionId+ ' .answer-label').each(function () {
                if ($(this).hasClass('now-active'))
                {
                    $(this).removeClass('now-active');
                }
            })
            $('#queRadio'+questionId+ ' .cont').each(function () {
                if (!$(this).hasClass('d-none'))
                {
                    $(this).addClass('d-none');
                }
            })
            $(this).addClass('now-active');
            // $('#ansCheck'+questionOptionId).css('cssText', 'display: block!important;');
            $('#ansCheck'+questionOptionId).removeClass('d-none');
        })

        $(document).on('click', '.check-ans', function () {
            var questionId = $(this).data('question-id');
            var questionOptionId = $(this).data('option-id');
            // Disable all check-ans buttons and options within the same question group
            $(this).closest('.col-md-6').siblings().find('.check-ans').addClass('disabled').css('pointer-events', 'none');
            $(this).closest('.col-md-6').siblings().find('.option').css({
                pointerEvents: 'none',
                backgroundColor: '' // Reset background for non-selected options
            });
            $('.isConfirm'+questionId).text('Answered');
            $('.asw' + questionOptionId).prop("checked", true);
            console.log('.asw'+questionOptionId);
            // Apply the selected background color to the clicked option and disable interactions
            $(this).closest('.option').css({
                backgroundColor: 'rgb(0 255 118)',
                pointerEvents: 'none'
            });

            $(this).closest('.ok-button').css({
                display: "block"
            });

            // Check the corresponding checkbox
            $(this).closest('.option').find('input[type="checkbox"]').prop("checked", true);
        });



        $(document).on('click', '.option', function () {
            $(this).closest('.option').css({
                backgroundColor: 'rgb(229 255 241)',
            });
            $(this).closest('.col-md-6').siblings().find('.option').css({
                backgroundColor: '' // Reset background for non-selected options
            });

        });

        $(document).on('click', '.cancel-ans', function () {
            if($($(this).parent().parent()).hasClass('disabled-it'))
            {
                $($(this).parent().parent()).removeClass('disabled-it');
            }
            var parentId = $(this).parent().attr('id').split('ansCheck').join('');
            if($('label[for="asw'+parentId+'"]').hasClass('now-active'))
            {
                $('label[for="asw'+parentId+'"]').removeClass('now-active')
            }
            $(this).parent().addClass('d-none');
        })

        function isset(iVal){
            return (iVal!=="" && iVal!=null && iVal!==undefined && typeof(iVal) != "undefined") ? 1 : 0;
        }

    </script>
<script>
    $(document).on('click', '.sticky-submit-btn', function () {
        event.preventDefault();
        window.removeEventListener("beforeunload", beforeUnloadHandler);
        document.getElementById('quizForm').submit();
    })
</script>
<script>
    $(function (){
        $('.ansFileUpload').imageUploader({
            imagesInputName: "ans_files",
            preloadedInputName:'preloaded',
            label: "Drag & Drop Answer Image files here or click to browse"
        });
    })
</script>
@endpush