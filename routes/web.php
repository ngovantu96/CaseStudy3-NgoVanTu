<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', [LoginController::class, 'showLogin'])->name('login');
Route::post('/login', [LoginController::class, 'login'])->name('admin.login');
Route::get('logout', [LoginController::class, 'logout'])->name('admin.logout');

Route::middleware('auth')->prefix('admin')->group(function (){
    Route::prefix('user')->group(function () {
        Route::get('/', [UserController::class, 'index'])->name('user.index');
        Route::get('/create', [UserController::class, 'create'])->name('user.create');
        Route::post('/create', [UserController::class, 'store'])->name('user.store');
        Route::get('/edit/{id}', [UserController::class, 'edit'])->name('user.edit');
        Route::post('/edit/{id}', [UserController::class, 'update'])->name('user.update');
        Route::get('/delete/{id}', [UserController::class, 'destroy'])->name('user.delete');
    });
    Route::prefix('role')->group(function () {
        Route::get('/', [RoleController::class, 'index'])->name('role.list');
        Route::post('/create', [RoleController::class, 'create'])->name('role.create');
        Route::post('/create', [RoleController::class, 'store'])->name('role.create');
        Route::get('/{id}/edit', [RoleController::class, 'edit'])->name('role.edit');
        Route::post('/{id}/edit', [RoleController::class, 'update'])->name('role.update');
        Route::get('/{id}/delete', [RoleController::class, 'destroy'])->name('role.delete');
    });
    Route::prefix('customer')->group(function () {
        Route::get('/', [CustomerController::class, 'index'])->name('customer.list');
        Route::post('/create', [CustomerController::class, 'store'])->name('customer.create');
        Route::get('/{id}/edit',[CustomerController::class ,'edit'])->name('customer.edit');
    });
    Route::prefix('product')->group(function () {
        Route::get('/', [ProductController::class, 'index'])->name('product.index');
        Route::get('/create', [ProductController::class, 'create'])->name('product.create');
        Route::post('/create', [ProductController::class, 'store'])->name('product.store');
        Route::get('/{id}/edit',[ProductController::class ,'edit'])->name('product.edit');
        Route::post('/{id}/edit',[ProductController::class ,'update'])->name('product.update');
        Route::get('/{id}/delete',[ProductController::class ,'destroy'])->name('product.delete');
    });
    Route::prefix('category')->group(function () {
        Route::get('/', [CategoryController::class, 'index'])->name('category.list');
        Route::post('/create', [CategoryController::class, 'create'])->name('category.create');
        Route::post('/create', [CategoryController::class, 'store'])->name('category.create');
        Route::get('/{id}/edit', [CategoryController::class, 'edit'])->name('category.edit');
        Route::post('/{id}/edit', [CategoryController::class, 'update'])->name('category.update');
        Route::get('/{id}/delete', [CategoryController::class, 'destroy'])->name('category.delete');
    });




});

//Route::get('/admin', function () {
//    return view('admin.login');
//});


