<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\sekolahsController;
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
Route::get('/home', function () {
    return view('home');
});
Route::get('/login', function () {
    return view('admin');
});                               
Route::get('/sekolahs', [sekolahsController::class, 'index'])->name('sekolahs.index');
Route::get('/sekolahs/create', [sekolahsController::class, 'create'])->name('sekolahs.create');
Route::post('/sekolahs', [sekolahsController::class, 'store'])->name('sekolahs.store');
Route::get('/sekolahs/{id}/edit', [sekolahsController::class, 'edit'])->name('sekolahs.edit');
Route::put('/sekolahs/{id}', [sekolahsController::class, 'update'])->name('sekolahs.update');
Route::delete('/sekolahs/{id}', [sekolahsController::class, 'destory'])->name('sekolahs.destroy');


// Route::get('/dashboard', function () {
//     return view('dashboard'); 
// })->middleware(['auth', 'verified'])->name('dashboard');



// Route::middleware('auth')->group(function () {
//     Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//     Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//     Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
// });

// require __DIR__.'/auth.php';
