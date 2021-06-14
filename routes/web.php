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

Route::view('first','first');
Route::view('catering','catering');
Route::view('main_catering','main_catering');
Route::view('shagun','shagun');
Route::view('photography','photography');
Route::view('main_photography','main_photography');
Route::view('couple-dashboard','couple_dashboard');
Route::view('couple-checklist','couple_checklist');
Route::view('organizing','organizing');
Route::view('couple-vendor','couple_vendor');
Route::view('couple-gust-list','couple-guest');
Route::view('couple-chat','couple_chat');
Route::view('couple-budget','couple_budget');

