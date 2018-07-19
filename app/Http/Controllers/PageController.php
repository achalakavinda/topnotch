<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{

    function index(){
        return view('site.index');

    }

    function product(){
       return $this->products(-999);
    }

    function products($id){
        return view('site.products');
    }

    function productDetails(){
        return view('site.product-details');
    }

    function cart(){
        return view('site.cart');
    }

    function checkout(){
        return view('site.checkout');
    }

}
