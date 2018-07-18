<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{

    function index(){
        return view('index');
    }

    function products(){
        return view('products');
    }

    function productDetails(){
        return view('product-details');
    }

    function cart(){
        return view('cart');
    }


}
