<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers;
use App\Http\Controllers\Controller;

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

Route::get('/admin', [App\Http\Controllers\Controller::class, 'showProduct']);




Route::get('/categories', [App\Http\Controllers\CategoriesController::class, 'index']);
Route::get('/categories/create', [App\Http\Controllers\CategoriesController::class, 'create']);



Route::post('/categories', [App\Http\Controllers\CategoriesController::class, 'store']);
Route::get('/Categories/{id}', [App\Http\Controllers\CategoriesController::class, 'store']);


Route::get('/categories/{id}/edit', [App\Http\Controllers\CategoriesController::class, 'edit']);
Route::get('/categori', [App\Http\Controllers\CategoriesController::class, 'show']);


Route::delete('/cAtegories/{id}', [App\Http\Controllers\CategoriesController::class, 'destroy']);










