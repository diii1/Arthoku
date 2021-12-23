<?php

use Illuminate\Support\Facades\Route;
// use App\Http\Controllers\HomeController;
use App\Http\Controllers\Client\HomeController;
use App\Http\Controllers\Client\DashboardClientController;
use App\Http\Controllers\Admin\DashboardAdminController;

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
});

