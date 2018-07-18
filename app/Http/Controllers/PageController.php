<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{

    function index(){
        return view('index');
    }

    function product(){
       return $this->products(-999);
    }

    function products($id){
        return view('products');
    }

    function productDetails(){
        return view('product-details');
    }

    function cart(){
        return view('cart');
    }

    function checkout(){
        return view('checkout');
    }


}
