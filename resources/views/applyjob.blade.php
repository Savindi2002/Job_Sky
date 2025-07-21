@extends('layouts.app')
    @section('content')
    <body>

<div class="form-container" style="max-width: 600px; margin: 0 auto; padding: 30px; border: 4px solid #8e44ad; border-radius: 15px; background-color: #fdfcff; box-shadow: 0 8px 16px rgba(0,0,0,0.1);">

      <h1 style="font-family: 'Segoe UI', sans-serif; color: #2c3e50; font-size: 32px; font-weight: 700; margin-bottom: 15px; text-shadow: 1px 1px 2px rgba(0,0,0,0.1);">
  {{ $job->title }}
</h1>

    <h2 style="font-family: 'Segoe UI', sans-serif; color: #2c3e50; font-size: 28px; font-weight: 600; border-bottom: 2px solid #3498db; padding-bottom: 6px; margin-bottom: 20px;">Job Application Form</h2>
    <img src="/img/application.png" alt="icon" style="width: 45px; height: 45px; margin-left: 8px; vertical-align: middle;">

    <form action="{{route('insert')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <input type="hidden" name="job_post_id" value="{{ $job->id }}">

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