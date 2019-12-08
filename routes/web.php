<?php

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


          // this is a wild card
// Route::get('/posts/{post}', function ($post) {  // this is a slug
//   // build store of data.. this will be replaced with an actual database
//   $posts = [
//     'my-first-post' => 'Hello, this is my first blog post!',
//     'my-second-post'=> 'Now im a getting the hang of this'
//   ];
//
// // this will replace the null check below
// if (! array_key_exists($post,$posts)) {   // checking both variables
//   abort(404, 'Sorry, that post was found.');
// }
//
//   return view('post', [
//     'post' => $posts[$post] // the variable of post is set via the function arg ument which now can be accessed this way
//   ]);
// });


// creating controller, which will replace some of the above code ( the reaching for post )

Route::get('/posts/{post}', 'PostsController@show');

Route::get('/', function(){
  return view('welcome');
});

// this route naming may change or may need duplicating because the functionality within should be mirrored on the blog page
Route::get('/blog', function () {

// to return pages
  // $article = App\Article::paginate(2);
  // okay to use for now but we will eventuall switch to ::take(2); due to larger amount of articles
  // $article = App\Article::all();
  // $articles = App\Article::latest()->get(); // order by created_atv in desc order
   return view('blog', [
     'articles' => App\Article::latest()->get()
   ]);
});

// contact route

Route::get('/contact', function () {
  return view('contact');
});
