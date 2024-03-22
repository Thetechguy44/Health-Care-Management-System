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
  Route::get('/profile', [App\Http\Controllers\Admin\AdminController::class, 'ViewProfile'])->name('profile');
  Route::get('/profile/edit/{id}', [App\Http\Controllers\Admin\AdminController::class, 'editProfile'])->name('profile.edit');
  Route::resource('/specialities', App\Http\Controllers\Admin\SpecialityController::class);
  Route::resource('/health_providers', App\Http\Controllers\Admin\HealthProviderController::class);
  Route::resource('/patients', App\Http\Controllers\Admin\PatientController::class);
  Route::get('/upload-avatar', [App\Http\Controllers\Admin\ProfileController::class, 'updateAvatar'])->name('avatar');
  Route::resource('/appointments', App\Http\Controllers\Admin\AppointmentController::class);
  Route::get('appointment/{id}', [App\Http\Controllers\Admin\AppointmentController::class, 'updateStatus'])->name('appointment_status');
  Route::get('/treatments', [App\Http\Controllers\Admin\TreatmentController::class, 'index'])->name('treatments.index');
  Route::get('/add-treatments', [App\Http\Controllers\Admin\TreatmentController::class, 'create'])->name('treatments.create');
  Route::get('/edit-treatments/{id}', [App\Http\Controllers\Admin\TreatmentController::class, 'edit'])->name('treatments.edit');
  Route::delete('/delete-treatments/{id}', [App\Http\Controllers\Admin\TreatmentController::class, 'destroy'])->name('treatments.destroy');
});