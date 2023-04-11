<?php

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

Route::get('/', function () {
    return view('home');
});

Route::get('/home', function () {
    return view('home');
});
// Route::get('/product', [ProductController::class, 'index']);

Route::get('/{nama}', [ProductController::class, 'index']);

Route::get('description/{id}', [ProductController::class, 'show']);

// Route::get('description/{id}', function () {
//     return view('example.description');
// });




// Route::get('/product', function () {
//     return view('example.product');
// });

// Route::get('/product', [ProductController::class, 'product']);
