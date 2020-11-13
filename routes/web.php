<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\MisionController;
use App\Http\Controllers\Products\ProductsController;
use App\Http\Controllers\Products\ProductoController;

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


Route::get   ('company',[ CompanyController::class , 'index'])       ->name('company.index');
Route::get   ('mision', [ MisionController::class , 'index' ])       ->name('mision.index');

Route::get   ('company/create',[CompanyController::class, 'create'])  ->name('company.create');
Route::post  ( 'company',[CompanyController::class, 'store'])         ->name('company.store');
Route::delete( 'company/{id}', [CompanyController::class , 'destroy'])->name('company.destroy');
Route::get   ('company/{id}', [CompanyController::class, 'show'])->name( 'company.show');
// Editar
Route::get('company/edit/{id}',[CompanyController::class,'edit'])->name('company.edit');
Route::put('company/{id}',[CompanyController::class,'update'])   ->name('company.update');





//rutas product types
Route::get('product_type',[ProductsController::class,'index'])->name('product_type.index');
Route::get('product_type/create',[ProductsController::class,'create'])->name('product_type.create');
Route::post('product_type',[ProductsController::class,'store'])->name('product_type.store');
Route::delete('product_type/{id}',[ProductsController::class,'destroy'])->name('product_type.destroy');
Route::get('product_type/{id}/edit',[ProductsController::class,'edit'])->name('product_type.edit');
Route::patch('product_type/update/{id}',[ProductsController::class,'update'])->name('product_type.update');
Route::get('product_type/{id}',[ProductsController::class,'show'])->name('product_type.show');



// producto
Route::get('product/create',[ProductoController::class,'create'])->name('product.create');
Route::post('product',[ProductoController::class,'store'])->name('product.store');
Route::get( 'product', [ProductoController::class, 'index'])->name( 'product.index');
Route::delete( 'product/{id}', [ProductoController::class, 'destroy'] )->name( 'product.destroy');
Route::get('product/edit/{id}', [ProductoController::class, 'edit'] )->name('product.edit');
Route::put('product/{id}',[ProductoController::class,'update'])->name('product.update');

// join

Route::get('product/{id}',[ProductoController::class,'show'])->name('product.show');


//Route::get('/', 'ProductController@joinP');




