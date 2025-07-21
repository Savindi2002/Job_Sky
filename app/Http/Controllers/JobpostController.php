<?php

namespace App\Http\Controllers;
use App\Models\Application;
use App\Models\Jobpost;
use Illuminate\Http\Request;
use Auth;
use App\Models\Category;

class JobpostController extends Controller
{
    /**

     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $jobs = Jobpost::latest()->where('status',1)->paginate(10);
        return view('jobposts.index', compact('jobs'));
    }



     public function viewjob($id)
{
    $job = JobPost::findOrFail($id);
    return view('viewjob', compact('job'));
}

   public function applyjob($id)
{
    $job = JobPost::findOrFail($id);
    return view('applyjob', compact('job'));
}




    public function manage()
    {
        $jobs = JobPost::where('status',1)->get();
        return view('managejob', compact('jobs'));
    }
    




    // Admin - View all applications with related job/user data
    public function adminviewjobs()
    {
        $applications = Application::with(['user', 'jobPost'])->get();
        return view('adminviewjob', compact('applications'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('jobposts.create');
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
            'title' => 'required|string|max:255',
            'description' => 'required',
            'key_responsibilities' => 'required',
            'requirements' => 'required',
            'posted_date' => 'required|date',
            'location' => 'required|string|max:255',
            'salary' => 'required|numeric',
            'is_visible' => 'required|boolean',
            'status' => 'required',
            'jobtype' => 'required|in:full_time,part_time,contract,internship,temporary',
        ]);


        // Jobpost::create($validated);


        $job = Jobpost::create([
        'title' => $validated['title'],
        'description' => $validated['description'],
        'key_responsibilities' => $validated['key_responsibilities'],
        'requirements' => $validated['requirements'],
        'posted_date' => $validated['posted_date'],
        'location' => $validated['location'],
        'salary' => $validated['salary'],
        'is_visible' => $validated['is_visible'],
        'status' => $validated['status'],
        'jobtype' => $validated['jobtype'],
    ]);

        return redirect()->back()->with('success', 'Job created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Jobpost  $jobpost
     * @return \Illuminate\Http\Response
     */
    public function show(Jobpost $jobpost)
    {
        return view('jobposts.show', compact('jobpost'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Jobpost  $jobpost
     * @return \Illuminate\Http\Response
     */
    public function edit(Jobpost $jobpost)
    {
        return view('jobposts.edit', compact('jobpost'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Jobpost  $jobpost
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Jobpost $jobpost)
    {
         $validated = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required',
            'key_responsibilities' => 'required',
            'requirements' => 'required',
            'posted_date' => 'required|date',
            'location' => 'required|string|max:255',
            'salary' => 'required|numeric',
            'is_visible' => 'required|boolean',
            'status' => 'required|in:open,closed',
            'job_type' => 'required|in:full_time,part_time,contract,internship,temporary',
        ]);

        $jobpost->update($validated);

        return redirect()->route('jobposts.index')->with('success', 'Job updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Jobpost  $jobpost
     * @return \Illuminate\Http\Response
     */
    public function destroy(Jobpost $jobpost,$id)
    {
        $jobpost = Jobpost::findOrFail($id);
    $jobpost->status = 0;
    $jobpost->save();

        return redirect()->back()->with('success', 'Job deleted successfully.');
    }









    ///
    public function search(Request $request)
{
    $query = $request->input('query');

    $jobs = JobPost::where('title', 'like', "%{$query}%")
                ->orWhere('location', 'like', "%{$query}%")
                ->orWhere('description', 'like', "%{$query}%")
                ->get();
$categorys=Category::where('status','1')->get();
    return view('welcome', compact('jobs','categorys'));
}
}






