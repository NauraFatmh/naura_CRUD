<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KeysarController;

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

Route::get('keysar', [KeysarController::class, 'index'])->name('keysar.index');
Route::get('keysar-create', [KeysarController::class, 'create'])->name('keysar.create');
Route::post('keysar-store', [KeysarController::class, 'store'])->name('keysar.store');

Route::get('keysar-edit/edit/{id}', [KeysarController::class, 'edit'])->name('keysar.edit');
Route::post('keysar-update/{id}', [KeysarController::class, 'update'])->name('keysar.update');
Route::get('keysar-show/{id}', [KeysarController::class, 'show'])->name('keysar.show');
Route::delete('keysar-delete/{id}', [KeysarController::class, 'destroy'])->name('keysar.destroy');


// Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
