<?php

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

Route::middleware(['auth', 'verified'])->group(function () {
    Route::view('/', 'welcome')->name('home');
    Route::view('/home', 'home')->name('home');
    Route::view('/test', 'test')->name('test');
});

// /profile: This route is accessed with the HTTP GET method and is handled by the edit method of the ProfileController. It is named as profile.edit.
// /profile: This route is accessed with the HTTP PATCH method and is handled by the update method of the ProfileController. It is named as profile.update.
// /profile: This route is accessed with the HTTP DELETE method and is handled by the destroy method of the ProfileController. It is named as profile.destroy.
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
