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
        Route::get('/profile', [App\Http\Controllers\Healthcare\HomeController::class, 'viewProfile'])->name('profile');
        Route::get('appointment', [App\Http\Controllers\Healthcare\AppointmentController::class, 'viewAppointment'])->name('appointments');
        Route::get('appointment/{id}', [App\Http\Controllers\Healthcare\AppointmentController::class, 'updateStatus'])->name('appointment_status');
        Route::get('treatments', [App\Http\Controllers\Healthcare\AppointmentController::class, 'viewTreatment'])->name('treatments');
    });
});