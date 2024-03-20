<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\DashboardController;

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
//     return view('welcome');
// });

Route::get('/', [DashboardController::class, 'index']);

Route::get('/login', [LoginController::class, 'login'])->middleware('guest')->name('login');

Route::post('/login', [LoginController::class, 'auth']);

Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/register', [LoginController::class, 'register'])->middleware('guest');



Route::group(['middleware' => ['cekrole:Admin,Staff']], function () {
    Route::get('/data-asisten', [UserController::class, 'index']);
    Route::get('/data-asisten/create', [UserController::class, 'create']);
    Route::post('/data-asisten/create', [UserController::class, 'store']);
    Route::get('/data-asisten/edit/{id}', [UserController::class, 'edit']);
    Route::post('/data-asisten/edit/{id}', [UserController::class, 'update']);
    Route::delete('/data-asisten/delete/{id}', [UserController::class, 'destroy']);
});

Route::group(['middleware' => ['cekrole:Admin,Staff,PJ']], function () {
    Route::post('/code-generator/create', [KodeController::class, 'store']);
});

Route::group(['middleware' => ['cekrole:Admin,Staff,PJ,Asisten']], function () {
    
});