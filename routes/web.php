<?php

use GuzzleHttp\Promise\Create;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('main');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('user-detail/create',
[App\Http\Controllers\UserDetailController::class,'create'])->middleware('auth');
Route::post('user-detail', 
[App\Http\Controllers\UserDetailController::class,'store'])->middleware('auth');
