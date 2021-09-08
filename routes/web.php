<?php

use App\Http\Controllers\LayoutAdminController;
use App\Http\Controllers\ProductController;
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

Route::get('/home-page', [ProductController::class, 'index']);
Route::get('/create', [ProductController::class, 'create']);
Route::post('/create', [ProductController::class, 'store']);

Route::get('/admin', function () {
    return view('layout-admin/dashboard');
});


Route::get('',[LayoutAdminController::class,'dashboard']);
Route::get('/form',[LayoutAdminController::class,'create']);
Route::get('/list',[LayoutAdminController::class,'list']);
