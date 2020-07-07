<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>show page</title>
        

            @extends ('layout')

@section ('content')
</head>

<!-- page is just a notification and redirect for the user, struggled to make my edits work on the same page -->

<body>
    <div class="flex-center position-ref full-height">
      
    <div id='opacity-fade' class ='fade'>
        <div class="jumbotron text-center">
        <h1 id="main-hello">Order created successfully!</h1>
        <div class="main-description-font"> 
        <p>Return to shopping</p>
        <a href="/e_commerce_site/public/products"><button class='button-add-to-cart'>Back to shopping</button></a>
        </div>   
        </div>
    </div>

@endsection
