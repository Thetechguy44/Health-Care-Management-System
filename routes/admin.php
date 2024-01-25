<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register admin routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::prefix('admin')->name('admin.')->middleware(['auth','user-type:admin'])->group(function(){
  Route::get('/dashboard', [App\Http\Controllers\Admin\AdminController::class, 'index'])->name('home');
  Route::resource('/profile', App\Http\Controllers\Admin\ProfileController::class);
  Route::resource('/specialities', App\Http\Controllers\Admin\SpecialityController::class);
  Route::get('/upload-avatar', [App\Http\Controllers\Admin\ProfileController::class, 'updateAvatar'])->name('avatar');
});