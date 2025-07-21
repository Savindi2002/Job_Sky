<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">


    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Joby Sky</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap" rel="stylesheet">

<!-- Font Awesome CDN -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" integrity="sha512-R4pqcOYV8lt7snD1Q7DH7bj9AA1P1tHSC3+Gxw7bl6gkN6tGz8VYBQ5Yx0DCE8B4vGZMnK0AZGTTsFJ0v0LXVw==" crossorigin="anonymous" referrerpolicy="no-referrer" />


    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/jobs.css') }}">
</head>
<body>
    <div id="app  insiderXblueNav">
        {{-- <nav class="navbar navbar-expand-md navbar-light bg-blue shadow-sm"> --}}
            {{-- <nav class="navbar navbar-expand-md insiderXpurpleNav shadow-sm"> --}}
                {{-- <nav class="navbar navbar-expand-md insiderXblueNav shadow-sm"> --}}
                    <nav class="navbar navbar-expand-md insiderXblueNav shadow-sm">
            <div class="container  insiderXblueNav">
               
                {{-- <header class="header">
        <div class="container">
            <div class="logo"> <i class="fas fa-briefcase"></i> Insider<span>jobs</span></div>
            <div class="auth-links">
        </div>
    </header> --}}


   <header class="insiderXuniqHeader">
    <div class="insiderXuniqContainer">
        <div class="insiderXuniqLogoBox">
            {{-- <i class="fas fa-briefcase insiderXuniqIcon"></i> --}}
          <img src="/img/logo.png" style="width: 50px; height: 50px; border-radius: 50%;" />

            <span class="insiderXuniqLogoText">Insider<span class="insiderXuniqSpan">Jobs</span></span>
        </div>
    </div>
</header>





                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}" style="background-color: #007bff; color: white; padding: 8px 16px; border-radius: 20px; text-decoration: none; display: inline-block;">
    {{ __('Login') }}
</a>

                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}" style="background-color: #007bff; color: white; padding: 8px 16px; border-radius: 20px; text-decoration: none; display: inline-block;">
    {{ __('Register') }}
</a>

                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        

        <main class="py-4">
            @yield('content')
        </main>
    </div>


    <footer class="footer">
        <div class="container">
            <div class="logo"> <i class="fas fa-briefcase"></i> Insider<span>jobs</span></div>
            <p>All rights reserved</p>
            <div class="social-icons">
                <i class="fa fa-facebook"></i>
                <i class="fa fa-twitter"></i>
                <i class="fa fa-instagram"></i>
            </div>
        </div>
    </footer>
</body>
</html>
