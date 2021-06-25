<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use Illuminate\Http\Request;
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

// Route::get('/', function () {
//     return view('folder1/index');
// });

Route::get('/index2', function () {
    return view('folder2/index');
});

Route::get('/products', [ProductController::class, 'index']);
Route::get('/products/about', [ProductController::class, 'about']);
Route::post('/products/show', [ProductController::class, 'show']);
Route::post('/products/shows', [ProductController::class, 'shows']);