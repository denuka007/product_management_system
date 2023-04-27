<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProductController;
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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

//product routes
Route::post('/product/adding', [ProductController::class, 'AddProduct'])->middleware(['auth', 'verified'])->name('product.add');
Route::get('/product/View', [ProductController::class, 'ViewProduct'])->middleware(['auth', 'verified'])->name('prodcut.view');
Route::get('/product/Delete/{Id}', [ProductController::class, 'DeleteProduct'])->middleware(['auth', 'verified'])->name('product.delete');
Route::get('/product/update/{Id}', [ProductController::class, 'UpdateProduct'])->middleware(['auth', 'verified'])->name('product.update');
Route::put('/product/update/done/{Id}', [ProductController::class, 'UpdateProductDone'])->middleware(['auth', 'verified'])->name('product.updatedone');
//end of product routes

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
