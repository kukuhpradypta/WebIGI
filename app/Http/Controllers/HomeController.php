<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Youtube;
use App\Models\Post;
use App\Models\Category;
use App\Models\Setting;
use App\Models\Slider;

class HomeController extends Controller
{
        public function index()
    {
        $news = Post::where('status','PUBLISHED')->latest()->paginate(5);
        $article = Post::where('status','PUBLISHED')->latest()->paginate(6);
        $vidios = Youtube::all()->where('status', 'Active');
        $posts = Post::all()->where('status','PUBLISHED');
        $settings = Setting::all();
        $sliders = Slider::all();
        $article1 = Post::where('status','PUBLISHED')->where('category_id','3')->paginate(6);
        $article2 = Post::where('status','PUBLISHED')->where('category_id','4')->paginate(6);
        $article3 = Post::where('status','PUBLISHED')->where('category_id','5')->paginate(6);
        return view('home', compact('vidios','article','posts','news','article1','article2','article3','settings','sliders'));
    }
    
    public function homeigi()
    {
         $sliders = Slider::all();
 $news = Post::where('status','PUBLISHED')->latest()->paginate(5);
        $article = Post::where('status','PUBLISHED')->latest()->paginate(6);
        $vidios = Youtube::all()->where('status', 'Active');
        $posts = Post::all()->where('status','PUBLISHED');
        return view('home', compact('vidios','article','posts','news','sliders'));
    }
}
