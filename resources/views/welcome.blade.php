<!-- resources/views/jobs.blade.php -->
<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insider Jobs</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha512-Fo3rlrZj/k7ujTnH1zjfbQA5tPB5Fw5cSNGtR/N2Pq0zJ9b0QjOD5YFJlFQ1bFYZ/3gEA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="{{ asset('css/jobs.css') }}">
</head>
<body>
    <header class="header">
        <div class="container">
            <div class="logo"> <i class="fas fa-briefcase"></i> Insider<span>jobs</span></div>
            <div class="auth-links">
                <a href="#">Recruiter Login</a>
                <button class="login-btn">Login</button>
            </div>
        </div>
    </header> -->


    @extends('layouts.app')
    @section('content')

    {{-- <a href="{{route('adminviewjobs')}}">View Job</a>
    <a href="{{route('managejobs')}}">Manage Job</a> --}}

    <section class="hero">
        <h1>Over 10,000+ jobs to apply</h1>
        <p>Your Next Big career move starts Right Here</p>
        <div class="search-bar">
            <input type="text" placeholder="Search for jobs">
            <input type="text" placeholder="Location">
            <button>Search</button>
        </div>
    </section>

    <section class="trusted">
        <p>Trusted by</p>
        <div class="logos">
            <img src="/images/microsoft.png" alt="Microsoft">
            <img src="/images/walmart.png" alt="Walmart">
            <img src="/images/accenture.png" alt="Accenture">
            <img src="/images/samsung.png" alt="Samsung">
            <img src="/images/amazon.png" alt="Amazon">
            <img src="/images/adobe.png" alt="Adobe">
        </div>
    </section>

    <main class="main-content">
        <aside class="filters">
            <aside class="filters">
    <h3>Search by Categories</h3>
    <ul>
        @foreach($categorys as $category)
            <li><a href="#">{{ $category->name }}</a></li>
        @endforeach
    </ul>
</aside>


            {{-- <h3>Search by Categories</h3>
            <ul>
                <li><a href=""> Programming</a>
        
            </ul> --}}
            <aside class="filters">
    
    </ul>
</aside>

        
        </aside>

         {{-- <a href="{{route('addjob_page')}}">Add Jobs</a> --}}
        <section class="jobs">
    <h2>Latest Jobs</h2>
    <div class="job-list">
        @foreach($jobs as $job)
        <div class="job-card">
            <div class="company-logo">
                <img src="/images/slack.png" alt="{{ $job->title }}">
            </div>
            <h4>{{ $job->title }}</h4>
            <span class="location">{{ $job->location }}</span>
            <span class="level">{{ ucfirst($job->jobtype) }}</span>
            <p>{{ Str::limit($job->description, 80) }}</p>
            <div class="job-actions">
                <a href="{{ route('viewjob', ['id' => $job->id]) }}">View Job</a>
                <a href="{{ route('applyjob_page', ['id' => $job->id]) }}">Apply Now</a>
            </div>
        </div>
        @endforeach
    </div>

    {{-- <div class="pagination">
        <button class="active">1</button>
        <button>2</button>
        <button>3</button>
        <button>4</button>
    </div> --}}
</section>
    </main>

    <section class="app-download">
        <h2>Download Mobile App For Better Experience</h2>
        <div class="store-links">
            <img src="/images/googleplay.png" alt="Google Play">
            <img src="/images/appstore.png" alt="App Store">
        </div>
    </section>


    @endsection
    <!-- <footer class="footer">
        <div class="container">
            <div class="logo"> <i class="fas fa-briefcase"></i> Insider<span>jobs</span></div>
            <p>All rights reserved</p>
            <div class="social-icons">
                <i class="fab fa-facebook"></i>
                <i class="fab fa-twitter"></i>
                <i class="fab fa-instagram"></i>
            </div>
        </div>
    </footer> -->
<!-- </body>
</html> -->
