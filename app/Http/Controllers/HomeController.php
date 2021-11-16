<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Youtube;
use App\Models\Post;
use App\Models\Category;

class HomeController extends Controller
{
        public function index()
    {
        $news = Post::where('status','PUBLISHED')->latest()->paginate(5);
        $article = Post::where('status','PUBLISHED')->latest()->paginate(6);
        $vidios = Youtube::all()->where('status', 'Active');
        $posts = Post::all()->where('status','PUBLISHED');
        return view('home', compact('vidios','article','posts','news'));
    }
    
    public function homeigi()
    {
 $news = Post::where('status','PUBLISHED')->latest()->paginate(5);
        $article = Post::where('status','PUBLISHED')->latest()->paginate(6);
        $vidios = Youtube::all()->where('status', 'Active');
        $posts = Post::all()->where('status','PUBLISHED');
        return view('home', compact('vidios','article','posts','news'));
    }
}
