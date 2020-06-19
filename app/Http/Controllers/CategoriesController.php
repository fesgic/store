<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoriesController extends Controller
{
  public function show($category){
    $categories = [
      'fruits' => 'Ovacados, Bananas, Apples, Pears',
      'books' => 'Novels, Dictionaries, Documentaries, Journals',
      'electronics' => 'Phones, Laptops, Electric Kettle'
    ];

    if (! array_key_exists($category,$categories)){
      abort(404,'Sorry, the requested resource could not be found');
    }

    return view('item', [
      'category' => $categories[$category]
    ]);
    //here above, we pass the data into item view through category variable
    //from $categories array with data associated with category key in function
}
}
