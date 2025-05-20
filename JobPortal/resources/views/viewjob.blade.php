{{-- 
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="job-card">
        <div class="job-info">
            <img src="/images/slack.png" alt="Company Logo">
            <div>
                <h1>{{ $job->title }}</h1>
                <div class="job-meta">
                    <span><i class="fas fa-map-marker-alt"></i> {{ $job->location }}</span>
                    <span><i class="fas fa-user-tie"></i> {{ ucfirst($job->jobtype) }}</span>
                    <span><i class="fas fa-eye"></i> CTC: ${{ number_format($job->salary, 2) }}</span>
                </div>
            </div>
        </div>
        <div>
            <a href="{{ route('application.create', ['job_id' => $job->id]) }}" class="apply-btn">Apply Now</a>
            <p style="text-align: right; font-size: 0.8rem; color: gray;">
                Posted {{ $job->created_at->diffForHumans() }}
            </p>
        </div>
    </div>

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

    <a href="{{ route('application.create', ['job_id' => $job->id]) }}" class="apply-btn">Apply Now</a>
</div>
@endsection 
--}}


   @extends('layouts.app')

@section('content')
<div class="container">
    <div class="job-card">
        <div class="job-info">
            <img src="https://images.pexels.com/photos/258174/pexels-photo-258174.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2" alt="Company Logo">
            <div>
                <h1>{{ $job->title }}</h1>
                <div class="job-meta">
                    <span><i class="fas fa-map-marker-alt"></i> {{ $job->location }}</span>
                    <span><i class="fas fa-user-tie"></i> {{ ucfirst($job->jobtype) }}</span>
                    <span><i class="fas fa-eye"></i> CTC: ${{ number_format($job->salary, 2) }}</span>
                </div>
            </div>
        </div>
        <div>
            {{-- <a href="{{ route('application.create', ['job_id' => $job->id]) }}" class="apply-btn">Apply Now</a> --}}
            <p style="text-align: right; font-size: 0.8rem; color: gray;">
                Posted {{ $job->created_at->diffForHumans() }}
            </p>
        </div>
    </div>

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
</div>

<footer class="footer">
    <div class="footer-left">
        <img src="/images/logo.png" alt="Insiderjobs Logo" class="logo">
        <span><strong>Insider</strong>jobs</span>
        <span class="rights">All right reserved</span>

    <div class="footer-right">
        <a href="#"><i class="fa-brands fa-square-instagram"></i></a>
        <a href="#"><i class="fab fa-twitter"></i></a>
        <a href="#"><i class="fab fa-instagram"></i></a>
    </div>
</footer>

@endsection
