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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::name('website.')->group(function(){ 
    Route::get('/', [App\Http\Controllers\FrontendController::class, 'home'])->name('home');
    Route::get('/about', [App\Http\Controllers\FrontendController::class, 'about'])->name('about');
    Route::get('/services', [App\Http\Controllers\FrontendController::class, 'services'])->name('services');
    Route::get('/departments', [App\Http\Controllers\FrontendController::class, 'departments'])->name('departments');
    Route::get('/contact', [App\Http\Controllers\FrontendController::class, 'contact'])->name('contact');
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
