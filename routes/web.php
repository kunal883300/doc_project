<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ScheduledSessionController;

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

Route::get('/dashboard', DashboardController::class,)->middleware(['auth', 'verified'])->name('dashboard');
    // return view('dashboard');

Route::get('/applicant/dashboard', function () {
    return view('applicant.dashboard');
})->middleware(['auth', 'role:applicant'])->name('applicant.dashboard');

Route::get('/doc/dashboard', function () {
    return view('doc.dashboard');
})->middleware(['auth', 'role:doc'])->name('doc.dashboard');

Route::get('/admin/dashboard', function () {
    return view('admin.dashboard');
})->middleware(['auth', 'role:admin'])->name('admin.dashboard');

Route::resource('applicant/scheduled', ScheduledSessionController::class)
->only(['index','create','store','destroy',])
->middleware(['auth', 'role:applicant']);

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
