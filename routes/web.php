<?php

use App\Http\Controllers\productController;
use Illuminate\Support\Facades\Route;


Route::get('/',[productController::class,'index'])->name('product.index');
Route::get('products/create',[productController::class,'create'])->name('product.create');
Route::post('products/store',[productController::class,'store'])->name('product.store');
Route::get('products/{id}/edit',[productController::class,'edit'])->name('product.edit');
Route::put('products/{id}/update',[productController::class,'update'])->name('product.update');
Route::get('products/{id}/Deleted',[productController::class,'Destory']);
Route::get('products/{id}/show',[productController::class,'show']);
