<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PendaftaranController;
use App\Http\Controllers\PenduserController;

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

// Pendaftaran User
Route::resource('penduser', PenduserController::class);

Route::group(['middleware' => 'auth'], function(){
    Route::prefix('admin')->group(function () {
        Route::get('/', [DashboardController::class, 'index']);
    
        // Pendaftaran
        Route::resource('pendaftaran', PendaftaranController::class);
    });
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
