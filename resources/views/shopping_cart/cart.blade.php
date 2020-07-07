<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>display cart page</title>
        
 
 
 
 
@extends ('layout')

@section ('content')
</head>

<!-- This page displays the items the user has in their cart, it iterates through the cart table and checks the id's of the products against the cart tables registered product ID
From there the products selected properties are displayed, the total price of the purchase is also displayed too. There are links to edit the amount of each item in cart, and 
to delete the item from the cart also. -->

<body>
    <div class="flex-center position-ref full-height">
      
<table class='cart'>
    <tr>
        <th></th>
        <th class='text-name-left'>Product Name</th>
        <th class='text-quantity-mid'>Quantity</th>
        <th class='text-price-right'>Price per Item</th>
        <th></th>
        
    </tr>

    <!-- iterates through the cart table, then through each product table, checks if the carts ID matches the products ID, if it does, then display the product -->
    @foreach($carts as $cart)
    @foreach($products as $product)
    @if($cart->product_id ==  $product->id )

    

    <tr>
    <td><img src="http://localhost/e_commerce_site/public/images/product_images/{{$product->image_source}}" height='110' width='180'>
    <td class='item-name-left'>'{{$product->product_name}}'</td>
    <td class='item-quantity-mid'>{{$cart->quantity}}</td>
    <td class='item-price-right'>${{$product->price}}</td>
    <td>

    <form  id='cartAddForm' name='cartAddForm' method="POST" action='/e_commerce_site/public/shopping_cart/edit'>
                        @csrf         
                        <input type='hidden' name='cart_update_id' value= '{{$cart->id}}'>             
                        <input type='number' id='quantity' name='quantity' value='{{$cart->quantity}}' min='1' class='quantity-selector'>
                        <button type='submit' class='button-add-to-cart'>
                        Edit Item
                        </button>
    </form>
        <form id='deleteForm' name='deleteForm' method='POST' action='/e_commerce_site/public/shopping_cart/delete'>
        @csrf
        <input type='hidden' name='product_delete_id' value= '{{$product->id}}'>
        <button class='button-add-to-cart' type='submit'>Remove From Cart</button>
        </form>
    </tr>

    @endif
    @endforeach
    @endforeach

    <tr><td></td><td></td><td></td><td></td><td>total <h3>${{$totals}}</h3></td></tr>
    
</table>

<div class='container'>
    <div class='row'>
        <div class='col-sm-2'>
        </div>
        <div class='col-sm-4'>
            <a href="/e_commerce_site/public/products"><button class='button-add-to-cart'>Back to shopping</button></a>
        </div>
            <div class='col-sm-4'>
            <a href="/e_commerce_site/public/orders/create"><button class='button-add-to-cart'>check out</button></a>
            </div>
            <div class='col-sm-4'>
            </div>
</div>
</div>


   

@endsection