<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>show page</title>
        

            @extends ('layout')

@section ('content')
</head>


 

<!-- mainly taken from the bikeblog form, with some added <hidden>
    properties to send ID's and items through -->

<div class='form-container'>
<div class='container'>

<div class="row">
                <div class="col-sm-12">
                <br>
                <h1 style='text-align:center;'>Place Your Order</h1>
                
                
</div>
            </div>	

<form id="orderForm" name="orderForm" method="POST" action="../orders/added">
@csrf    

<div class="form-group row">
    <label for="name" class="col-sm-4 col-form-label">Name</label>
    <div class="col-sm-6">
        <input 
            type="text"  
            id="name" 
            name="name" 
            placeholder="enter your name"  >               
    </div>
</div>

<div class="form-group row">
    <label for="address" class="col-sm-4 col-form-label">Address</label>
    <div class="col-sm-6">
        <input 
            type="text" 
            id="address" 
            name="address" 
            placeholder="enter your address">         
    </div>
</div>

<input type='hidden' id='user_id' name='user_id' value='{{Auth::id()}}'>
<input type='hidden' id='price' name='price' value='{{$totals}}'>


<input type='hidden' id='items' name='items' 
value= '@foreach($products as $product){{$product->product_name}}, @endforeach
        @foreach($carts as $cart) {{$cart->quantity}}, @endforeach'>


<!--  submit button  -->
<div class="form-group row">
    <div class='col-sm-6 text-center'>
        <a href='/e_commerce_site/public/products'><button type='button' class='button-add-to-cart'>Cancel</button></a>
    </div>
    <div class="col-sm-6 text-center">
    <button type="submit"class='button-add-to-cart'>Submit Order</button>
    </div>
    
    
  

</div>
</form>
</div>
</div>
 

<br /><br />


@endsection