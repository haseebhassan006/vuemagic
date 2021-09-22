<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\BackendController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\backend\DashboardController;

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




Route::get('/',[FrontendController::class,'index'])->name('index');
Route::get('/refinance',[FrontendController::class,'refinance'])->name('refinance');
Route::get('/contact',[FrontendController::class,'contactUs'])->name('contact');


Auth::routes();
Route::get('/home', [HomeController::class, 'index'])->name('home');


// Route::middleware('auth')->prefix('dashboard')->group(function(){

    Route::get('/dashboard',[DashboardController::class,'index'])->name('dashboard');

// });
