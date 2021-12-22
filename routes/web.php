<?php

use Illuminate\Support\Facades\Route;
// use App\Http\Controllers\HomeController;
use App\Http\Controllers\Client\HomeController;

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

Route::get('/', function () {
        return view('admins');
});

Route::get('/history', function () {
        return view('clients.history');
});

Route::get('/home', [HomeController::class, 'index'])->name('home');

Auth::routes();

Route::group(['client' => 'Dashboard', 'middleware' => ['auth:web','isClient'], 'prefix' => 'client'], function () {
    // Route::get('/', [HomeController::class, 'indexClient'])->name('home');
    // Route::get('/home', [HomeController::class, 'indexClient'])->name('home');
});

Route::group(['admin' => 'Dashboard', 'middleware' => ['auth:web','isAdmin'], 'prefix' => 'admin'], function () {
    Route::get('/', [HomeController::class, 'indexAdmin'])->name('admin');  
});

