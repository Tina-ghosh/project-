<?php


<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
class Articlescontroller extends Controllers 
{
    public function show($id)
    {
        $articles = Article::find($id);
        return view('article.show', ('article' => $article ));
    }
}