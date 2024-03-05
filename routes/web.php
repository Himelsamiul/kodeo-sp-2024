<?php

use App\Http\Controllers\Backend\CategoryController;
use App\Http\Controllers\Backend\ProductController;
use App\Http\Controllers\HomeController;
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
Route::get('/',[HomeController::class,'showHomePage']);

Route::get('/order/list',[HomeController::class,'orderList'])->name('order.list');

Route::get('/product/list',[ProductController::class,'list'])->name('product.list');

Route::get('/product/create/form',[ProductController::class,'createForm'])->name('product.create.form');

Route::get('/category/list',[CategoryController::class,'list'])->name('category.list');

Route::get('/category/form',[CategoryController::class,'categoryForm'])->name('category.form');

Route::post('/category/store',[CategoryController::class,'categoryStore'])->name('category.store');