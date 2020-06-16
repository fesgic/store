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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', function(){
    $name = request('name'); //request done Here

    return view('about',[
      'name' => $name
    ]);
});

/*Route::get('/item/{category}',function($category){
    $categories = [
      'fruits' => 'Ovacados, Bananas, Apples, Pears',
      'books' => 'Novels, Dictionaries, Documentaries, Journals',
      'electronics' => 'Phones, Laptops, Electric Kettle'
    ];

    return view('item', [
      'category' => $categories[$category]
    ]);
    //here above, we pass the data into item view through category variable
    //from $categories array with data associated with category key in function
})*/

Route::get('item/{category}', 'CategoriesController@show');
