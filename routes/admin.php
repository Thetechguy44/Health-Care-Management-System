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
  Route::view('/dashboard','dashboards.admin.index')->name('home');
  Route::resource('/profile', App\Http\Controllers\Admin\ProfileController::class);
  Route::get('/upload-avatar', [App\Http\Controllers\Admin\ProfileController::class, 'updateAvatar'])->name('avatar');
});