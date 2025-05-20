@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="mb-4">Manage Job Posts</h1>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    {{-- <a href="{{ route('jobs.create') }}" class="btn btn-primary mb-3">Create New Job</a> --}}

    <table class="table table-bordered table-striped">
        <thead>
            <tr>
                <th>Title</th>
                <th>Description</th>
                <th>Key Responsibilities</th>
                <th>Requirements</th>
                <th>Posted Date</th>
                <th>Location</th>
                <th>Salary</th>
                <th>Visible</th>
                <th>Status</th>
                <th>Job Type</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @forelse($jobs as $job)
                <tr>
                    <td>{{ $job->title }}</td>
                    <td>{{ Str::limit($job->description, 50) }}</td>
                    <td>{{ Str::limit($job->key_responsibilities, 50) }}</td>
                    <td>{{ Str::limit($job->requirements, 50) }}</td>
                    <td>{{ $job->posted_date }}</td>
                    <td>{{ $job->location }}</td>
                    <td>${{ number_format($job->salary, 2) }}</td>
                    <td>{{ $job->is_visible ? 'Yes' : 'No' }}</td>
                    <td>
                        @if($job->status == 1)
                            Active
                        @else
                            Inactive
                        @endif
                    </td>
                    <td>{{ ucfirst($job->jobtype) }}</td>
                    <td>
                        <form action="{{ route('jobs.destroy', $job->id) }}" method="POST" style="display:inline;">
    @csrf
    @method('DELETE')
    <button onclick="return confirm('Are you sure you want to delete this job?')" class="btn btn-sm btn-danger">
        Delete
    </button>
</form>

                         {{-- <a href="{{ route('jobs.edit', $job->id) }}" class="btn btn-sm btn-warning">Edit</a> --}}
                         {{-- <form action="{{ route('jobs.destroy', $job->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button onclick="return confirm('Are you sure?')" class="btn btn-sm btn-danger">Delete</button>
                         </form> --}}
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="11" class="text-center">No jobs found.</td>
                </tr>
            @endforelse
        </tbody>
    </table>
</div>
@endsection
