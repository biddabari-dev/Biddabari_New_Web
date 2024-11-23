
@extends('backend.master')

@section('title', 'Student Opinion')

@section('body')
    <div class="row py-5">
        <div class="col-8 mx-auto">
            <div class="card">
                <div class="card-header bg-warning">
                    <h4 class="float-start text-white">Student Opinions Info</h4>
                    <a href="{{ route('student-opinions.index') }}" class="btn btn-white btn-sm float-end position-absolute me-5" style="right: 0"><i class="fa fa-sliders"></i></a>
                </div>
                <div class="card-body">
                    <form action="{{ isset($opinion) ? route('student-opinions.update',$opinion->id) : route('student-opinions.store') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        @if(isset($opinion))
                            @method('put')
                        @endif
                        <div class="row mt-3">
                            <div class="col-sm-6 select2-div">
                                    <label for="" class="applicable-form">Student Type</label>
                                <select name="show_type" id="show_type" required class="form-control select2">
                                    <option value="image" {{ isset($opinion) && $opinion->show_type == 'image' ? 'selected' : '' }}>Image </option>
                                    <option value="video" {{ isset($opinion) && $opinion->show_type == 'video' ? 'selected' : '' }}>Video</option>
                                </select>
                                <span class="text-danger" id="">{{ $errors->has('student_category_id') ? $errors->first('student_category_id') : '' }}</span>
                            </div>
                            <div class="col-sm-6">
                                <label for="">Student Name</label>
                                <input type="text" class="form-control" name="name" value="{{ isset($opinion) ? $opinion->name : '' }}" placeholder="Name" title="Title" />
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-sm-6">
                                <label for="">Student Image</label>
                                <div class="mt-1">
                                    <input type="file" name="image" id="hijibiji" class="form-control" placeholder="Image" accept="image/*" />

                                </div>
                            </div>
                            <div class="col-md-6 mt-2">
                                <img src="" id="imagePreview" alt="">
                                @if(isset($opinion))
                                    <img src="{{ static_asset($opinion->image) }}" alt="" style="height: 80px">
                                @endif
                            </div>
                        </div>

                        <div class="row mt-3 image-comment">
                            <div class="col-sm-6">
                                <label for="">Student Image Comment</label>
                                <div class="mt-1">
                                    <input type="file" name="comment" id="commentInput" class="form-control" placeholder="Comment Image" accept="image/*" />

                                </div>
                            </div>
                            <div class="col-md-6 mt-2">
                                <img src="" id="commentPreview" alt="">
                                @if(isset($opinion))
                                    <img src="{{ static_asset($opinion->comment) }}" alt="" style="height: 80px">
                                @endif
                            </div>
                        </div>
                        <div class="row mt-3 video-comment d-none">
                            <div class="col-sm-6">
                                <label for="">Student Video Comment <span class="text-danger"> (Youtube Link) </span> </label>
                                <div class="mt-1">
                                    <input type="text" name="video_link" id="video_link" class="form-control" placeholder="Enter youtube link" value="{{ isset($opinion->video_link) ? $opinion->video_link : ''}}" />
                                </div>
                            </div>

                        </div>

                        {{--<div class="row mt-3">
                            <div class="col-md-12 mt-2">
                                <label for="" class="col-md-4">Student Comment</label>
                                <div class="col-md-12">
                                    <textarea type="text" name="comment" class="form-control" placeholder="Long Description" id="summernote" cols="30" rows="10">{{ isset($opinion) ? $opinion->comment : '' }}</textarea>
                                </div>
                            </div>
                        </div>--}}
                        <div class="row mt-3">
                            <label for="" class="col-md-3"> Student Opinion Status</label>
                            <div class="col-md-2">
                                <div class="material-switch">
                                    <input id="someSwitchOptionLight" name="status" type="checkbox" {{ isset($opinion) && $opinion->status == 0 ? '' : 'checked' }} />
                                    <label for="someSwitchOptionLight" class="label-light"></label>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-2">
                            <input type="submit" class="col-md-4 mx-auto btn btn-yellow" value="{{ isset($opinion) ? 'Update' : 'Create' }}" />
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
@push('style')

    <style>
        input[switch]+label {
            margin-bottom: 0px;
        }

    </style>
@endpush

@push('script')

    {{--    @include('backend.includes.assets.plugin-files.datatable')--}}
    {{--    @include('backend.includes.assets.plugin-files.date-time-picker')--}}
    {{--@include('backend.includes.assets.plugin-files.editor')--}}
    <script>
        // $('textarea[data-editor="summernote"]').summernote({height:70,inheritPlaceholder: true})
    </script>
    <script>
        $(document).ready(function() {
            // default selected
            let content_type = "{{ isset($opinion) ? $opinion->show_type : '' }}";
            if(content_type == 'video'){
                $(".video-comment").removeClass('d-none');
                $(".image-comment").addClass('d-none');
            }else{
                $(".video-comment").addClass('d-none');
                $(".image-comment").removeClass('d-none');
            }

            // Preview for Student Image
            $('#hijibiji').change(function(event) {
                var imgURL = URL.createObjectURL(event.target.files[0]);
                $('#imagePreview').attr('src', imgURL).css({
                    height: '150px',
                    width: '150px',
                    marginTop: '5px'
                });
            });

            // Preview for Student Comment Image
            $('#commentInput').change(function(event) {
                var imgURL = URL.createObjectURL(event.target.files[0]);
                $('#commentPreview').attr('src', imgURL).css({
                    height: '150px',
                    width: '150px',
                    marginTop: '5px'
                });
            });
            $("#show_type").on('change',function(){
               let show_type = $(this).val();
               if(show_type == 'video'){
                    $(".video-comment").removeClass('d-none');
                    $(".image-comment").addClass('d-none');
               }else{
                    $(".video-comment").addClass('d-none');
                    $(".image-comment").removeClass('d-none');
               }
            })
        });
    </script>


@endpush
