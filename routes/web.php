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
    return view('auth.dashboard');
});

Auth::routes();

// Route::get ('auth/dashboard', Auth\DashboardController::class, 'dashboard')->name('auth.dashboard')->middleware('auth');

// Route::get('auth/dashboard', 'DashboardController@dashboard');

Route::get('/', 'HomeController@index');
