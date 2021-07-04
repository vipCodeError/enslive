<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostNewsController;
use App\Http\Controllers\ApprovedNewsController;
use App\Http\Controllers\AddUserController;
use App\Http\Controllers\PollController;
use App\Http\Controllers\ProfileController;
use App\Models\NewsContent;
use App\Http\Controllers\ReviewNewsController;
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
        ->where('what_is', '!=', 'FULL IMAGES SINGLE')
        ->orderByDesc("created_at")->limit(30)->get();

    $mandal_news = newsContentByEdition("Mandal News Card");
    $state_news = newsContentByEdition("State News Card");
    $national_news = newsContentByEdition("National News Card");

    $district_news = newsContentByEdition("District News Card");
    $world_news = newsContentByEdition("World News Card");
    $history_news = newsContentByEdition("History News Card");

    $tourism_news = newsContentByEdition("Tourism News Card");
    $health_news = newsContentByEdition("Health News Card");
    $business_news = newsContentByEdition("Business News Card");

    $ens_news = newsContentByEdition("ENS News Card");
    $crime_news = newsContentByEdition("Crime News Card");
    $political_news = newsContentByEdition("Political News Card");

    $job_news = newsContentByEdition("Job News Card");
    $humanity_news = newsContentByEdition("Humanity News Card");
    $cinema_news = newsContentByEdition("Cinema News Card");

    $kitchen_news = newsContentByEdition("Kitchen News Card");
    $sports_news = newsContentByEdition("Sports News Card");
    $videos_news = newsContentByEdition("Video News Card");

	$youtube_news = newsContentByEdition("Youtube News Card");
    return view(    'website/index',
        compact('news_content',
            'mandal_news', 'state_news', 'national_news',
            'district_news', 'world_news', 'history_news',
            'tourism_news', 'health_news', 'business_news',
            'ens_news', 'crime_news', 'political_news',
            'job_news', 'humanity_news', 'cinema_news',
            'kitchen_news', 'sports_news', 'videos_news', 'youtube_news'));

//    return view(    'auth/login');
});
Route::get('log_out', function (){
    Auth::logout();

    return redirect('/admin');
})->name('logout');

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


Route::get("show_news/{news_card}", function ($news_card){
    $eData = DB::table('news_content')->join('users','news_content.posted_by', '=','users.name')
        ->join('count_news','news_content.id', '=','count_news.id')
        ->select(['news_content.*','users.designation','users.profile_img_url','users.user_type', 'users.name',
            'count_news.share_count','count_news.likes_count',
            'count_news.comments_count', 'count_news.view_count'])
        ->where('is_approved','APPROVED')
        ->where('news_content.edition', $news_card.' News Card')
        ->where('news_content.edition', '!=', 'FULL IMAGES')
        ->orderByDesc('created_at')
        ->paginate(15);

        return view('website.category_news', compact('eData'));

})->name('cat_show_news');

Route::group(['middleware' => 'auth'], function(){
    Route::resource("add_user", AddUserController::class);
    Route::resource("profile_user", ProfileController::class);
    Route::resource("poll_add", PollController::class);
    Route::resource("post_news", PostNewsController::class);
    Route::resource('update_status', ApprovedNewsController::class)->only('update');
    Route::resource("approved_news", ApprovedNewsController::class);
    Route::resource("review_news", ReviewNewsController::class);
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
        ->where('what_is', '!=', 'FULL IMAGES SINGLE')
        ->Where('edition', $edition)
        ->orderByDesc("created_at")->limit(5)->get();
}

