{{-- @extends('layouts.app')

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
          <div class="col-md-3 mb-3">
            <a href="{{ route('addcategory_page') }}" class="btn btn-success btn-lg w-100">Add Category</a>
        </div>
    </div>
</div>