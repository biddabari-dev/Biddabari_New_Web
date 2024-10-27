@extends('frontend.master')

@section('body')
    <main>
        <section class="bg-light">

            <section id="Answer-head" class="overflow-hidden">
                <div class="container">
                    <div class="answer-sheet-head">
                        <div class="answer-sheet-title">
                            <h3>{!! $content->title !!} Answer Sheet</h3>
                        </div>
                        @if ($content->content_type == 'exam')
                            <div class="row g-4 align-items-center answer-sheet-total">
                                <div class="col-md-12 col-lg-9">
                                    <div class="row">
                                        <div class="col-md-3">
                                            <div class="exam-all-marks">
                                                <h6>Total Mark : <span>{{ $content->exam_total_questions * $content->exam_per_question_mark }}</span></h6>
                                                <h6>Pass Mark : <span>{{ $content->exam_pass_mark }}</span></h6>
                                                <h6>Negative Mark : <span> {{ $content->exam_negative_mark * $batchExamResult->total_wrong_ans}}</span></h6>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="exam-all-marks">
                                                <h6>Wrong Ans: <span>{{ $batchExamResult->total_wrong_ans ?? 0 }}</span></h6>
                                                <h6>Right Ans : <span>{{ $batchExamResult->total_right_ans ?? 0 }}</span></h6>
                                                <h6>Obtained Mark : <span><span>{{ $batchExamResult->result_mark ?? 0 }}  ({{ $batchExamResult->status }})</span></h6>
                                            </div>
                                        </div>
                                        <div class="col-md-5">
                                            <div class="exam-all-marks exam-time">
                                                @php
                                                    $hours = intdiv($content->exam_duration_in_minutes, 60);
                                                    $minutes = $content->exam_duration_in_minutes % 60;
                                                @endphp
                                                <h6>Total Exam Time : <span>{{ $hours > 0 ? $hours . ' hr' . ($hours > 1 ? 's ' : ' ') : '' }}{{ $minutes > 0 ? $minutes . ' min' : '' }}</span></h6>
                                                @php
                                                    $seconds = $batchExamResult->required_time ?? 0;
                                                    $hours = floor($seconds / 3600);
                                                    $minutes = floor(($seconds % 3600) / 60);
                                                    $remainingSeconds = $seconds % 60;
                                                @endphp
                                                <h6>Your Exam Time : <span>{{ $hours }} hr {{ $minutes }} min {{ $remainingSeconds }} sec</span></h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="see-ranking-button">
                                        <a href="{{ route('front.student.show-batch-exam-ranking', ['content_id' => $content->id, 'slug' => str_replace(' ', '-', $content->title)]) }}" type="submit" class="">See Ranking</a>
                                    </div>
                                </div>
                            </div>
                        @endif
                    </div>
                </div>
            </section>

            <section id="All-Questions">
                <div class="container">
                    <div class="row g-4 py-5">
                        @if ($content->content_type == 'exam')
                            @foreach ($content->questionStores as $key=>$questionStore)
                                <div class="col-md-12 col-lg-12 pt-3">
                                    <div class="question-title">
                                        <h5>{!! $questionStore->question !!}</h5>
                                        <div>
                                            <div>
                                                @php
                                                    $hasAnswer = $questionStore->questionOptions->contains('my_ans', 1);
                                                    $hasWrongAnswer = $questionStore->questionOptions->contains('my_ans', 0);
                                                    $hasNoAnswer = !$hasAnswer && !$hasWrongAnswer;
                                                @endphp

                                                @if ($hasAnswer)
                                                    <p class="anser-mark">Answered</p>
                                                @elseif ($hasWrongAnswer)
                                                    <p class="anser-mark-wrong">Wrong Ans</p>
                                                @elseif ($hasNoAnswer)
                                                    <p></p>
                                                @endif

                                            </div>
                                        </div>
                                    </div>
                                    @if ($content->content_type == 'exam')
                                       <div class="question-options">
                                        <div class="row">
                                            @foreach ($questionStore->questionOptions as $questionOption)
                                                <div class="col-md-6">
                                                    <div class="option-{{ $loop->index + 1 }}
                                                    {{ is_null($questionOption->my_ans) ? 'not-answered' : '' }}
                                                    {{ $questionOption->is_correct == 1 ? 'correct-ans-bg' : '' }}
                                                    {{ isset($questionOption->my_ans) && $questionOption->my_ans == 0 ? 'wrong-answered' : '' }}
                                                    {{ $questionOption->is_correct == 1 && $questionOption->my_ans == 1 ? 'answered' : '' }}
                                                        justify-content-between">

                                                        <p>{{ $questionOption->option_title }}</p>

                                                        @if (isset($questionOption->my_ans))
                                                            <div class="answered-button">
                                                                @if ($questionOption->my_ans == 0)
                                                                    <div class="cross-button">
                                                                        <a href="#"><i class="fa-regular fa-circle-xmark"></i></a>
                                                                    </div>
                                                                @elseif ($questionOption->is_correct == 1 && $questionOption->my_ans == 1)
                                                                    <div class="ok-button">
                                                                        <a href="#"><i class="fa-solid fa-circle-check"></i></a>
                                                                    </div>
                                                                @elseif ($questionOption->is_correct == 1)
                                                                    <div class="ok-button">
                                                                        <a href="#"><i class="fa-solid fa-circle-check"></i></a>
                                                                    </div>
                                                                @endif
                                                            </div>
                                                        @endif
                                                    </div>
                                                </div>
                                            @endforeach
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
            </section>

        </section>
    </main>
@endsection
@push('style')
    <link rel="stylesheet" href="{{ asset('/') }}backend/ppdf/css/pdfviewer.jquery.css" />
    <style>
        .pdf-toolbar {
            display: none;
        }

        #pdf-container {
            overflow: scroll;
            height: 750px;
            width: 95% !important;
        }

        .aks-video-player {
            width: 99% !important;
            /* min-height: 450px*/
        }
    </style>
@endpush

@push('script')
    <!--ppdf-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdf.js/2.6.347/pdf.min.js"></script>
    <script src="{{ asset('/') }}backend/ppdf/js/pdfviewer.jquery.js"></script>

    <script>
        var pdflink = "{{ isset($writtenFile) ? static_asset($writtenFile->written_xm_file) : null }}";
        @if (!empty($writtenFile->written_xm_file))

            $('#pdf-container').pdfViewer(pdflink);
        @endif
    </script>
    <script>
        $(document).on('click', '.toggleAnsDes', function() {
            event.preventDefault();
            var questionStoreId = $(this).attr('data-question-id');
            $('#ansDes' + questionStoreId).toggle(500);
        })
    </script>
@endpush
