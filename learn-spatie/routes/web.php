<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;

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

Route::get("/" , [Controller::class , 'showLoginForm'])->name('login');
Route::get("/register" , [Controller::class , 'showRegisterForm'])->name('register');
Route::post("/register" , [Controller::class , 'store'])->name("createUser")