<?php

namespace App\Http\Controllers;
use App\Subcategory;
use App\Food;

use Illuminate\Http\Request;

class FoodController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // return 'hello';
         $foods = Food::all();
        return view('backend.foods.index',compact('foods'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        $subcategories = Subcategory::all();
        return view('backend.foods.create',compact('subcategories'));
    }

    /**
     * Store a newly created resource in storage.
     *0
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         $request->validate([
            
            "name"=>'required',
            "price"=>'required',
            "photo"=>'required',
            "codeno"=>'required|min:4',
            "subcategory"=>'required'           
        ]);
        //If include file ,upload file
        $imageName = time().'.'.$request->photo->extension();
        $request->photo->move(public_path('backend/foodimg'),$imageName);
        $path='backend/foodimg/'.$imageName;
        //Data insert
        $food=new Food;
       
        $food->name=$request->name;
        $food->price=$request->price;
        $food->photo=$path;
        $food->codeno=$request->codeno;
       
        $food->subcategory_id=$request->subcategory;
        
        $food->save();
        //redirect
        return redirect()->route('foods.index');
        
    }
    

    /**
     * Display the specified resource.
     *
     * @param  \App\Food  $food
     * @return \Illuminate\Http\Response
     */
    public function show(Food $food)
    {
        return view('backend.foods.detail',compact('food'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Food  $food
     * @return \Illuminate\Http\Response
     */
    public function edit(Food $food)
    {
        // $foods = Food::all();
        $subcategories =Subcategory::all();
        return view('backend.foods.edit',compact('subcategories','foods'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Food  $food
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Food $food)
    {
        $request->validate([
            
            "name"=>'required',
            "price"=>'required',
            "photo"=>'sometimes',
            "oldphoto"=>'required',
            "codeno"=>'required|min:4',
            "subcategory"=>'required'
            
        ]);

        //file upload,if data
        if($request->hasFile('photo')){
             $imageName = time().'.'.$request->photo->extension();
            $request->photo->move(public_path('backend/foodimg'),$imageName);
            $path='backend/foodimg/'.$imageName;
        }else{
            $path=$request->oldphoto;
        }

        //data update
       
        $food->name=$request->name;
        $food->price=$request->price;
        $food->photo=$path;
        $food->codeno=$request->codeno;
        
        $food->subcategory_id=$request->subcategory;
       
        $food->save();
         //redirect
        return redirect()->route('foods.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Food  $food
     * @return \Illuminate\Http\Response
     */
    public function destroy(Food $food)
    {
        $food->delete();
        return redirect()->route('foods.index');
    }
}
