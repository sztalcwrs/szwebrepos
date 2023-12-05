<?php

use App\Http\Controllers\backend\ProductController;

use App\Http\Controllers\frontend\AboutController;
use App\Http\Controllers\frontend\ContactController;
use App\Http\Controllers\frontend\HomeController;
use App\Http\Controllers\frontend\ProductsController;

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [HomeController::class, 'index']);

Route::get('allproducts/{product}',  'App\Http\Controllers\frontend\ProductController@show')->name('allproducts.show');

Route::get('/products', [ProductsController::class, 'index']);

Route::get('/about', [AboutController::class, 'index']);
Route::get('/contact', [ContactController::class, 'index']);


Route::middleware('auth')->group(function () {

    Route::get('/dashboard', function () {
        return view('backend.dashboard.index');
    })->name('dashboard');

    Route::get('product',  'App\Http\Controllers\backend\ProductController@index')->name('product.index');

    Route::post('product',  'App\Http\Controllers\backend\ProductController@store')->name('product.store');

    Route::get('product/create',  'App\Http\Controllers\backend\ProductController@create')->name('product.create');

    Route::get('product/{product}',  'App\Http\Controllers\backend\ProductController@show')->name('product.show');

    Route::put('product/{product}',  'App\Http\Controllers\backend\ProductController@update')->name('product.update');
    Route::delete('product/{product}',  'App\Http\Controllers\backend\ProductController@destroy')->name('product.destroy');
    Route::get('product/{product}/edit',  'App\Http\Controllers\backend\ProductController@edit')->name('product.edit');
});

Route::group(['prefix' => 'laravel-filemanager', 'middleware' => ['auth']], function () {
    \UniSharp\LaravelFilemanager\Lfm::routes();
});


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';