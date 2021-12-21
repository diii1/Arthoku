<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

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

Auth::routes();

Route::group(['client' => 'Dashboard', 'middleware' => ['auth:web','isClient'], 'prefix' => 'client'], function () {
    Route::get('/home', [HomeController::class, 'indexClient'])->name('home');
});

Route::group(['admin' => 'Dashboard', 'middleware' => ['auth:web','isAdmin'], 'prefix' => 'admin'], function () {
    Route::get('/', [HomeController::class, 'indexAdmin'])->name('admin');  
});
