<?php

namespace App\Http\Controllers;
use App\Post;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        return view('home');
    }

    public function about()
    {
        return view('about');
    }
    public function blog()
    {
        $posts = Post::all();
        return view('blog', compact('posts'));
    }
    public function posts_api()
    {
        return view('spa.posts');
    }
    public function articles_api()
    {
        return view('spa.articles');
    }
    public function categories_api()
    {
        return view('spa.categories');
    }
    public function tags_api()
    {
        return view('spa.tags');
    }
}