<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostNewsController;
use App\Http\Controllers\ApprovedNewsController;

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
    return view(    'admin');
});

Route::resource("post_news", PostNewsController::class);
Route::resource('update_status', ApprovedNewsController::class)->only('update');

Route::resource("approved_news", ApprovedNewsController::class);

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
