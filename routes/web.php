<?php

use App\Http\Controllers\Admin\Post\PostController;
use App\Http\Controllers\Admin\Tag\TagController;
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
        Route::get('/{category}', [App\Http\Controllers\Admin\Category\ShowController::class, '__invoke'])->name('admin.category.show');
        Route::get('/{category}/edit', [App\Http\Controllers\Admin\Category\EditController::class, '__invoke'])->name('admin.category.edit');
        Route::patch('/{category}', [App\Http\Controllers\Admin\Category\UpdateController::class, '__invoke'])->name('admin.category.update');
        Route::delete('/{category}', [App\Http\Controllers\Admin\Category\DeleteController::class, '__invoke'])->name('admin.category.delete');
    });
    Route::prefix('tags')->controller(TagController::class)->group(function(){
        Route::get('/', 'index')->name('admin.tag.index');
        Route::get('/create', 'create')->name('admin.tag.create');
        Route::post('/', 'store')->name('admin.tag.store');
        Route::get('/{tag}', 'show')->name('admin.tag.show');
        Route::get('/{tag}/edit', 'edit')->name('admin.tag.edit');
        Route::patch('/{tag}', 'update')->name('admin.tag.update');
        Route::delete('/{tag}', 'delete')->name('admin.tag.delete');
    });
    Route::prefix('posts')->controller(PostController::class)->group(function(){
        Route::get('/', 'index')->name('admin.post.index');
        Route::get('/create', 'create')->name('admin.post.create');
        Route::post('/', 'store')->name('admin.post.store');
    });

});

Auth::routes();


