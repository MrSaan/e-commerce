<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function index()
    {
        return view('pages/articles/article-list');
    }

    public function show(Post $post)
    {
        return view('pages.articles.article', ['post' => $post]);
    }
}
