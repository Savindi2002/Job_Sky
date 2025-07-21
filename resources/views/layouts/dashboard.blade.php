{{-- {{-- @extends('layouts.app')

@section('content')
<div class="container text-center py-5">
    <h1 class="mb-4">Employer Dashboard</h1>

    <div class="row justify-content-center">
        <div class="col-md-3 mb-3">
            <a href="{{ route('adminviewjobs') }}" class="btn btn-primary btn-lg w-100">View Applications</a>
        </div>
        <div class="col-md-3 mb-3">
            <a href="{{ route('managejobs') }}" class="btn btn-secondary btn-lg w-100">Manage Jobs</a>
        </div>
        <div class="col-md-3 mb-3">
            <a href="{{ route('addjob_page') }}" class="btn btn-success btn-lg w-100">Add New Job</a>
        </div>
    </div>
</div>
@endsection --}}


{{-- <div class="container text-center py-5">
    <h1 class="mb-4">Employer Dashboard</h1>

    <div class="row justify-content-center">
        <div class="col-md-3 mb-3">
            <a href="{{ route('adminviewjobs') }}" class="btn btn-primary btn-lg w-100">View Applications</a>
        </div>
        <div class="col-md-3 mb-3">
            <a href="{{ route('managejobs') }}" class="btn btn-secondary btn-lg w-100">Manage Jobs</a>
        </div>
        <div class="col-md-3 mb-3">
            <a href="{{ route('addjob_page') }}" class="btn btn-success btn-lg w-100">Add New Job</a>
        </div>
          <div class="col-md-3 mb-3">
            <a href="{{ route('addcategory_page') }}" class="btn btn-success btn-lg w-100">Add Category</a>
        </div>
    </div>
</div>  --}}


@extends('layouts.app')

@section('content')
<style>
    body {
        margin: 0;
        padding: 0;
        font-family: Arial, sans-serif;
        color: white;
        background: url('/images/bg1.jpg') no-repeat center center fixed;
        background-size: cover;
        animation: bgChange 15s infinite alternate ease-in-out;
    }

    @keyframes bgChange {
        0% {
            background-image: url('/img/bg1.png');
        }
        50% {
            background-image: url('/img/bg2.png');
        }
        100% {
            background-image: url('/img/bg3.png');
        }
    }

    .navbar-custom {
        background-color: black;
        padding: 1rem 2rem;
    }

    .navbar-custom a {
        color: white;
        font-weight: bold;
        margin-right: 15px;
        text-decoration: none;
        transition: color 0.3s ease;
    }

    .navbar-custom a:hover {
        color: #ccc;
    }

    .dashboard-container {
        background-color: rgba(0, 0, 0, 0.7);
        padding: 40px;
        border-radius: 10px;
        margin-top: 80px;
    }

    h1 {
        font-weight: bold;
    }

    .btn {
        font-size: 1rem;
        font-weight: bold;
    }
</style>



<!-- Centered Dashboard -->
<div class="container d-flex justify-content-center">
    <div class="dashboard-container text-center">
        <h1 class="mb-4">Employer Dashboard</h1>
        <div class="row justify-content-center">
            <div class="col-md-6 col-lg-4 mb-3">
                <a href="{{ route('adminviewjobs') }}" class="btn btn-primary btn-lg w-100">View Applications</a>
            </div>
            <div class="col-md-6 col-lg-4 mb-3">
                <a href="{{ route('managejobs') }}" class="btn btn-secondary btn-lg w-100">Manage Jobs</a>
            </div>
            <div class="col-md-6 col-lg-4 mb-3">
                <a href="{{ route('addjob_page') }}" class="btn btn-success btn-lg w-100">Add New Job</a>
            </div>
            <div class="col-md-6 col-lg-4 mb-3">
                <a href="{{ route('addcategory_page') }}" class="btn btn-info btn-lg w-100">Add Category</a>
            </div>
        </div>
    </div>
</div>
@endsection
