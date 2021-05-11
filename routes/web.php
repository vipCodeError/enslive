<?php

use App\Http\Controllers\WebShowNewsController;
use App\Models\NewsContent;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Request;
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
    $news_content = DB::table('news_content')->join('users','news_content.posted_by', '=','users.name')
        ->join('count_news','news_content.id', '=','count_news.id')
        ->select(['news_content.*','users.designation','users.profile_img_url','users.user_type',
            'count_news.share_count','count_news.likes_count',
            'count_news.comments_count', 'count_news.view_count'])
        ->where('is_approved','APPROVED')
        ->orderByDesc("created_at")->limit(30)->get();

    $mandal_news = newsContentByEdition("Mandal News Card");
    $state_news = newsContentByEdition("State News Card");
    $national_news = newsContentByEdition("National News Card");

    return view(    'website/index',
        compact('news_content',
            'mandal_news',
            'state_news', 'national_news'));
//    return view(    'auth/login');
});


Route::get('/admin', function () {
    //return view(    'website/index');
    return view(    'auth/login');
});

Route::get("news/{id}", function ($id) {
    $eData = DB::table('news_content')->join('users','news_content.posted_by', '=','users.name')
        ->join('count_news','news_content.id', '=','count_news.id')
        ->select(['news_content.*','users.designation','users.profile_img_url','users.user_type', 'users.name',
            'count_news.share_count','count_news.likes_count',
            'count_news.comments_count', 'count_news.view_count'])
        ->where('is_approved','APPROVED')
        ->where('news_content.id', $id)
        ->first();

    $recomendedEdition = DB::table('news_content')->join('users','news_content.posted_by', '=','users.name')
        ->join('count_news','news_content.id', '=','count_news.id')
        ->select(['news_content.*','users.designation','users.profile_img_url','users.user_type', 'users.name',
            'count_news.share_count','count_news.likes_count',
            'count_news.comments_count', 'count_news.view_count'])
        ->where('is_approved','APPROVED')
        ->where('news_content.edition', "Mandal News Card")
        ->limit(8)->get();

    return view('website.shownews', compact('eData', 'recomendedEdition'));
})->name('show_web');

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


function newsContentByEdition($edition){
    return DB::table('news_content')->join('users','news_content.posted_by', '=','users.name')
        ->join('count_news','news_content.id', '=','count_news.id')
        ->select(['news_content.*','users.designation','users.profile_img_url','users.user_type',
            'count_news.share_count','count_news.likes_count',
            'count_news.comments_count', 'count_news.view_count'])
        ->where('is_approved','APPROVED')
        ->Where('edition', $edition)
        ->orderByDesc("created_at")->limit(5)->get();
}
