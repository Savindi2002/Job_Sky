<?php

namespace App\Http\Controllers;
use Auth;
use App\Models\Application;
use Illuminate\Http\Request;
use App\Models\Category;


class ApplicationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $applications = Application::latest()->paginate(10);
        return view('applications.index', compact('applications','categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('applications.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'full_name'     => 'required|string|max:255',
            'email'         => 'required|email',
            'phone'         => 'required|string',
            'linkedin'      => 'nullable|url',
            'experience'    => 'required|numeric|min:0',
            'key_skills'    => 'required|string',
            'resume'        => 'required|file|mimes:pdf,doc,docx|max:2048',
            // 'job_post_id'   => 'required|exists:job_posts,id',
        ]);

       
        if ($request->hasFile('resume')) {
            $resumePath = $request->file('resume')->store('resumes', 'public');
        } else {
            dd('Resume not found in request.');
        }

     

        $application = Application::create([
            'user_id'       => Auth::id(),
            'job_post_id'   => $request->job_post_id,
            'full_name'     => $validated['full_name'],
            'email'         => $validated['email'],
            'phone'         => $validated['phone'],
            'linkedin'      => $validated['linkedin'],
            'experience'    => $validated['experience'],
            'key_skills'    => $validated['key_skills'],
            'resume_path'   => $resumePath,
            'applied_date'  => now(),
        ]);

        return redirect()->back()->with('success', 'Application submitted!');


    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Application  $application
     * @return \Illuminate\Http\Response
     */
    public function show(Application $application)
    {
        return view('applications.show', compact('application'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Application  $application
     * @return \Illuminate\Http\Response
     */
    public function edit(Application $application)
    {
        return view('applications.edit', compact('application'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Application  $application
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Application $application)
    {
         $validated = $request->validate([
            'full_name'     => 'required|string|max:255',
            'email'         => 'required|email',
            'phone'         => 'required|string',
            'linkedin'      => 'nullable|url',
            'experience'    => 'required|numeric|min:0',
            'key_skills'    => 'required|string',
            'resume'        => 'nullable|file|mimes:pdf,doc,docx|max:2048',
        ]);

        if ($request->hasFile('resume')) {
            Storage::disk('public')->delete($application->resume_path);
            $resumePath = $request->file('resume')->store('resumes', 'public');
        } else {
            $resumePath = $application->resume_path;
        }

        $application->update([
            'full_name'     => $validated['full_name'],
            'email'         => $validated['email'],
            'phone'         => $validated['phone'],
            'linkedin'      => $validated['linkedin'],
            'experience'    => $validated['experience'],
            'key_skills'    => $validated['key_skills'],
            'resume_path'   => $resumePath,
        ]);

        return redirect()->route('applications.index')->with('success', 'Application updated!');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Application  $application
     * @return \Illuminate\Http\Response
     */
    public function destroy(Application $application)
    {
        Storage::disk('public')->delete($application->resume_path);
        $application->delete();
        return redirect()->route('applications.index')->with('success', 'Application deleted.');
    }
}

