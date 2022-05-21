<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MstProductController;


Route::get('/', [HomeController::class, 'index']);
// 商品
Route::get('admin/product_management', [MstProductController::class, 'index']);
Route::view('admin/product_management/create', 'product_create')->name("create");
Route::post('admin/product_management/create', [MstProductController::class, 'create']);
Route::get('admin/product_management/edit/{id}', [MstProductController::class, 'show_edit_screen'])->name("edit");
Route::post('admin/product_management/edit/{id}', [MstProductController::class, 'update']);



