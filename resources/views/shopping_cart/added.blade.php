<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- lets the user know they've added an item to their cart, the links let the user either go to the cart page or back to shopping. -->

        <title>page added notification</title>
        

        
      

            @extends ('layout')

@section ('content')

<div class="container" style="padding-top:100px; padding-bottom:100px">
                <div class='row'>
                    <div class="picture-placement">
                        <div class="col-sm-8">
                        <img src=" http://localhost/e_commerce_site/public/images/product_images/{{$product->image_source}}" height="300" width="550">
                        </div>
                        </div>
                        <div class="col-sm-4">
                    
                    <h3 id="product-heading">{{$product->product_name}}</h2>
                    
                    <p>you added '{{$product->product_name}}' to your cart, total items in cart is {{$cart->count()}}
                        
                    
                    <p>
                    
                </div>
    
   
    <div class='added-cart-content'>
     

  

@endsection
</head>