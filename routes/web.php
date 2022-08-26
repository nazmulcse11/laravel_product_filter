<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductFilterController;


Route::get('/',[ProductFilterController::class,'all_products'])->name('all.products');
Route::get('/search-product',[ProductFilterController::class,'search_products'])->name('search.products');
Route::get('/sort-by',[ProductFilterController::class,'sort_by'])->name('sort.by');
