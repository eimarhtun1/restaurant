<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function homefun($value='')
    {
    	return view('frontend.home');
    }

     public function aboutfun($value='')
    {
    	return view('frontend.about');
    }

    public function blogfun($value='')
    {
    	return view('frontend.blog');
    }

     public function blogSinglefun($value='')
    {
    	return view('frontend.blogSingle');
    }

    public function cartfun($value='')
    {
    	return view('frontend.cart');
    }

     public function checkoutfun($value='')
    {
    	return view('frontend.checkout');
    }

    public function contactfun($value='')
    {
    	return view('frontend.contact');
    }

    public function menufun($value='')
    {
    	return view('frontend.menu');
    }

    public function productSinglefun($value='')
    {
    	return view('frontend.productSingle');
    }

     public function servicefun($value='')
    {
    	return view('frontend.service');
    }

    public function shopfun($value='')
    {
    	return view('frontend.shop');
    }
}
