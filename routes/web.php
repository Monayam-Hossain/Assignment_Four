<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

Route::get('/', function () {
    return view('welcome');
});

Route::get("/products",[ProductController::class,"products"]);
Route::get("/products/create",[ProductController::class,"create"]);
Route::post("/products",[ProductController::class,"products"]);
Route::get("/products/{id}",[ProductController::class,"show"]);
Route::get("/products/{id}/edit",[ProductController::class,"edit"]);
Route::post("/products/{id}",[ProductController::class,"update"]);
Route::delete("/products/{id}",[ProductController::class,"delete"]);