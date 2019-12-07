<?php

namespace App\Http\Controllers;

use DB;
use App\Post;
use Illuminate\Http\Request;

class PostsController extends Controller
{
  public function show($slug)
  {
     return view('post', [
       'post' => Post::where('slug', $slug)->firstOrFail() // the variable of post is set via the function argument which now can be accessed this way
     ]);
  }
}
