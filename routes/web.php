<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KategoriController;

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

Route::get('/', [KategoriController::class, 'index'])->name('kategori.index');
Route::get('kategori-create', [KategoriController::class, 'create'])->name('kategori.create');
Route::post('kategori-store', [KategoriController::class, 'store'])->name('kategori.store');

Route::get('kategori-edit/edit/{id}', [KategoriController::class, 'edit'])->name('kategori.edit');
Route::post('kategori-update/{id}', [KategoriController::class, 'update'])->name('kategori.update');
Route::get('kategori-show/{id}', [KategoriController::class, 'show'])->name('kategori.show');
Route::delete('kategori-delete/{id}', [KategoriController::class, 'destroy'])->name('kategori.destroy');


// Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
