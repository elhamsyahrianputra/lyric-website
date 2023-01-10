<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;

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

Route::get('/', [AuthController::class, 'login']);
Route::post('/', [AuthController::class, 'authenticate']);

Route::post('/logout', [AuthController::class, 'logout']);


Route::get('/signup', [AuthController::class, 'signup']);
Route::post('signup', [AuthController::class, 'store']);

Route::resource('/admin', AdminController::class);


Route::get('/home', [HomeController::class, 'index'])->middleware('auth');

// Route::get('/profile/{username}', [UserController::class, 'index']);
// Route::get('/profile/edit/{username}', [UserController::class, 'edit']);
// Route::post('/profile//ed{username}', [UserController::class, 'update']);

Route::resource('/profile', UserController::class);

Route::get('/{username}', [HomeController::class, 'user']);
