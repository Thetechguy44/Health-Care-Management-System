<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register health care providers routes for the application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::prefix('healthcare_provider')->name('healthcare_provider.')->group(function(){
    Route::middleware('guest')->group(function(){
        Route::view('/register','auth.healthcare_provider')->name('register');
        Route::post('/save', [App\Http\Controllers\Auth\RegisterHealthcareController::class, 'create'])->name('create');
    });

    Route::middleware(['auth','user-type:healthcare_provider'])->group(function(){
        Route::get('/dashboard', [App\Http\Controllers\Healthcare\HomeController::class, 'index'])->name('home');
    });
});