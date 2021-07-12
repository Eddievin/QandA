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

Route::get('/', 'QuestionsController@index');


Route::get('/pages/phpquestions', 'QuestionsController@phpquestions');

Route::get('/pages/linuxquestions', 'QuestionsController@linuxquestions');

Route::get('/pages/iotquestions', 'QuestionsController@iotquestions');

Route::get('/pages/sqlquestions', 'QuestionsController@sqlquestions');



Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
