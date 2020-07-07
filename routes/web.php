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

Route::get('/', function () {
    return view('welcome', [
        'products' => App\Product::take(10)->first()->get()
    ]);
});

Auth::routes();


//shows the login page for the user
Route::get('/home', 'HomeController@index')->name('home');

//shows the products available to the user on the products 'show' page
Route::get('products/{product}', 'ProductController@show')->name('products.show');

//shows the products on the main page
Route::get('products', 'ProductController@index')->name('products.index');

//shows the cart view
Route::get('/shopping_cart/cart', 'CartController@view')->name('shopping_cart.cart');

//adds the item they have selected into their cart
Route::post('/shopping_cart/added', 'CartController@addToCart')->name('shopping_cart.added');

//shows the view for the shopping cart with items
Route::get('/products/cart', 'CartController@show')->name('products.cart');

//route to create an order
Route::get('/orders/create', 'OrderController@create')->name('orders.create');

//notification letting the user know they've made an order
Route::post('/orders/added', 'OrderController@store')->name('orders.added');

//route to let them know they've deleted an object
Route::post('shopping_cart/delete', 'CartController@delete')->name('shopping_cart/delete');

//route to let them know they've edited an object
Route::post('shopping_cart/edit', 'CartController@edit')->name('shopping_cart.edit');



