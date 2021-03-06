<?php

use Illuminate\Support\Facades\Route;
// use App\Http\Controllers\HomeController;
use App\Http\Controllers\Client\HomeController;
use App\Http\Controllers\Client\DashboardClientController;
use App\Http\Controllers\Admin\DashboardAdminController;
use App\Http\Controllers\Admin\CategoryIncomeController;
use App\Http\Controllers\Admin\CategoryExpenseController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Client\RecordIncomeController;
use App\Http\Controllers\Client\RecordExpenseController;
use App\Http\Controllers\Client\SettingController;


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

Route::get('/', [HomeController::class, 'viewIndex'])->name('home');

Auth::routes();

Route::group(['client' => 'Dashboard', 'middleware' => ['auth:web','isClient'], 'prefix' => '/'], function () {
    Route::get('/home', [DashboardClientController::class, 'indexDashboardClient'])->name('clientHome');
    Route::get('/dashboard', [DashboardClientController::class, 'viewDashboard'])->name('clientDashboard');

    ///Routing untuk ADD DATA INCOME & EXPENSE
    Route::get('/addData', [DashboardClientController::class, 'viewAddData'])->name('clientAddData');
    Route::post('/addData/income', [RecordIncomeController::class, 'insert'])->name('AddDataIncome');
    Route::post('/addData/expense', [RecordExpenseController::class, 'insert'])->name('AddDataExpense');

    ///Routing untuk HISTORY INCOME 
    Route::get('/income', [DashboardClientController::class, 'viewHistoryIncome'])->name('clientHistoryIncome');
    Route::post('/income/update/{id}', [RecordIncomeController::class, 'update'])->name('updateHistoryIncome');
    Route::get('/income/delete/{id}', [RecordIncomeController::class, 'delete'])->name('deleteHistoryIncome');

    ///Routing untuk HISTORY EXPENSE
    Route::get('/expense', [DashboardClientController::class, 'viewHistoryExpense'])->name('clientHistoryExpense');
    Route::post('/expense/update/{id}', [RecordExpenseController::class, 'update'])->name('updateHistoryExpense');
    Route::get('/expense/delete/{id}', [RecordExpenseController::class, 'delete'])->name('deleteHistoryExpense');
    
    Route::get('/recommendation', [DashboardClientController::class, 'viewRecommendation'])->name('clientRecommendation');
    Route::get('/settings', [DashboardClientController::class, 'viewSetting'])->name('clientSetting');
    Route::post('/settings/updateName/{id}', [SettingController::class, 'updateName'])->name('clientUpdateName');
    Route::post('/settings/updateAverage/{id}', [SettingController::class, 'updateAverage'])->name('clientUpdateAverage');
});

Route::group(['admin' => 'Dashboard', 'middleware' => ['auth:web','isAdmin'], 'prefix' => 'admin'], function () { 
    Route::get('/', [DashboardAdminController::class, 'indexDashboardAdmin'])->name('admin');

    //Routing untuk kategori Income di Admin
    Route::get('/categoryIncome', [CategoryIncomeController::class, 'view_catincome'])->name('adminIncome');
    Route::post('/categoryIncome/insert', [CategoryIncomeController::class, 'insert'])->name('adminAddDataCatIncome');
    Route::post('/categoryIncome/update/{id}', [CategoryIncomeController::class, 'update'])->name('adminUpdateDataCatIncome');
    Route::get('/categoryIncome/delete/{id}', [CategoryIncomeController::class, 'delete'])->name('adminDeleteDataCatIncome');

    //Routing untuk kategori Expense di Admin
    Route::get('/categoryExpense', [CategoryExpenseController::class, 'view_catexpense'])->name('adminExpense');
    Route::post('/categoryExpense/insert', [CategoryExpenseController::class, 'insert'])->name('adminAddDataCatExpense');
    Route::post('/categoryExpense/update/{id}', [CategoryExpenseController::class, 'update'])->name('adminUpdateDataCatExpense');
    Route::get('/categoryExpense/delete/{id}', [CategoryExpenseController::class, 'delete'])->name('adminDeleteDataCatExpense');
  
    //Routing untuk kategori User di Admin
    Route::get('/client', [UserController::class, 'view_User'])->name('adminUser');
    Route::post('/client/update/{id}', [UserController::class, 'update'])->name('updateAdminUser');
    Route::get('/client/delete/{id}', [UserController::class, 'delete'])->name('deleteAdminUser');
});