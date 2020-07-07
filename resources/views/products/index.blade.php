@extends ('layout')

@section ('content')

<!-- Block for the home page, displays the objects that the website has on sale for the user, each of them has a link to the page which displays more info -->

<body>
    <div class="flex-center position-ref full-height">
      
    <div id='opacity-fade' class ='fade'>
        <div class="jumbotron text-center">
        <h1 id="main-hello">Products</h1>
        <div class="main-description-font"> 
        </div>   
        </div>
    </div>

    

    <div id='fade-two' class='fade-two'>
        <div class='product-block'>
       
        

        <div class="container">
                <div class='row'>
                @foreach ($products as $product)
                   @if($product->id < 5)
                    <div class='col-sm-4'>
                        <div class='items-for-sale'>
                        <!-- <h3> 
                            <a href="products/{{ $product->id }}">{{ $product->product_name }}</a>
                        </h3>
                        <p> {{ $product->product_description }} </p> -->
                        <a href="products/{{$product->id}}"><img src="images/product_images/{{$product->image_source}}" height="200" width="300"></a>
                        </div>
                    </div>
                   @endif
                @endforeach  
                
             </div>
        </div>
    </div>
</div>
   
    <div id='fade-three' class='fade-three'>
        <div class='art-block'>
       
        <div class="container">
                <div class='row'>
                     <!-- Has a loop testing ID's (not very Eloquent, but at the time I couldn't figure out how to make it work differently without breaking my website) -->
                     @foreach ($products as $product)
                        @if ($product->id == 5)
                            <div class='col-sm-4'>
                                    <div class='items-for-sale'>
                                        <!-- <h3> 
                                            <a href="products/{{ $product->id }}">{{ $product->product_name }}</a>
                                        </h3>
                                        <p> {{ $product->product_description }} </p> -->
                                        <a href="products/{{$product->id}}"><img src="images/product_images/{{$product->image_source}}" height="200" width="300"></a>
                                    </div>
                            </div>
                            @elseif ($product->id == 6)
                            <div class='col-sm-4'>
                                    <div class='items-for-sale'>
                                        <!-- <h3> 
                                            <a href="products/{{ $product->id }}">{{ $product->product_name }}</a>
                                        </h3>
                                        <p> {{ $product->product_description }} </p> -->
                                        <a href="products/{{$product->id}}"><img src="images/product_images/{{$product->image_source}}" height="200" width="300"></a>
                                    </div>
                            </div>
                            @elseif ($product->id == 7)
                            <div class='col-sm-4'>
                                    <div class='items-for-sale'>
                                        <!-- <h3> 
                                            <a href="products/{{ $product->id }}">{{ $product->product_name }}</a>
                                        </h3>
                                        <p> {{ $product->product_description }} </p> -->
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

    <div id='fade-two' class='fade-two'>
        <div class='product-block'>
       
        

            <div class="container">
                <div class='row'>
                    <!-- Has a loop testing ID's (not very Eloquent, but at the time I couldn't figure out how to make it work differently without breaking my website) -->
                    @foreach ($products as $product)
                            @if ($product->id == 8)
                                <div class='col-sm-4'>
                                        <div class='items-for-sale'>
                                            <!-- <h3> 
                                                <a href="products/{{ $product->id }}">{{ $product->product_name }}</a>
                                            </h3>
                                            <p> {{ $product->product_description }} </p> -->
                                            <a href="products/{{$product->id}}"><img src="images/product_images/{{$product->image_source}}" height="200" width="300"></a>
                                        </div>
                                </div>
                                @elseif ($product->id == 9)
                                <div class='col-sm-4'>
                                        <div class='items-for-sale'>
                                            <!-- <h3> 
                                                <a href="products/{{ $product->id }}">{{ $product->product_name }}</a>
                                            </h3>
                                            <p> {{ $product->product_description }} </p> -->
                                            <a href="products/{{$product->id}}"><img src="images/product_images/{{$product->image_source}}" height="200" width="300"></a>
                                        </div>
                                </div>
                                @elseif ($product->id == 10)
                                <div class='col-sm-4'>
                                        <div class='items-for-sale'>
                                            <!-- <h3> 
                                                <a href="products/{{ $product->id }}">{{ $product->product_name }}</a>
                                            </h3>
                                            <p> {{ $product->product_description }} </p> -->
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



@endsection
