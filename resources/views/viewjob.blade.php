{{-- @extends('layouts.app')

@section('content')
<div class="container my-5">
    <div class="p-4 rounded mb-5" style="background-color: rgb(240, 249, 255); border: 1px solid rgb(56, 189, 248);">
        <div class="job-info d-flex align-items-center mb-4">
            <img src="/img/cross_logo.png" 
                 alt="Company Logo" 
                 class="me-4 rounded" 
                 style="width: 100px; height: 100px; object-fit: cover;">
            <div>
                <h1>{{ $job->title }}</h1>
                <div class="job-meta text-muted small d-flex align-items-center" style="color: #6b7280;">
                    <span class="me-4 d-flex align-items-center">
                        <img src="/images/location-icon.png" alt="Location" style="width: 16px; height: 16px;" class="me-1">
                        {{ $job->location }}
                    </span>
                    <span class="me-4 d-flex align-items-center">
                        <img src="/images/jobtype-icon.png" alt="Job Type" style="width: 16px; height: 16px;" class="me-1">
                        {{ ucfirst($job->jobtype) }}
                    </span>
                    <span class="d-flex align-items-center">
                        <img src="/images/money-icon.png" alt="CTC" style="width: 16px; height: 16px;" class="me-1">
                        CTC: ${{ number_format($job->salary, 2) }}
                    </span>
                </div>
            </div>
        </div>
        <div>
            <p style="text-align: right; font-size: 0.8rem; color: gray;">
                Posted {{ $job->created_at->diffForHumans() }}
            </p>
        </div>
    </div>
</div>



            </div>
        </div>
        <div>
            {{-- <a href="{{ route('application.create', ['job_id' => $job->id]) }}" class="apply-btn">Apply Now</a> --}}
            {{-- <p style="text-align: right; font-size: 0.8rem; color: gray;">
                Posted {{ $job->created_at->diffForHumans() }}
            </p>
        </div>
    </div>
    <div>
        

    <h2>Job Description</h2>
    <p>{{ $job->description }}</p>

    <h2>Key Responsibilities</h2>
    <ul>
        @foreach(explode("\n", $job->key_responsibilities) as $item)
            <li>{{ $item }}</li>
        @endforeach
    </ul>

    <h2>Skills Required</h2>
            
    <ul>
        @foreach(explode("\n", $job->requirements) as $item)
            <li>{{ $item }}</li>
        @endforeach
    </ul>

   
    <div class="text-end mb-3" >
    <a href="{{ route('applyjob_page', ['id' => $job->id]) }}" class="btn btn-primary" style="margin: 0 auto;
    display: table;">Apply Now</a> 
     </div>
</div>

    {{-- <a href="{{ route('application.create', ['job_id' => $job->id]) }}" class="apply-btn">Apply Now</a> --}}
{{-- </div>



@endsection --}}
@extends('layouts.app')

@section('content')
<div class="container my-5">
    <div class="p-4 rounded mb-5" style="background-color: rgb(240, 249, 255); border: 1px solid rgb(56, 189, 248);">
        <div class="job-info d-flex align-items-center mb-4">
            <img src="/img/cross_logo.png" 
                 alt="Company Logo" 
                 class="me-4 rounded" 
                 style="width: 100px; height: 100px; object-fit: cover;">
            <div>
                <h1>{{ $job->title }}</h1>
                <div class="job-meta text-muted small d-flex align-items-center" style="color: #6b7280;">
                    <span class="me-4 d-flex align-items-center">
                        <img src="/img/location.png" alt="Location" style="width: 16px; height: 16px;" class="me-1">
                        {{ $job->location }}
                    </span>
                    <span class="me-4 d-flex align-items-center">
                        <img src="/img/time.png" alt="Job Type" style="width: 16px; height: 16px;" class="me-1">
                        {{ ucfirst($job->jobtype) }}
                    </span>
                    <span class="d-flex align-items-center">
                        <img src="/img/money.png" alt="CTC" style="width: 16px; height: 16px;" class="me-1">
                        CTC: ${{ number_format($job->salary, 2) }}
                    </span>
                </div>
            </div>
        </div>

        <p class="text-end" style="font-size: 0.8rem; color: gray;">
            Posted {{ $job->created_at->diffForHumans() }}
        </p>

        {{-- Job Description and Details inside the bordered card --}}
        <div class="mt-4">
            <h2 class="mb-3">Job Description</h2>
            <p>{{ $job->description }}</p>

            <h2 class="mt-4 mb-2">Key Responsibilities</h2>
            <ul>
                @foreach(explode("\n", $job->key_responsibilities) as $item)
                    <li>{{ $item }}</li>
                @endforeach
            </ul>

            <h2 class="mt-4 mb-2">Skills Required</h2>
            <ul>
                @foreach(explode("\n", $job->requirements) as $item)
                    <li>{{ $item }}</li>
                @endforeach
            </ul>

            <div class="text-end my-4">
                <a href="{{ route('applyjob_page', ['id' => $job->id]) }}" class="btn btn-primary" style="margin: 0 auto; display: table;">Apply Now</a>
            </div>
        </div>
    </div>
</div>
@endsection

