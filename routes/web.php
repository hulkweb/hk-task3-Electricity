<?php

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

Route::get("/customers",[\App\Http\Controllers\CustomerController::class,'index']);
Route::get("/customer/create",[\App\Http\Controllers\CustomerController::class,'create'])->name('customer.create');
Route::post("/customer/store",[\App\Http\Controllers\CustomerController::class,'store'])->name('customer.store');
Route::post("/customer/update",[\App\Http\Controllers\CustomerController::class,'update'])->name('customer.update');
Route::get("/customer/delete/{id}",[\App\Http\Controllers\CustomerController::class,'delete'])->name('customer.delete');
Route::get("/customer/show/{id}",[\App\Http\Controllers\CustomerController::class,'show'])->name('customer.show');
Route::get("/customer/edit/{id}",[\App\Http\Controllers\CustomerController::class,'edit'])->name('customer.delete');


Route::get("/bills",[\App\Http\Controllers\BillController::class,'index']);
Route::get("/bill/create",[\App\Http\Controllers\BillController::class,'create'])->name('bill.create');
Route::post("/bill/store",[\App\Http\Controllers\BillController::class,'store'])->name('bill.store');
Route::get("/bill/delete/{id}",[\App\Http\Controllers\BillController::class,'delete'])->name('bill.delete');
Route::get("/bill/show/{id}",[\App\Http\Controllers\BillController::class,'show'])->name('bill.show');


