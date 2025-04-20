<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ShowallController;

Route::get('/', function () {
    return view('auth.login');
});

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->middleware('auth')->name('home');
Route::post('/search', [HomeController::class, 'search'])->middleware('auth')->name('search');
Route::get('/vendor', [HomeController::class, 'vendor'])->middleware('auth')->name('vendor');
Route::post('/vendor-search', [HomeController::class, 'vendor'])->middleware('auth')->name('vendor-search');
Route::get('/customer', [HomeController::class, 'customer'])->middleware('auth')->name('customer');
Route::post('/customer-search', [HomeController::class, 'customer'])->middleware('auth')->name('customer-search');

Route::resource('show-all',ShowallController::class)->middleware('auth');
// Route::get('/add-new',function(){return view('add-new-record');})->middleware('auth')->name('add-new');
