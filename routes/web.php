<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\AppController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CategoryIncomeController;
use App\Http\Controllers\CategoryExpenseController;
use App\Http\Controllers\AccountController;

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
Route::get('/', [AppController::class, 'index'])->name('client');
Route::get('/dashboard', [DashboardController::class, 'index']);
Route::get('/addData', [DashboardController::class, 'addData']);
Route::get('/history', [DashboardController::class, 'history']);
Route::get('/recommendation', [DashboardController::class, 'recommendation']);
Route::get('/setting', [DashboardController::class, 'setting']);

Route::get('/admin', [AdminController::class, 'index']);

Route::get('/admin/categoryIncome', [CategoryIncomeController::class, 'view_catincome'])->name('data_catincome');
Route::post('/admin/categoryIncome/insert', [CategoryIncomeController::class, 'insert']);
Route::get('/admin/categoryIncome/delete/{id}', [CategoryIncomeController::class, 'delete']);
Route::post('/admin/categoryIncome/update/{id}', [CategoryIncomeController::class, 'update']);






Route::get('/admin/categoryExpense', [CategoryExpenseController::class, 'view_catexpense'])->name('data_catexpense');
Route::post('/admin/categoryExpense/insert', [CategoryExpenseController::class, 'insert']);
Route::get('/admin/categoryExpense/delete/{id}', [CategoryExpenseController::class, 'delete']);
Route::post('/admin/categoryExpense/update/{id}', [CategoryExpenseController::class, 'update']);

Route::get('/admin/client', [AccountController::class, 'view_client'])->name('data_client');
Route::get('/admin/client/delete/{id}', [AccountController::class, 'delete']);

Route::post('/client/insert', [AccountController::class, 'insert']);