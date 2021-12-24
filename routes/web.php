<?php

use Illuminate\Support\Facades\Route;
// use App\Http\Controllers\HomeController;
use App\Http\Controllers\Client\HomeController;
use App\Http\Controllers\Client\DashboardClientController;
use App\Http\Controllers\Admin\DashboardAdminController;
use App\Http\Controllers\Admin\CategoryIncomeController;
use App\Http\Controllers\Admin\CategoryExpenseController;
use App\Http\Controllers\Admin\UserController;


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
Route::get('/history', function () {
        return view('clients.history');
});
Route::get('/', [HomeController::class, 'viewIndex'])->name('home');
// Route::get('/home', [HomeController::class, 'viewIndex'])->name('homeDashboard');

Auth::routes();

Route::group(['client' => 'Dashboard', 'middleware' => ['auth:web','isClient'], 'prefix' => '/'], function () {
    // Route::get('/home', [HomeController::class, 'indexClient'])->name('home');
    Route::get('/home', [DashboardClientController::class, 'indexDashboardClient'])->name('clientHome');
    Route::get('/dashboard', [DashboardClientController::class, 'viewDashboard'])->name('clientDashboard');
    Route::get('/addData', [DashboardClientController::class, 'viewAddData'])->name('clientAddData');
    Route::get('/history', [DashboardClientController::class, 'viewHistory'])->name('clientHistory');
    Route::get('/recommendation', [DashboardClientController::class, 'viewRecomendation'])->name('clientRecommendation');
    Route::get('/settings', [DashboardClientController::class, 'viewSetting'])->name('clientSetting');
});

Route::group(['admin' => 'Dashboard', 'middleware' => ['auth:web','isAdmin'], 'prefix' => 'admin'], function () {
    // Route::get('/', [HomeController::class, 'indexAdmin'])->name('admin');  
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