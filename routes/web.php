<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\TestController;
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

// DB test
Route::get('/test', [TestController::class, 'index']);
Route::get('/test/write', [TestController::class, 'write']);
Route::post('/test/write', [TestController::class, 'save']);
Route::get('/test/show/{id}', [TestController::class, 'show']);
Route::get('/test/edit/{id}', [TestController::class, 'edit']);
Route::put('/test/editProcess', [TestController::class, 'editProcess']);
Route::delete('/test/delete/{id}', [TestController::class, 'destroy']);
// Vue test
// Route::get('/app', [TestController::class, 'app']);

Route::get('/index2', function () {
    return view('folder2/index');
});

Route::get('/products', [ProductController::class, 'index']);
Route::get('/products/about', [ProductController::class, 'about']);
Route::post('/products/show', [ProductController::class, 'show']);
Route::post('/products/shows', [ProductController::class, 'shows']);