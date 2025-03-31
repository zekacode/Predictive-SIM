<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SalesDataController;

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

Route::get('/', [SalesDataController::class, 'index'])->name('sales_data.index');
Route::get('/sales_data/create', [SalesDataController::class, 'create'])->name('sales_data.create');
Route::post('/sales_data', [SalesDataController::class, 'store'])->name('sales_data.store');
Route::get('/sales_data/show', [SalesDataController::class, 'show'])->name('sales_data.show');
Route::get('/sales_data/edit', [SalesDataController::class, 'edit'])->name('sales_data.edit');
Route::post('/sales_data/update', [SalesDataController::class, 'update'])->name('sales_data.update');
Route::get('/sales_data/destroy', [SalesDataController::class, 'destroy'])->name('sales_data.destroy');