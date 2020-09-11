<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//frontend
Route::get('/','PageController@homefun')->name('homepage');

Route::get('about','PageController@aboutfun')->name('aboutpage');

Route::get('blog','PageController@blogfun')->name('blogpage');

Route::get('blogSingle','PageController@blogSinglefun')->name('blogSinglepage');


Route::get('cart','PageController@cartfun')->name('cartpage');

Route::get('checkout','PageController@checkoutfun')->name('checkoutpage');

Route::get('contact','PageController@contactfun')->name('contactpage');

Route::get('menu','PageController@menufun')->name('menupage');

Route::get('productSingle','PageController@productSinglefun')->name('productSinglepage');

Route::get('service','PageController@servicefun')->name('servicepage');

Route::get('shop','PageController@shopfun')->name('shoppage');


//backend
Route::get('dashboard','BackendController@dashboardfun')->name('dashboardpage');

Route::resource('foods','FoodController');
