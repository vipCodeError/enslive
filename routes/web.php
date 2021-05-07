<?php

use App\Models\NewsContent;
use App\Models\User;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostNewsController;
use App\Http\Controllers\ApprovedNewsController;
use App\Http\Controllers\AddUserController;
use App\Http\Controllers\PollController;
use App\Http\Controllers\ProfileController;
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
    return view(    'auth/login');
});

Route::group(['middleware' => 'auth'], function(){
    Route::resource("add_user", AddUserController::class);
    Route::resource("profile_user", ProfileController::class);
    Route::resource("poll_add", PollController::class);
    Route::resource("post_news", PostNewsController::class);
    Route::resource('update_status', ApprovedNewsController::class)->only('update');
    Route::resource("approved_news", ApprovedNewsController::class);
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    $totalPost = NewsContent::where('posted_by', auth()->user()->name)->count();
    $totalApproved = NewsContent::where('posted_by', auth()->user()->name)
        ->where('is_approved', 'APPROVED')
        ->count();
    $totalRejected = NewsContent::where('posted_by', auth()->user()->name)
        ->where('is_approved', 'REJECTED')
        ->count();
    $totalDuplicate = NewsContent::where('posted_by', auth()->user()->name)
        ->where('is_approved', 'DUPLICATE')
        ->count();
    $totalVideo = NewsContent::where('posted_by', auth()->user()->name)
        ->where('what_is', 'VIDEO')
        ->count();
    $totalPending = NewsContent::where('posted_by', auth()->user()->name)
        ->where('what_is', 'NOT APPROVED')
        ->count();
    $user = auth()->user();

    $newsContent = NewsContent::where('posted_by', auth()->user()->name)->limit(7)->get();

    return view('admin', compact('totalPost',
        'totalApproved',
        'totalRejected', 'totalDuplicate', 'totalVideo', 'totalPending', 'user', 'newsContent'));
})->name('admin');
