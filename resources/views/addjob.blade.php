@extends('layouts.app')
    @section('content')
    <body>
        <div class="job-form-container">
    <h2>Create Job Post</h2>
    <form action="{{route('addjob')}}" method="POST">
      @csrf
      <div class="form-group">
        <label for="title">Job Title</label>
        <input type="text" id="title" name="title" required>
      </div>

      <div class="form-group">
        <label for="description">Job Description</label>
        <textarea id="description" name="description" required></textarea>
      </div>

      <div class="form-group">
        <label for="key_responsibilities">Key Responsibilities</label>
        <textarea id="key_responsibilities" name="key_responsibilities" required></textarea>
      </div>

      <div class="form-group">
        <label for="requirements">Requirements</label>
        <textarea id="requirements" name="requirements" required></textarea>
      </div>

      <div class="form-group-inline">
        <div class="form-group">
          <label for="posted_date">Posted Date</label>
          <input type="date" id="posted_date" name="posted_date" required>
        </div>

        <div class="form-group">
          <label for="location">Location</label>
          <input type="text" id="location" name="location" required>
        </div>
      </div>

      <div class="form-group-inline">
        <div class="form-group">
          <label for="salary">Salary ($)</label>
          <input type="number" id="salary" name="salary" required>
        </div>

        <div class="form-group">
          <label for="is_visible">Is Visible</label>
          <select id="is_visible" name="is_visible" required>
            <option value="1">Yes</option>
            <option value="0">No</option>
          </select>
        </div>
      </div>

      <div class="form-group-inline">
        <div class="form-group">
          <label for="status">Status</label>
          <select id="status" name="status" required>
            <option value="1">Open</option>
            <option value="0">Closed</option>
          </select>
        </div>

        <div class="form-group">
          <label for="job_type">Job Type</label>
          <select id="jobtype" name="jobtype" required>
            <option value="full_time">Full-Time</option>
            <option value="part_time">Part-Time</option>
            <option value="contract">Contract</option>
            <option value="internship">Internship</option>
            <option value="temporary">Temporary</option>
          </select>
        </div>
      </div>

      <button type="submit">Submit Job</button>
    </form>
  </div>
</body>

 @endsection



  