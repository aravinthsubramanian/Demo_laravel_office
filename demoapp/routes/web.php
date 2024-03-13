<?php


use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;
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

// GET......................................................................................
Route::get('/login', [UserController::class, 'login']);
Route::get('/user/login', [UserController::class, 'login']);
Route::get('/register', [UserController::class, 'register']);
Route::get('/user/register', [UserController::class, 'register']);

Route::get('/admin', [AdminController::class, 'admin']);
Route::get('/admin/login', [AdminController::class, 'admin']);
Route::get('/admin/register', [AdminController::class, 'admin_registration']);


// POST........................................................................................
Route::post('/user/login', [UserController::class, 'user_login']);
Route::post('/user/register', [UserController::class, 'user_register']);

Route::post('/admin/login', [AdminController::class, 'admin_login']);
Route::post('/admin/register', [AdminController::class, 'admin_register']);
