<?php


use App\Http\Controllers\AdminController;
use App\Http\Controllers\CatagoryController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\TaiController;
use App\Http\Controllers\TextController;
use App\Models\Catagory;
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
Route::get('/user/login', [UserController::class, 'login'])->name('userlogin');
Route::get('/user/logout', [UserController::class, 'logout'])->name('userlogout');
Route::get('/register', [UserController::class, 'register']);
Route::get('/user/register', [UserController::class, 'register'])->name('userregister');
Route::get('/users/show', [AdminController::class, 'viewusers'])->name('viewusers');

Route::get('/admin', [AdminController::class, 'admin_home'])->name('admin');;
Route::get('/admin/login', [AdminController::class, 'admin'])->name('adminlogin');
Route::get('/admin/logout', [AdminController::class, 'logout'])->name('adminlogout');
Route::get('/admin/register', [AdminController::class, 'admin_registration'])->name('adminregister');
Route::get('/admin/show', [AdminController::class, 'viewadmins'])->name('viewadmins');


Route::get('/catagory/view', [CatagoryController::class, 'viewcatagory'])->name('viewcatagory');
Route::get('/subcatagory/view', [CatagoryController::class, 'viewsubcatagory'])->name('viewsubcatagory');
Route::get('/catagory/show', [CatagoryController::class, 'showcatagory'])->name('showcatagory');
Route::get('/subcatagory/show', [CatagoryController::class, 'showsubcatagory'])->name('showsubcatagory');
Route::get('delcat/{id}',[CatagoryController::class,'delete_catagory'])->name('deletecatagory');
Route::get('delsubcat/{id}',[CatagoryController::class,'delete_subcatagory'])->name('deletesubcatagory');
Route::get('/editcat/{id}', [CatagoryController::class, 'editcatagory']);
Route::get('/editsubcat/{id}', [CatagoryController::class, 'editsubcatagory']);

Route::get('/view/textadder', [TaiController::class, 'viewtextadder'])->name('viewtextadder');
Route::get('/view/imageadder', [TaiController::class, 'viewimageadder'])->name('viewimageadder');

// POST........................................................................................
Route::post('/user/login', [UserController::class, 'user_login']);
Route::post('/user/register', [UserController::class, 'user_register']);

Route::post('/admin/login', [AdminController::class, 'admin_login']);
Route::post('/admin/register', [AdminController::class, 'admin_register']);

Route::post('/catagory/add', [CatagoryController::class, 'addcatagory']);
Route::post('/subcatagory/add', [CatagoryController::class, 'addsubcatagory']);

Route::post('/catagory/update/{id}', [CatagoryController::class, 'updatecatagory']);
Route::post('/subcatagory/update/{id}', [CatagoryController::class, 'updatesubcatagory']);

Route::post('upload-multiple-image-preview', [TaiController::class, 'store']);
Route::post('/store-input-fields', [TaiController::class, 'text_store']);