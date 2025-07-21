
    @extends('layouts.app')
    @section('content')


    {{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha512-Fo3rlrZj/k7ujTnH1zjfbQA5tPB5Fw5cSNGtR/N2Pq0zJ9b0QjOD5YFJlFQ1bFYZ/3gEA==" crossorigin="anonymous" referrerpolicy="no-referrer" /> --}}

    <section class="hero-section">
    <div class="hero-content">
        <h1>Over 10,00+ jobs to apply</h1>
        <p>Your Next Big career move starts Right Here</p>
        <div class="search-bar">
            <input type="text" placeholder="Search for jobs">

            <button>Search</button>
        </div>
       
    </div>
</section>

    <section class="trusted container-fluid">
        
        <div class="row">
        <div class="logos col-md-8 offset-md-4">
            <img src="/img/microsoft.png"  style="width:10%;" alt="Microsoft">
            <img src="/img/welmart.png" style="width:10%;" alt="Walmart">
            <img src="/img/accenture.png" style="width:10%;" alt="Accenture">
            <img src="/img/samsung.png" style="width:10%;" alt="Samsung">
            <img src="/img/amazon.png" style="width:10%;" alt="Amazon">
            <img src="/img/adobe.png" style="width:10%;" alt="Adobe">
        </div>
        </div>
    </section>

    <main class="main-content">
        <aside class="filters">
            {{-- <aside class="filters">
    <h3>Search by Categories</h3>
    <ul>
        @foreach($categorys as $category)
            <li><a href="#">{{ $category->name }}</a></li>
        @endforeach
    </ul>
</aside> --}}


             {{-- <h3>Search by Categories</h3>
            <ul>
                <li><a href=""> Programming</a>
        
            </ul> 
            <aside class="filters">
    
    </ul>
</aside> --}}



         {{-- <a href="{{route('addjob_page')}}">Add Jobs</a> --}}
        <section class="jobs">
    <h2 class="text-align: center;
    font-weight: bold;
    font-size: 2rem; 
    margin-bottom: 20px;">Latest Jobs</h2>
    <div class="job-cards" >
        @foreach($jobs as $job)
        <div class="job-card">
            <div class="company-logo">
                <img  className='h-8'src="/img/cross_logo.png" alt="{{ $job->title }}" style="width: 85px;">
            </div>
            <h4>{{ $job->title }}</h4>
            <span class="location">{{ $job->location }}</span>
            <span class="level">{{ ucfirst($job->jobtype) }}</span>
            <p>{{ Str::limit($job->description, 80) }}</p>
            <div class="job-actions">
                <a href="{{ route('viewjob', ['id' => $job->id]) }}" class="view-job-btn mb-1">View Job</a>
                <a href="{{ route('applyjob_page', ['id' => $job->id]) }}" class="apply-now-btn">Apply Now</a>
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
                    <img src="/img/girl.jpeg" alt="girl" class="mb-2">
        <div class="store-links">
            <img src="/img/googlestore.png" alt="Google Play">
            <img src="/img/appstore.png" alt="App Store">
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
