<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

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
    //root

    return view('About');
});

Route::get('/xyz', function () {
    return '<h1>Welcome to the Simple App HomePage</h1>';
});

Route::get('/Contact/{name?}', function ($name = null) {
    //contact/xyz
    return view('Contact', ['name' => $name]); //xyz
});


Route::resource('products', ProductController::class); //product/create