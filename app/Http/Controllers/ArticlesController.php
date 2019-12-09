<?php

namespace App\Http\Controllers;

use App\Article;
use Illuminate\Http\Request;

class ArticlesController extends Controller
{
// when called this will get the latest article
  public function index()
  {
    $articles = Article::latest()->get();

    return view('articles.index', ['articles' => $articles]);
  }

  public function show($id)
   {
      $article = Article::find($id);

      return view('articles.show', ['article' => $article]);
   }
}
