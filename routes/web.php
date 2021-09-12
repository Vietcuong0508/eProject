<?php

use App\Http\Controllers\AdminClientController;
use App\Http\Controllers\LayoutAdminController;
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

Route::get('/home', function () {
    return view('layout/layout');
});

Route::get('/home-page', [ProductController::class, 'listHome']);
Route::get('/home-page/product', [ProductController::class, 'indexProduct']);
Route::get('/home-page/login', [AdminClientController::class, 'login']);
Route::get('/home-page/register', [AdminClientController::class, 'register']);
Route::post('/home-page/register', [AdminClientController::class, 'store']);

Route::get('/admin/list-user', [AdminClientController::class, 'index']);
Route::get('/admin/create-user', [AdminClientController::class, 'create']);
Route::post('/admin/create-user', [AdminClientController::class, 'storeAdmin']);
Route::delete('/admin/destroy/{id}', [AdminClientController::class, 'destroy']);
Route::put('/admin/update/{id}', [AdminClientController::class, 'update']);
Route::get('/admin/edit/{id}', [AdminClientController::class, 'edit']);
Route::get('/admin/create', [ProductController::class, 'create']);
Route::post('/admin/create', [ProductController::class, 'store']);

Route::get('/shopping/add', [ShoppingCartController::class, 'add'])->name('name');
Route::get('/shopping/cart', [ShoppingCartController::class, 'show']);
Route::get('/shopping/remove', [ShoppingCartController::class, 'remove']);
Route::post('/shopping/save', [ShoppingCartController::class, 'save']);


Route::get('/admin', function () {
    return view('layout-admin/dashboard');
});


Route::get('',[LayoutAdminController::class,'dashboard']);
Route::get('/form',[LayoutAdminController::class,'create']);
Route::get('/list',[LayoutAdminController::class,'list']);
