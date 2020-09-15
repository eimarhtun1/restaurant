<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Food;
use App\Category;
use App\Subcategory;

class PageController extends Controller
{
    public function homefun($value='')
    {
        $foods = Food::all();
        $categories = Category::all();
        $subcategories = Subcategory::all();

    	return view('frontend.home',compact('foods','categories','subcategories'));
    }
   public function loginfun($value='')
    {
        $subcategories=Subcategory::all();
         $foods=Food::all(); 
        $categories=Category::all();
        return view('frontend.login',compact('categories','subcategories','foods'));
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
        $foods = Food::all();
        $categories = Category::all();
    	return view('frontend.menu',compact('categories','foods'));
    }

    public function productSinglefun($value='')
    {
    	return view('frontend.productSingle');
    }

    //  public function servicefun($value='')
    // {
    // 	return view('frontend.service');
    // }

    public function shopfun($value='')
    {
    	return view('frontend.shop');
    }

      public function categoryfun($id)
   {
         $subcategories=Subcategory::all();
        
        $category=Category::find($id);
       
        return view('frontend.subcategory',compact('category','subcategories'));
    }


      public function subcategoryfun($id)
    {
        $subcategories=Subcategory::find($id);
         $subcategories->setRelation('foods',$subcategories->foods()->paginate(3));
         $foods=Food::all(); 
        $categories=Category::all();
        return view('frontend.subcategory',compact('categories','subcategories','foods'));
    }
}
