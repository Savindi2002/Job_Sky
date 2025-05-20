

 @extends('layouts.app')
    @section('content')
<div class="container">
    <h2 class="mb-4">All Job Applications</h2>
    <table class="table table-bordered table-striped">
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
@endsection