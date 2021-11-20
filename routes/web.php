<?php

use App\Http\Controllers\BarangController;
use Illuminate\Support\Facades\Route;

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
//Home
Route::get('/',[BarangController::class, 'indexNoLogin']);

//Page
Route::get('log',[BarangController::class, 'log']);
Route::get('portfolio', function () {
    return view('cv.index');
});

//Logged in
Route::middleware(['auth:sanctum', 'verified'])->group(function(){
    Route::get('/dashboard',[BarangController::class, 'index']);
    Route::resource('barangs', BarangController::class);
});
