<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Order;
use App\Product;
use App\Cart;
use App\User;
use Auth;

class OrderController extends Controller
{
    //takes the information needed for the user into the page so it can be given to the form
    public function create(){

        
        
        $carts = Cart::all();
        $products = Product::all();


        $totals = CartController::total();

        return view('orders.create', compact( 'carts', 'products', 'totals'));
    }


    //stores the form data for the user in the order table
    public function store(){

        $order = new Order();

        $order->name = request('name');
        $order->address = request('address');
        $order->items = request('items');
        $order->price = request('price');
        $order->user_id = request('user_id');

        $order->save();

        

        return view('orders.added');
    }
}
