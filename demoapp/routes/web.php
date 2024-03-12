<?php

use App\Http\Controllers\login_controller;
use App\Http\Controllers\register_controller;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', [login_controller::class,'login']);
Route::get('/register', [register_controller::class,'register']);

Route::post('/login', [login_controller::class,'user_login']);
Route::post('/register', [register_controller::class,'user_register']);
