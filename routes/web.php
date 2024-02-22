<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\categoryController;
use App\Http\Controllers\filemController;


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

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// routes/web.php


// Kategori
Route::get('categories', [categoryController::class, 'index'])->name('categories.index');
Route::get('categories/create', [categoryController::class, 'create'])->name('categories.create');
Route::post('categories', [categoryController::class, 'store'])->name('categories.store');
Route::get('categories/{category}/edit', [categoryController::class, 'edit'])->name('categories.edit');
Route::put('categories/{category}', [categoryController::class, 'update'])->name('categories.update');
Route::delete('categories/{category}', [categoryController::class, 'destroy'])->name('categories.destroy');

// Berita
Route::get('filem', [filemController::class, 'index'])->name('filem.index');
Route::get('filem/create', [filemController::class, 'create'])->name('filem.create');
Route::post('filem', [filemController::class, 'store'])->name('filem.store');
Route::get('filem/{filem}/edit', [filemController::class, 'edit'])->name('filem.edit');
Route::put('filem/{filem}', [filemController::class, 'update'])->name('filem.update');
Route::delete('filem/{filem}', [filemController::class, 'destroy'])->name('filem.destroy');
