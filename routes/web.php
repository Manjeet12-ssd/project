<?php

use App\Http\Controllers\ProfileController;
use \Wave\Http\Controllers\MediaController;
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


// Authentication routes
Auth::routes();


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

// Include Wave Routes
Wave::routes();

Route::mediaLibrary();


Route::get('media',[MediaController::class,'index'])->name('client');
Route::get('media/create',[MediaController::class,'create'])->name('client.create');
Route::post('media/store',[MediaController::class,'store'])->name('wave.mediastore');


// Route::get('profile', [ProfileController::class, 'edit']);
// Route::post('profile', [ProfileController::class, 'store']);