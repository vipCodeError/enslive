<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Api\ApprovedNewsController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\AddUserController;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::group(['middleware' => 'auth:sanctum'], function(){
	Route::post('post_news', [PostNewsController::class, 'postNews']);
    Route::post('upload_news_image', [PostNewsController::class, 'upload_post_image']);
});

Route::post('get_news_by_district', [ApprovedNewsController::class, 'getNewsContentByDistrict']);
Route::get('get_horoscope', [HoroscopeController::class, 'getHoroscope']);
Route::post('get_user_data', [AddUserController::class, 'getUserData']);
Route::post('update_user_data', [AddUserController::class, 'updateUserData']);
Route::post('login', [AuthController::class, 'getTokenUser']);
Route::post('sign_up', [AuthController::class, 'signup']);
Route::post('verify_phone', [AuthController::class, 'verifyPhone']);
Route::post('upload_profile_img', [AuthController::class, 'uploadProfileImage']);

Route::get('get_news_content', [ApprovedNewsController::class, 'getNewsContent']);
Route::post('get_news_content_by_id', [ApprovedNewsController::class, 'getNewsContentById']);
Route::post('get_news_content_by_edition', [ApprovedNewsController::class, 'getNewsContentByNewsCard']);
Route::post('post_like_news_count', [ApprovedNewsController::class, 'postLikesCount']);
Route::post('post_share_news_count', [ApprovedNewsController::class, 'postShareCount']);
Route::post('post_view_news_count', [ApprovedNewsController::class, 'postViewCount']);
Route::post('get_comment', [ApprovedNewsController::class, 'getCommentByNewsHash']);
Route::post('post_comment', [ApprovedNewsController::class, 'postCommentByNewsId']);

Route::put("update_status", [ApprovedNewsController::class, 'updateStatus']);

