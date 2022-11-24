<?php

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
Route::get('/', [App\Http\Controllers\Main\IndexController::class, '__invoke'])->name('index');


Route::prefix('admin')->group(function () {
    Route::get('/', [App\Http\Controllers\Admin\Main\IndexController::class, '__invoke'])->name('admin.index');
    Route::prefix('categories')->group(function () {
        Route::get('/', [App\Http\Controllers\Admin\Category\IndexController::class, '__invoke'])->name('admin.category.index');
        Route::get('/create', [App\Http\Controllers\Admin\Category\CreateController::class, '__invoke'])->name('admin.category.create');
        Route::post('/', [App\Http\Controllers\Admin\Category\StoreController::class, '__invoke'])->name('admin.category.store');
    });
});
Auth::routes();


