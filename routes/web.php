<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\AppController;
use App\Http\Controllers\AdminController;

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
Route::get('/', [AppController::class, 'index']);
Route::get('/dashboard', [DashboardController::class, 'index']);
Route::get('/addData', [DashboardController::class, 'addData']);
Route::get('/history', [DashboardController::class, 'history']);
Route::get('/recommendation', [DashboardController::class, 'recommendation']);
Route::get('/setting', [DashboardController::class, 'setting']);

Route::get('/admin', [AdminController::class, 'index']);
Route::get('/admin/view_catincome', [AdminController::class, 'view_catincome']);