<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Home Page</title>
        
            @extends ('layout')

@section ('content')
</head>

<!-- This page is the main hub for the website, it shows a portion of the content that the customer can buy, there are links which the user can take to 
view all of the products. -->

<body>

    <!-- Each section for the page content has a css fade animation, each one takes longer than the other when the page is loaded. -->
    <div class="flex-center position-ref full-height">
      
    <div id='opacity-fade' class ='fade'>
        <div class="jumbotron text-center">
        <h1 id="main-hello">Hi, I'm Bry Louise</h1>
        <div class="main-description-font"> 
        <p>This is the website where you can view all of my really cool content! Enjoy!</p>
        </div>   
        </div>
    </div>

    
    <!-- Fade animation. -->
    <div id='fade-two' class='fade-two'>
        <div class='product-block'>
        <div class='container'>
            <div class="row">
                    <div class="col-lg-12">
                        <div id='fade-two' class='fade-two'>
                            <div class='products-header'>
                                <h1 id="products">Products</h1>  
                            </div>
                        </div>
                    </div>   
            </div>
        </div>

        <!-- Loop to test if ID is below certain number, so it will print in that row -->
        <div class="container">
            <div class='row'>                   
                @foreach ($products as $product)
                   @if($product->id < 5)
                    <div class='col-sm-4'>
                        <div class='items-for-sale'>
                        
                        <a href="products/{{$product->id}}"><img src="images/product_images/{{$product->image_source}}" height="200" width="300"></a>
                        </div>
                    </div>
                   @endif
                @endforeach  
                    </div>
                </div>  
            </div>
        </div>
    </div>
        </div>


        
    
    <!-- Fade animation. -->
    <div id='fade-three' class='fade-three'>
        <div class='art-block'>
            <div class='container'>
                <div class="row">
                        <div class="col-lg-12">
                            <div id='fade-two' class='fade-two'>
                                <div class='products-header'>
                                    <h1 id="products">Art for Viewing</h1>  
                                </div>
                            </div>
                        </div>   
                </div>
        </div>

        <div class="container">
                <div class='row'>
                    
                            
    
                    <!-- Has a loop testing ID's (not very Eloquent, but at the time I couldn't figure out how to make it work differently without breaking my website) -->
                    @foreach ($products as $product)
                        @if ($product->id == 5)
                            <div class='col-sm-4'>
                                    <div class='items-for-sale'>
                                       
                                        <a href="products/{{$product->id}}"><img src="images/product_images/{{$product->image_source}}" height="200" width="300"></a>
                                    </div>
                            </div>
                            @elseif ($product->id == 6)
                            <div class='col-sm-4'>
                                    <div class='items-for-sale'>
                                    
                                        <a href="products/{{$product->id}}"><img src="images/product_images/{{$product->image_source}}" height="200" width="300"></a>
                                    </div>
                            </div>
                            @elseif ($product->id == 7)
                            <div class='col-sm-4'>
                                    <div class='items-for-sale'>
                                       
                                        <a href="products/{{$product->id}}"><img src="images/product_images/{{$product->image_source}}" height="200" width="300"></a>
                                    </div>
                            </div>
                        @endif
                    @endforeach  
                        
                        
                        
                        
               
                   
            </div>
        </div>
    </div>      
    
    
@endsection
        </div>
    </body>
</html>
