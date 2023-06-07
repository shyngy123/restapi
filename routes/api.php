<?php
use App\Http\Controllers\AuthController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;



use App\Http\Controllers\Api\v1\CartController;
use App\Http\Controllers\Api\v1\CategoryController;
use App\Http\Controllers\Api\v1\OrderController;
use App\Http\Controllers\Api\v1\ProductController;
use App\Http\Controllers\Api\v1\UserController;



Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// Пользователь: регистрация пользователя
Route::post('/register', [UserController::class, 'register']);

// Пользователь: аутентификация пользователя
Route::post('/login', [UserController::class, 'login']);

// Категория: получение списка категорий в виде дерева
Route::get('/categories', [CategoryController::class, 'index']);

// Продукт: получение списка продуктов
Route::get('/products', [ProductController::class, 'index']);

// Корзина: добавление продукта/продуктов
Route::post('/cart', [CartController::class, 'addToCart']);

// Корзина: редактирование количества продуктов
Route::put('/cart/{cartId}', [CartController::class, 'updateCartItem']);

// Корзина: удаление продукта
Route::delete('/cart/{cartId}', [CartController::class, 'removeCartItem']);

// Заказ: оформление заказа
Route::post('/order', [OrderController::class, 'placeOrder']);

// Заказ: получение списка оформленных заказов
Route::get('/orders', [OrderController::class, 'index']);


Route::get('/greeting', function () {
    return 'Hello World';
});