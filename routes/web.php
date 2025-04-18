<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ShowallController;

Route::get('/', function () {
    return view('auth.login');
});

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->middleware('auth')->name('home');

Route::resource('show-all',ShowallController::class)->middleware('auth');
// Route::get('/add-new',function(){return view('add-new-record');})->middleware('auth')->name('add-new');
