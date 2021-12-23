<?php

use Illuminate\Support\Facades\Route;
// use App\Http\Controllers\HomeController;
use App\Http\Controllers\Client\HomeController;
use App\Http\Controllers\Client\DashboardController;

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
    // Route::get('/', [HomeController::class, 'indexClient'])->name('home');
    // Route::get('/home', [HomeController::class, 'indexClient'])->name('home');
});

Route::group(['admin' => 'Dashboard', 'middleware' => ['auth:web','isAdmin'], 'prefix' => 'admin'], function () {
    // Route::get('/', [HomeController::class, 'indexAdmin'])->name('admin');  
    Route::get('/', [DashboardController::class, 'indexDashboard'])->name('admin');
});

