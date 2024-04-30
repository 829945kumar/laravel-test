<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;

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

Route::get('/about', function(){
    return view('about');
});

Route::get('/' , [HomeController::class , 'home'])->name('home');

Route::get('/login',[LoginController::class ,'index'])->name('login');
Route::post('/login',[LoginController::class , 'handlelogin'])->name('login.submit');
