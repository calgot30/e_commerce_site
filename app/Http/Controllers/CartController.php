<?php

namespace App\Http\Controllers;
use App\Cart;
use App\Product;
use Request;

class CartController extends Controller
{
    //

    public function show(Cart $cart)
    {
        return view('shopping_cart.show', compact('show'));
    }


   

    //adds the current item being viewed to the cart for the user
    public function addToCart(){
        $cart = new Cart();

        

        $cart->product_id = request('productID');
        $cart->quantity = request('quantity');

        $cart->save();

        
        $product = Product::take('product_name')->where('id', $cart->product_id)->first();
        // dd($product);
        return view('shopping_cart.added', compact('cart', 'product'));
    }


    //the view for the cart, uses the total() function to give me a total price for the cart
    public function view(){
        $carts = Cart::all();
        $products = Product::all();
        
        $totals = CartController::total();
       


      
        //attempts to make it work
        // $product = Product::take('product_name')->where('id', $cart->product_id)->first();

        //testing arrays
        // dd($product);
        // dd($cart, $product);

        // return view('shopping_cart.cart', compact('cart', 'product'));
        return view('shopping_cart.cart', compact ('carts', 'products', 'totals'));
    }


    
    //Gives the total price indication of the cart for the user
    public static function total(){
        $totals = 0;

        $carts = Cart::all();
        

        
        foreach($carts as $cart){
                $products = Product::take('price')->where('id', $cart->product_id)->first();

           
                $totals = $totals + $cart->quantity * $products->price;
            

        
        }
        return ($totals);
    }


    //gets the ID from the product, checks the cart table for the matching ID, then deletes the row from the cart table
    //didn't work for the longest time, had to change my table ID name, easier to do than trying to force laravel to change the id name in application
    public function delete(){
        $cart = Request::get('product_delete_id');
        
        //testing
        // dd($cart);
        // Cart::delete()->where($cart, 'product_id');



        $file = Product::where('id', $cart)->first(); 

        //more testing
        // $products = Cart::select('product_id')->first();


        $cartItem = Cart::get();
        //troubleshooting
        // dd($cartItem);

        foreach($cartItem as $c){
            if($file->id == $c->product_id)
            $c->destroy($c->id);

        }
        return view('shopping_cart.delete');


        //more attempts
        // Cart::destroy('id', $cart);


       


        // $deletedRows = Cart::where('active', 0)->delete();

        // $products->delete()->where($products == $cart);
        
       
        
        // dd($file);
        // dd($item);

        // if($item) {
           
        //     // $item->delete();
        //     // return view('shopping_cart.delete');
        // }

        //return view('shopping_cart.delete');
    }



    public function edit()
        {

            $cart = Request::get('cart_update_id');
            $quantity = Request::get('quantity');

            $cartOld = Cart::where('id', $cart)->first();

            $cartOld->quantity = $quantity;

            $cartOld->save();
            
            return view('shopping_cart.edit');

            
        }

    

   

}
