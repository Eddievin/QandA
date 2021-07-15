<?php

use Illuminate\Support\Facades\Auth;
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

Route::get('/', 'QuestionsController@index');


Route::get('/pages/phpquestions', 'QuestionsController@phpquestions');

Route::get('/pages/linuxquestions', 'QuestionsController@linuxquestions');

Route::get('/pages/iotquestions', 'QuestionsController@iotquestions');

Route::get('/pages/sqlquestions', 'QuestionsController@sqlquestions');

Route::get('/pages/about', 'QuestionsController@about');

Route::get('/pages/sitemap', 'QuestionsController@sitemap');

Route::get('/pages/profile', 'QuestionsController@profile');


Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::middleware(['auth:sanctum', 'verified'])->get('/index', function () {
    return view('index');
})->name('index');
