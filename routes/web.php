<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/home', function () {
    return view('welcome');
})->name('home');

Route::delete('/jobs/{job}', [App\Http\Controllers\JobpostController::class, 'destroy'])->name('jobs.destroy');
// Route::get('/dashboard', function () {
//     return view('layouts.dashboard');
// })->name('dashboard');

Route::get('/', [App\Http\Controllers\HomeController::class, 'indexwelcome'])->name('/');
// Route::get('/jobs', [JobpostController::class, 'index'])->name('jobs.index'); // managejob
// Route::get('/jobs/addjob', [JobpostController::class, 'store'])->name('jobs.addjob'); // addjob
// Route::get('/applications', [ApplicationController::class, 'insert'])->name('viewapplications'); // viewapplication



Auth::routes();

// routes/web.php
// Route::get('/applications', [App\Http\Controllers\JobApplicationController::class, 'index'])->name('applications.index');
Route::get('/managejobs', [App\Http\Controllers\JobpostController::class, 'manage'])->name('managejobs');
Route::get('/adminviewjobs', [App\Http\Controllers\JobpostController::class, 'adminviewjobs'])->name('adminviewjobs');

Route::get('/dashboard', [App\Http\Controllers\HomeController::class, 'dashboard'])->name('dashboard');

// Route::get('/viewjob', [App\Http\Controllers\JobpostController::class, 'viewjob'])->name('viewjob');
Route::get('/viewjob/{id}', [App\Http\Controllers\JobpostController::class, 'viewjob'])->name('viewjob');

Route::get('/applyjob_page/{id}', [App\Http\Controllers\JobpostController::class, 'applyjob'])->name('applyjob_page');

// Route::get('/applyjob_page', function () {
//     return view('applyjob');
// })->name('applyjob_page');

Route::get('/addjob_page', function () {
    return view('addjob');
})->name('addjob_page');

Route::get('/addcategory_page', function () {
    return view('category');
})->name('addcategory_page');

Route::middleware(['auth'])->group(function () {
    Route::post('/insert', [App\Http\Controllers\ApplicationController::class, 'store'])->name('insert');
    Route::post('/addjob', [App\Http\Controllers\JobpostController::class, 'store'])->name('addjob');
    Route::post('categories.store', [App\Http\Controllers\CategoryController::class, 'store'])->name('categories.store');
});









//////////
Route::get('/search', [App\Http\Controllers\JobpostController::class, 'search'])->name('jobs.search');

