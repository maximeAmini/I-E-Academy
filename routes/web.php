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

Route::view('/', 'pages.welcome')->name('home')->middleware('auth');;

Route::resource('news', 'NewsController')->middleware('auth');;

Route::resource('textes', 'TextesController')->middleware('auth');;

Auth::routes(['register' => false]);

