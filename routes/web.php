<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\ProfileController;
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
    return view('landing');
});

Route::get('/support', function () {
    return view('support');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/retail-pos', function () {
    return view('retail-pos');
})->name('retail-pos');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::post('/contact', [ContactController::class, 'store'])->name('store-contact');
Route::post('submit-contact-details',[ContactController::class,'submitContact']);
// Country-specific routes
Route::get('/countries', [App\Http\Controllers\CountryController::class, 'index'])->name('countries.index');
Route::get('/countries/{country}', [App\Http\Controllers\CountryController::class, 'show'])->name('countries.show');
Route::get('/countries/{country}/services/{service}', [App\Http\Controllers\CountryController::class, 'getServiceDetails'])->name('countries.service.details');

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
