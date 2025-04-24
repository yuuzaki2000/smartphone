<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UploadController;
use App\Http\Controllers\SmartphoneController;

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
Route::get('/smartphone', [SmartphoneController::class, 'index']);


//Fortify


// welcome.blade.phpでのアップロード演習のためのルーティング
Route::post('/smartphone', [UploadController::class, 'store']);
Route::resource('/smartphone/upload', UploadController::class);

