<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Posts;

use DB;

class PostsController extends Controller
{
    public function view($slug){
        $post = Posts::where('slug',$slug)->first();
        
        /*Here, above we are using DB class, fetch from table posts, where our url slug
        is the first value of slug in the table*/
        
        if (! $post){
            abort(404);
        }

        return view('posts', [
            'posts' => $post
        ]);

    }
}
