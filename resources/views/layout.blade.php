<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<html>
<head>
    <meta charset="utf-8">
    <title>e-commerce-site</title>
    <link href='https://fonts.googleapis.com/css?family=Aguafina Script' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Atma' rel='stylesheet'>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="/e_commerce_site/public/css/style.css" rel="stylesheet" type="text/css">
</head>

<!-- My nav bar for my e-commerce site, taken mainly from the in-class exercises.  With the addition of some CSS stylings of my own. -->

<body>
    
    
    
    <nav class="navbar navbar-expand-sm">
    <div class="logo" id="logoHome">
            <img src='{{URL("/images/logo.png")}}' height="50" width="120">
    </div>   
    <ul class="navbar-nav">
           
                <li class="nav-item active"><a href="/e_commerce_site/public/" class="nav-link {{ Request::path() === '/e_commerce_site/public/' ? active : '' }}">Home</a></li>
                <li class="nav-item"><a href="/e_commerce_site/public/products" class="nav-link {{ Request::is('/e_commerce_site/public/allProducts') ? active : '' }}">Products</a></li>
                <li class="nav-item"><a href="/bikeblog/public/postform" class="nav-link">Art</a></li>
                <li class="nav-item"><a href="#" class="nav-link">hello</a></li>
        
            
       
        </ul>


        <!-- if statements to check if user is logged in, they won't be able to shop for items otherwise -->
        @if (Route::has('login'))
            <div class="top-right-links">
                @auth
                    <a href="{{ url('/home') }}">Home</a>
                    <a href="{{url ('/shopping_cart/cart') }}"><img src='{{URL("/images/cartLogo.png")}}' height='30' width='45'></a>
                @else
                    <a href="{{ route('login') }}">Login</a>

                    @if (Route::has('register'))
                        <a href="{{ route('register') }}">Register</a>
                    @endif
                @endauth
            </div>
        @endif
    </nav>

    @yield('content')

    <footer>
        <p></p>
    </footer>   

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/js/bootstrap.min.js"></script>
</body>
</html>
