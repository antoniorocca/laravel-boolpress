<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Post;
use App\Article;
use App\Category;
use App\Tag;

class PostController extends Controller
{
    public function index()
    {
        return response()->json([
         'success' => true,
         'data' => Post::all()
        ], 200);
    }
    public function article()
    {
        return response()->json([
         'success' => true,
         'data' => Article::all()
        ], 200);
    }
    public function category()
    {
        return response()->json([
         'success' => true,
         'data' => Category::all()
        ], 200);
    }
    public function tag()
    {
        return response()->json([
         'success' => true,
         'data' => Tag::all()
        ], 200);
    }
}