@extends('frontend.student-master')

@section('student-body')
    <section class="py-lg-3">
        <div class="row">
            <div class="section-title">
                <div class="">
                    <h2 class="text-center"> Exam Ranking</h2>
                    <hr class="w-25 mx-auto bg-danger"/>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="table-responsive">
                        <table class="table ranking-table table-borderless table-striped" id="" >
                            <thead>
                                <tr>
                                    <th>Rank</th>
                                    <th>Name</th>
                                    <th>Mark</th>
                                    <th>Status</th>
                                    @if(count($courseExamResults) > 0)
                                        @if($courseExamResults[0]->xm_type == 'exam')
                                            <th>Provided Ans</th>
                                            <th>Right Ans</th>
                                            <th>Wrong Ans</th>
                                        @endif
                                    @endif
                                    <th>Duration</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($courseExamResults as $key => $courseExamResult)
                                    {{-- @if($key <= 4) --}}
                                        <tr class="table table-bordered">
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $courseExamResult->user->name }}</td>
                                            <td>{{ $courseExamResult->result_mark ?? 0 }}</td>
                                            <td>
                                                @if(!empty($courseExamResult->status))
                                                    @if(($courseExamResult->status === 'pass'))
                                                        <span class="badge bg-primary">Pass</span>
                                                    @elseif(($courseExamResult->status === 'fail'))
                                                        <span class="badge bg-danger">Fail</span>
                                                    @else
                                                        <span class="badge bg-warning">Pending</span>
                                                    @endif
                                                @endif
                                            </td>

                                            @if($courseExamResults[0]->xm_type == 'exam')
                                                <td>{{ $courseExamResult->total_provided_ans ?? 0 }}</td>
                                                <td>{{ $courseExamResult->total_right_ans ?? 0 }}</td>
                                                <td>{{ $courseExamResult->total_wrong_ans ?? 0 }}</td>
                                            @endif
                                            <td>{{ \Carbon\CarbonInterval::seconds($courseExamResult->required_time)->cascade()->forHumans() }}</td>
                                        </tr>
                                    {{-- @endif --}}
                                @endforeach
                                {{-- @if(!empty($myPosition))
                                    @if(isset($myPosition->position))
                                        @if($myPosition->position > 4)
                                            <tr class="correct-ans-bg">
                                                <td>{{ $myPosition->position }}</td>
                                                <td>{{ $myPosition->user->name }}</td>
                                                <td>{{ $myPosition->result_mark ?? 0 }}</td>
                                                <td>{{ $courseExamResult->total_provided_ans ?? 0 }}</td>
                                                <td>{{ $courseExamResult->total_right_ans ?? 0 }}</td>
                                                <td>{{ $courseExamResult->total_wrong_ans ?? 0 }}</td>
                                                <td>{{ \Carbon\CarbonInterval::seconds($myPosition->required_time)->cascade()->forHumans() }}</td>
                                            </tr>
                                        @endif
                                    @endif
                                @endif
                                @foreach($courseExamResults as $index => $courseExamResultx)
                                    @if($index > 4)
                                        <tr>
                                            <td>{{ ++$index }}</td>
                                            <td>{{ $courseExamResultx->user->name }}</td>
                                            <td>{{ $courseExamResultx->result_mark ?? 0 }}</td>
                                            <td>{{ $courseExamResult->total_provided_ans ?? 0 }}</td>
                                            <td>{{ $courseExamResult->total_right_ans ?? 0 }}</td>
                                            <td>{{ $courseExamResult->total_wrong_ans ?? 0 }}</td>
                                            <td>{{ \Carbon\CarbonInterval::seconds($courseExamResultx->required_time)->cascade()->forHumans() }}</td>
                                        </tr>
                                    @endif
                                @endforeach --}}
                            </tbody>
                        </table>
                        {{-- {!! $courseExamResults->links() !!} --}}
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
@push('style')
    <style>
        .correct-ans-bg { background-color: #B2DB9A}
        .ranking-table td {font-size: 15px}
        .ranking-table th {font-size: 15px}

        /*#file-datatable_wrapper .dt-buttons{*/
        /*    position: absolute !important;*/
        /*    top: 0px !important;*/
        /*    left: 136px !important;*/
        /*}*/
    </style>
@endpush

@push('script')
   @include('backend.includes.assets.plugin-files.datatable')
@endpush
