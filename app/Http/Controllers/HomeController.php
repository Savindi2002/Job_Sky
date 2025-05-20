<?php

namespace App\Http\Controllers;
use App\Models\Jobpost;
use App\Models\Category;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

     public function indexwelcome()
    {
        $jobs = JobPost::where('is_visible', true)
                       ->where('status', 1)
                       ->latest()
                       ->get();

                       $categorys=Category::where('status','1')->get();

        return view('welcome', compact('jobs','categorys'));
    }


     public function dashboard()
    {
        return view('layouts.dashboard');
    }


}
