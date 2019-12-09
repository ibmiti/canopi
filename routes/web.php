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

// Home route
Route::get('/', function(){
  return view('welcome');
});

// articles routes
Route::get('/articles/{article}', 'ArticlesController@show');
Route::get('/articles', 'ArticlesController@index');
// blog route ... may need to encorporate this into my articles... or simply remove
Route::get('/blog', function () {
   return view('blog', [
     'articles' => App\Article::take(3)->latest()->get()
   ]);
});

// contact route
Route::get('/contact', function () {
  return view('contact');
});
