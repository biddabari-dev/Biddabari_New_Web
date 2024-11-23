<div class="blog-details-area">
    <h1 id="title"> {{ $circular->job_title }} </h1>
    <div class="blog-datetimeby d-flex">
        <p class="mb-0"><span class="text-brand"> Deadline : </span> <i class="fa-regular fa-calendar-days text-brand"></i>
            {{ date('d M Y', strtotime($circular->expire_date)) }}
        </p>
    </div>
    <div class="pdf-container">
        @php
        $filePath = $circular->image;
        $extension = pathinfo($filePath, PATHINFO_EXTENSION);
        if($extension == 'pdf'){
            $pdf = true;
        }else{
            $pdf = false;
        }
        @endphp
        @if($pdf == true)
        <iframe id="pdf-frame"
            src="{{ static_asset($circular->image) }}"
            class="w-100"
            style="height: 100vh;"
            type="application/pdf">
        </iframe>
        @else
            <img src="{{ static_asset($circular->image) }}" class="w-100" style="height: 100vh;" alt="{{ $circular->job_title }}">
        @endif
    </div>
    <div class="mt-3">
        {!! $circular->description !!}
    </div>
</div>
