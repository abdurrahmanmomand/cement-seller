<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

Route::get('/', function () {
    return view('auth.login');
});

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->middleware('auth')->name('home');

Route::get('/show-all',function(){return view('all-records');})->middleware('auth')->name('show-all');
Route::get('/add-new',function(){return view('add-new-record');})->middleware('auth')->name('add-new');
