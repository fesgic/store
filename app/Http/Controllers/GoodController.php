<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GoodController extends Controller
{
    public function display(){
        $good = view('good');
        return view('good');
    }
}
