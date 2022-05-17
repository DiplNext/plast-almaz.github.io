<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\CatalogController;
use App\Http\Controllers\ContactsController;
use App\Http\Controllers\HomeController;
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

Route::get('/', [HomeController::class, 'index'])->name('home');
// Route::get('catalog', [CatalogController::class, 'index'])->name('catalog');
Route::prefix('catalog')->group(function () {
  Route::get('{category}', [CatalogController::class, 'category'])->name('category');
  Route::get('{category}/{product}', [ProductController::class, 'index'])->name('product');
});
Route::get('about', [AboutController::class, 'index'])->name('about');
Route::get('contacts', [ContactsController::class, 'index'])->name('contacts');
