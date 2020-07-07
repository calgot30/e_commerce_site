<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    //


    //shows the screen that displays all the products
    public function show(Product $product)
    {
        return view('products.show', compact('product'));
    }

    //main index for the home screen of the site
    public function index()
    {
        $products = Product::latest()->get();

        return view('products.index', ['products'=>$products]);
    }

   
}
