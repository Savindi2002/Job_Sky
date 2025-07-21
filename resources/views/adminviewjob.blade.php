
{{-- hh --}}
 @extends('layouts.app')
    @section('content')
<div class="container">
    <h2 class="mb-4" style="font-family: 'Segoe UI', sans-serif; font-size: 26px; color: #251f8f; font-weight: 600; border-bottom: 3px solid #143197; padding-bottom: 8px; margin-bottom: 20px; text-shadow: 1px 1px 2px rgba(0,0,0,0.1);">
    All Job Applications
</h2>

        <div class=" p-4 shadow rounded bg-white mb-5" style="overflow: scroll">
        <div class="job-info d-flex align-items-center mb-4">
    <table class="table table-bordered table-striped" style="border: 2px solid #143197;">

        <thead>
            <tr>
                <th>User Full Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>LinkedIn</th>
                <th>Experience</th>
                <th>Key Skills</th>
                <th>Applied Date</th>
                <th>Resume</th>
                <th>Job Title</th>
                <th>Description</th>
                <th>Responsibilities</th>
                <th>Requirements</th>
                <th>Location</th>
                <th>Salary</th>
                <th>Job Type</th>
                <th>Job Status</th>
                <th>Visible</th>
            </tr>
        </thead>
        <tbody>
            @foreach($applications as $app)
            <tr>
                <td>{{ $app->full_name ?? $app->user->name }}</td>
                <td>{{ $app->email ?? $app->user->email }}</td>
                <td>{{ $app->phone }}</td>
                <td>{{ $app->linkedin }}</td>
                <td>{{ $app->experience }}</td>
                <td>{{ $app->key_skills }}</td>
                <td>{{ $app->applied_date }}</td>
                <td>
                    @if($app->resume_path)
                        <a href="{{ asset('storage/' . $app->resume_path) }}" target="_blank">View Resume</a>
                    @endif
                </td>
                <td>{{ $app->jobPost->title ?? '' }}</td>
                <td>{{ $app->jobPost->description ?? '' }}</td>
                <td>{{ $app->jobPost->key_responsibilities ?? '' }}</td>
                <td>{{ $app->jobPost->requirements ?? '' }}</td>
                <td>{{ $app->jobPost->location ?? '' }}</td>
                <td>{{ $app->jobPost->salary ?? '' }}</td>
                <td>{{ $app->jobPost->jobtype ?? '' }}</td>
                <td>{{ $app->jobPost->status ?? '' }}</td>
                <td>{{ $app->jobPost->is_visible ? 'Yes' : 'No' }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
    
</div>
</div>
</div>
@endsection