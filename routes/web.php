<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegistrasiController;

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

// Route::get('/', function () {
//     return view('home');
// });

//memberinama route login agar bisa di panggil dengan route login


Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'login']);
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');



Route::get('/registrasi', [RegistrasiController::class, 'index']);
Route::post('/registrasi', [RegistrasiController::class, 'store']);

Route::group(['middleware' => ['auth', 'ceklevel:admin']], function () {

    Route::get('admin/datauser', [AdminController::class, 'datauser'])->name('datauser');
    Route::get('admin/dataform', [AdminController::class, 'dataform'])->name('dataform');
    Route::get('admin/editbem/{id}', [AdminController::class, 'editbem']);
    Route::post('admin/updatebem/{id}', [AdminController::class, 'updatebem']);
    Route::get('admin/deletebem/{id}', [AdminController::class, 'deletebem']);
    Route::get('admin/edituser/{id}', [AdminController::class, 'edituser']);
    Route::post('admin/updateuser/{id}', [AdminController::class, 'updateuser']);
    Route::get('admin/deleteuser/{id}', [AdminController::class, 'deleteuser']);
});



Route::group(['middleware' => ['auth', 'ceklevel:admin,user']], function () {

    Route::get('/', [UserController::class, 'index'])->name('dashboard');
    Route::get('/form', [UserController::class, 'form']);
    Route::get('/databem', [UserController::class, 'databem']);
    Route::post('/form/tambah', [UserController::class, 'tambah']);
});
