<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Product Page</title>
        

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">


@extends ('layout')

@section ('content')

<!-- Page that highlights the single item the user is looking at, from here they can select how many of the item they wish to add to their cart, then if they choose to accept
they will be notified that they have added it to their cart. If they aren't logged in they won't be able to purchase anything until they have logged in. -->

<body>
    <div class="flex-center position-ref full-height">

   
                <div class="container" style="padding-top:100px; padding-bottom:100px">
                <div class='row'>
                    <div class="picture-placement">
                        <div class="col-sm-8">
                        <img src=" http://localhost/e_commerce_site/public/images/product_images/{{$product->image_source}}" height="300" width="550">
                        </div>
                        </div>
                        <div class="col-sm-4">
                    
                    <h3 id="product-heading">{{$product->product_name}}</h2>
                    <p id ="product-description">{{$product->product_description}}</p>
                    <h4 id='price'>&nbsp &nbsp ${{$product->price}}</h4>
                </div>
            

        

                </div>

                <div class='container'>
                    <div class='row'>
                        <div class='col-sm-8'>
                        </div>
                        <div class='col-sm-4'>
                       

                        @if(Auth::check())
                        <form  id='cartAddForm' name='cartAddForm' method="POST" action="../shopping_cart/added">
                        @csrf

                        <input type="hidden" id="productID" name="productID" value='{{$product->id}}'>

                        
                        <input type='number' id='quantity' name='quantity' value='1' min='1' class='quantity-selector'>
                        


                        <button type='submit' class='button-add-to-cart'>
                        Add to Cart
                        </button>
                        


                        @else

                        <a href="{{ route('login') }}"> <button class='button-add-to-cart'>Please login to purchase</button></a>
                        
                        @endif
                        </div>
                        </form>
                        
                
                        

                        
    </div>

@endsection
        
    </div>
    </body>
</html>