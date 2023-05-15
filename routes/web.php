<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\HomeController;

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

route::get('/login', [LoginController::class, 'lihat']);
Route::put('/action-login', [LoginController::class, 'ceklogin']);
Route::get('/action-logout', [LoginController::class, 'logout'])->middleware('auth');

Route::get('/', [HomeController::class, 'index']);

route::get('/register', [RegisterController::class, 'lihat']);
route::post('/save-user', [RegisterController::class, 'simpanregister']);

route::get('/index-user', [UserController::class, 'lihat']);
route::get('/edit-user/{id}', [UserController::class, 'edit']);
route::put('/save-user/{id}', [UserController::class, 'update']);
route::get('/delete-user/{id}', [UserController::class, 'hapus']);

route::get('/index-client', [ClientController::class, 'lihat']);
route::get('/add-client', [ClientController::class, 'tambah']);
route::post('/save-client', [ClientController::class, 'simpan']);
route::get('/edit-client/{id_client}', [ClientController::class, 'edit']);
route::put('/save-client/{id_client}', [ClientController::class, 'update']);
route::get('/delete-client/{id_client}', [ClientController::class, 'hapus']);
route::get('/detail-client/{id_client}', [ClientController::class, 'lihatstatus']);
route::get('/detail/{id_client}', [ClientController::class, 'lihatstatusbiasa']);

