<?php

use App\Http\Controllers\SesiController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\GuruController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::middleware(['guest'])->group(function(){
    Route::get('/', [SesiController::class,'index'])->name('login');
    Route::post('/', [SesiController::class,'login']);
});

Route::middleware(['auth'])->group(function () {
    Route::get('/logout',[SesiController::class,'logout']);
    Route::group(['middleware' => ['cekUser:admin']], function () {
        Route::get('/admin', [AdminController::class,'index']);
    });

    Route::group(['middleware' => ['cekUser:gurubk']], function () {
        Route::get('/guru', [GuruController::class,'index']);
    });
});