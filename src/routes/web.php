<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UploadController;
use App\Http\Controllers\SmartphoneController;
use App\Http\Controllers\MakerController;
use App\Http\Controllers\CarrierController;

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
Route::get('/smartphone', [ProductController::class, 'index']);
Route::get('/register/step2', [MakerController::class, 'index']);
Route::post('/register/step2', [MakerController::class, 'store']);
Route::post('/register/step2', [CarrierController::class, 'store']);
//Fortify


/* welcome.blade.phpでのアップロード演習のためのルーティング
Route::post('/smartphone', [UploadController::class, 'store']);
Route::resource('/smartphone/upload', UploadController::class);  */

