<?php

use App\Models\Manufacturer;
use App\Models\Order;
use App\Models\Product;
use App\Models\User;
use Illuminate\Support\Facades\Route;
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
    return view('main');
})->name('home');

Route::get('/user', function(){
    return view('user')->with([
        'users' => User::all(),
    ]);
})->name('user');
Route::get('/user/{id}', function($id){
    return view('user_view')->with([
        'user' => User::find($id),
    ]);
})->name('user.view');


Route::get('/product', function(){
    return view('product')->with([
        'products' => Product::all(),
    ]);
})->name('product');

Route::get('/product/{id}', function($id){
    return view('product_view')->with([
        'product' => Product::find($id),
    ]);
})->name('product.view');

Route::get('/manufacturer', function(){
    return view('manufacturer')->with([
        'manufacturers' => Manufacturer::all(),
    ]);
})->name('manufacturer');

Route::get('/manufacturer/{id}', function($id){
    return view('manufacturer_view')->with([
        'manufacturer' => Manufacturer::find($id),
    ]);
})->name('manufacturer.view');

Route::get('/order/{id}', function($id){
    return view('order_view')->with([
        'order' => Order::find($id),
    ]);
})->name('order.view');


Route::get('/create/user', [TestController::class, 'createUserForm'])->name('create.user');
Route::get('/create/user/thank', [TestController::class, 'createUserThank'])->name('create.user.thank');
Route::post('/create/user', [TestController::class, 'createUserPost'])->name('create.user.post');
