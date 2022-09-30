<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::get('dashboard',DashboardController::class)->name('dashboard');
Route::get('dashboard/products/index',[ProductController::class,'index'])->name('index');
Route::get('dashboard/products/create',[ProductController::class,'create'])->name('create');
Route::get('dashboard/products/edit/{$id}',[ProductController::class,'edit'])->name('edit');
Route::post('dashboard/products/store',[ProductController::class,'store'])->name('store');
Route::put('dashboard/products/update/{$id}',[ProductController::class,'update'])->name('update');
Route::delete('dashboard/products/delete/{$id}',[ProductController::class,'delete'])->name('delete');




require __DIR__.'/auth.php';
