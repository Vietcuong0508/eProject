<?php

use App\Http\Controllers\AdminClientController;
use App\Http\Controllers\LayoutAdminController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ShoppingCartController;
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

Route::get('/', [ProductController::class, 'listHome']);
Route::get('/home/product', [ProductController::class, 'indexProduct']);
Route::get('/home/login', [AdminClientController::class, 'login']);
Route::get('/home/register', [AdminClientController::class, 'register']);
Route::post('/home/register', [AdminClientController::class, 'store']);

Route::get('/admin/list-user', [AdminClientController::class, 'index']);
Route::get('/admin/create-user', [AdminClientController::class, 'create']);
Route::post('/admin/create-user', [AdminClientController::class, 'storeAdmin']);
Route::delete('/admin/destroy/{id}', [AdminClientController::class, 'destroy']);
Route::put('/admin/update/{id}', [AdminClientController::class, 'update']);
Route::get('/admin/edit/{id}', [AdminClientController::class, 'edit']);

Route::get('/admin/list-product', [ProductController::class, 'index']);
Route::get('/admin/create-product', [ProductController::class, 'create']);
Route::post('/admin/create-product', [ProductController::class, 'store']);
Route::put('/admin/update-product/{id}', [ProductController::class, 'update']);
Route::get('/admin/edit-product/{id}', [ProductController::class, 'edit']);
Route::delete('/admin/destroy-product/{id}', [ProductController::class, 'destroy']);

Route::get('/shopping/add', [ShoppingCartController::class, 'add'])->name('name');
Route::get('/shopping/cart', [ShoppingCartController::class, 'show']);
Route::get('/shopping/remove', [ShoppingCartController::class, 'remove']);
Route::post('/shopping/save', [ShoppingCartController::class, 'save']);
Route::post('/shopping/order', [ShoppingCartController::class, 'create_payment']);

Route::get('/admin/list-order', [OrderController::class, 'index']);

Route::get('/admin', function () {
    return view('layout-admin/dashboard');
});
