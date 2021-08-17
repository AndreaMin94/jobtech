<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Middleware\AdminMiddleware;
use App\Http\Controllers\QuotationController;

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



Auth::routes();

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/chi-siamo', [HomeController::class, 'aboutUs'])->name('aboutUs');


Route::middleware([AdminMiddleware::class])->group(function() {
    Route::get('/admin', [QuotationController::class, 'admin'])->name('quotation.admin');
    // Route::get('/quotation/{quotation}/edit', [QuotationController::class, 'edit'])->name('quotation.edit');
    // Route::post('/quotation/{quotation}/update', [QuotationController::class, 'update'])->name('quotation.update');
    // Route::delete('/quotation/{quotation}/delete', [QuotationController::class, 'delete'])->name('quotation.delete');
    // Route::post('/quotation/store', [QuotationController::class, 'store'])->name('quotation.store');
});
