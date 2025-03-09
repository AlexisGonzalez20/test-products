<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DivisaController;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\PrecioProductoController;

// Rutas para Divisas
// Mostrar una lista de todas las divisas
Route::get('divisas',[DivisaController::class,'index']);

// Mostrar una divisa específica por su identificador 
Route::get('divisas/{id}',[DivisaController::class,'show']);

// Crear una nueva divisa
Route::post('divisas',[DivisaController::class,'store']);

// Actualizar una divisa específica por su identificador
Route::put('divisas/{id}',[DivisaController::class,'update']);

// Eliminar una divisa específica por su identificador
Route::delete('divisas/{id}',[DivisaController::class,'destroy']);



// Rutas para Productos
// Mostrar una lista de todos los productos
Route::get('products',[ProductoController::class,'index']);

// Mostrar un producto específico por su identificador
Route::get('products/{id}',[ProductoController::class,'show']);

// Crear un nuevo producto
Route::post('products',[ProductoController::class,'store']);

// Actualizar un producto específico por su identificador
Route::put('products/{id}',[ProductoController::class,'update']);

// Eliminar un producto específico por su identificador
Route::delete('products/{id}',[ProductoController::class,'destroy']);

// Obtener los precios asociados a un producto específico
Route::get('products/{id}/prices',[ProductoController::class,'ProductPrices']);

// Agregar precios a un producto específico
Route::post('products/{id}/prices',[ProductoController::class,'StoreProductPrices']);



// Rutas para Precios de Productos
// Mostrar una lista de todos los precios de productos
Route::get('preciosproductos',[PrecioProductoController::class,'index']);

// Mostrar un precio de producto específico por su identificador
Route::get('preciosproductos/{id}',[PrecioProductoController::class,'show']);

// Crear un nuevo precio de producto
Route::post('preciosproductos',[PrecioProductoController::class,'store']);

// Actualizar un precio de producto específico por su identificador
Route::put('preciosproductos/{id}',[PrecioProductoController::class,'update']);

// Eliminar un precio de producto específico por su identificador
Route::delete('preciosproductos/{id}',[PrecioProductoController::class,'destroy']);