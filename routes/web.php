<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\AppController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CategoryIncomeController;

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

Route::get('/admin/categoryIncome', [CategoryIncomeController::class, 'view_catincome'])->name('data_catincome');
Route::post('/admin/catincome/insert', [CategoryIncomeController::class, 'insert']);
Route::get('/catIncome/hapus/{id}', [CategoryIncomeController::class, 'delete']);

Route::get('/admin/view_catexpense', [AdminController::class, 'view_catexpense']);