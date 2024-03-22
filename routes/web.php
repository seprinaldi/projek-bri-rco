<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LoginController;
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

 Route::get('/', function () {
     return view('welcome');
 });



Route::get('/login', [LoginController::class, 'halamanlogin'])->name('login');

Route::post('/postlogin', [LoginController::class, 'auth']) -> name('postlogin');

Route::post('/logout', [LoginController::class, 'logout']) -> name('logout');

Route::get('/register', [LoginController::class, 'register'])-> name('register');

Route::post('/simpanregister', [LoginController::class, 'simpanregister'])-> name('simpanregister');

Route::group(['middleware' => ['auth']], function () {
    Route::get('/dashboard', [DashboardController::class, 'index']) -> name('dashboard');
    Route::get('/menus', [MenuController::class, 'index']) -> name('menus.index');
    Route::get('/users', [UserController::class, 'index']) -> name('users.index');
});
