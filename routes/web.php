<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});


Auth::routes();

Route::middleware(['auth','user-type:patient'])->group(function(){
    Route::get('/dashboard', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    Route::resource('/profile', App\Http\Controllers\ProfileController::class);
    Route::resource('/appointments', App\Http\Controllers\AppointmentController::class);
    Route::get('status/{id}', [App\Http\Controllers\AppointmentController::class, 'updateStatus'])->name('appointment_status');
    Route::get('/treatments', [App\Http\Controllers\TreatmentController::class, 'index'])->name('treatments.index');
    Route::get('/add-treatments', [App\Http\Controllers\TreatmentController::class, 'create'])->name('treatments.create');
    Route::get('/edit-treatments/{id}', [App\Http\Controllers\TreatmentController::class, 'edit'])->name('treatments.edit');
    Route::get('/health_providers', [App\Http\Controllers\HealthProviderController::class, 'index'])->name('health_providers');
    Route::get('/health_provider/profile/{id}', [App\Http\Controllers\HealthProviderController::class, 'profile'])->name('health_providers.profile');
});
