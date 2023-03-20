<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\PortHomeController;
use App\Http\Controllers\PortCategoryController;
use App\Http\Controllers\PortProductsController;
use App\Http\Controllers\PortCartController;
use App\Http\Controllers\checkoutController;
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

    return view('about');
});


Route::get('/xyz', function () {
    return '<h1>Welcome to the Simple App HomePage</h1>';
});
Route::get('/checkout',function(){
    return view('FrontPortWeb.Main_Layout.checkout');
});

Route::get('/Contact/{name?}', function ($name = null) {
    //contact/xyz
    return view('Contact', ['name' => $name]); //xyz
});

//Category & Product Form
Route::resource('products', ProductController::class); //product/create
Route::get('/form',[ProductController::class,'create'])->name('add'); //creating own url and route
Route::resource('category', CategoryController::class);
Route::get('/category_trash',[CategoryController::class,'trash']);
Route::get('/category_restore/{id}',[CategoryController::class,'restore']);
Route::get('/category/delete/{id}',[CategoryController::class,'delete']);

//Portfolio Website Main Layout
Route::resource('portfolio',PortHomeController::class)->middleware('isLoggedIn');
Route::get('/register',[PortHomeController::class,'register'])->name('register')->middleware('alreadyLogIn');
Route::get('/registerform',[PortHomeController::class,'reg_form'])->name('reg_form');
Route::get('/contact',[PortHomeController::class,'contact'])->name('contact');
Route::get('/login',[PortHomeController::class,'login'])->name('login')->middleware('alreadyLogIn');
Route::get('/loggedin',[PortHomeController::class,'loggedin'])->name('loggedin');
Route::get('/logout',[PortHomeController::class,'logout'])->name('logout');

Route::get('product-category/{category}',[PortProductsController::class,'show'])->name('catProd');
Route::get('/store',[PortProductsController::class,'stores'])->name('allProd')->middleware('isLoggedIn');
// Route::get('product-info/{id}',[PortProductsController::class,'stores'])->name('allProd')->middleware('isLoggedIn');
Route::get('product-info/{CatName}/{Prodid}',[PortProductsController::class,'ProdInfo'])->name('ProductInfo');
Route::post('/add-to-cart',[PortCartController::class,'addProductcart']);
Route::resource('cart',PortCartController::class);
Route::resource('checkout',checkoutController::class);

//Portfolio Website Admin Dashboard
Route::get('/components',function(){
    return view('FrontPortWeb.Admin_Dashboard.components');
});
Route::get('/Dashboard',function(){
    return view('FrontPortWeb.Admin_Dashboard.Dashboard');
});
Route::resource('Admin-category',PortCategoryController::class);
Route::get('Admin-category-add',[PortCategoryController::class,'create'])->name('catAdd');
Route::get('/AdminDashboard/ViewCategory',[PortCategoryController::class,'index']);

Route::resource('Admin-product',PortProductsController::class);
Route::get('Admin-product-add',[PortProductsController::class,'create'])->name('prodAdd');
Route::get('Admin-product-info',[PortProductsController::class,'ProdInfoAdd']);
Route::get('Admin-product-info-store',[PortProductsController::class,'ProdInfostore'])->name('ProdInfoStore');








// Route::get('/ab', [ProductController::class,'create'])->name('cap');
// Route::get('products/create/reload-captcha', [App\Http\Controllers\ProductController::class, 'reloadCaptcha']);
// Route::get('/reload-captcha', [ProductController::class, 'reloadCaptcha']); 
// Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

