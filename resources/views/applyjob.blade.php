@extends('layouts.app')
    @section('content')
    <body>

<div class="form-container">
      <h1>{{ $job->title }}</h1>
    <h2>Job Application Form</h2>
    <form action="{{route('insert')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="full_name">Full Name*</label>
            <input type="text" id="full_name" name="full_name" required>
        </div>

        <div class="form-group">
            <label for="email">Email Address*</label>
            <input type="email" id="email" name="email" required>
        </div>

        <div class="form-group">
            <label for="phone">Phone Number*</label>
            <input type="tel" id="phone" name="phone" required>
        </div>

        <div class="form-group">
            <label for="linkedin">LinkedIn Profile URL</label>
            <input type="url" id="linkedin" name="linkedin">
        </div>

        <div class="form-group">
            <label for="experience">Total Years of Experience*</label>
            <input type="number" id="experience" name="experience" min="0" step="0.5" required>
        </div>

        <div class="form-group">
            <label for="key_skills">Key Skills* (Separate with commas)</label>
            <textarea id="key_skills" name="key_skills" rows="3" required></textarea>
        </div>

        <div class="form-group">
            <label for="resume">Resume/CV Upload* (PDF, DOC, DOCX)</label>
            <input type="file" id="resume" name="resume" accept=".pdf,.doc,.docx" required>
        </div>

        <div class="form-buttons">
            <button type="submit" class="btn-primary">Submit</button>
            <button type="reset" class="btn-outline">Clear</button>
        </div>
    </form>
</div>


</body>





    @endsection