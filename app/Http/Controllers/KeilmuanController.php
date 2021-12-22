<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Youtube;
use App\Models\Post;
use App\Models\Category;
use App\Models\Setting;
use App\Models\Slider;

class KeilmuanController extends Controller
{
        public function index1()
    {
        $sliders = Slider::all();
        return view('keilmuangeo.elearning', compact('sliders'));
    }
        public function index2()
    {
        $sliders = Slider::all();
        return view('keilmuangeo.jurnalilmiah', compact('sliders'));
    }
        public function index3()
    {
        $sliders = Slider::all();
        return view('keilmuangeo.profileanggota', compact('sliders'));
    }
        public function index4()
    {
        $sliders = Slider::all();
        return view('keilmuangeo.sharingcontent', compact('sliders'));
    }
            public function index5()
    {
        $news = Post::where('status','PUBLISHED')->latest()->paginate(10);
        $article = Post::where('status','PUBLISHED')->latest()->paginate(6);
        $vidios = Youtube::all()->where('status', 'Active');
        $posts = Post::all()->where('status','PUBLISHED');
        $settings = Setting::all();
        $sliders = Slider::all();
        $article1 = Post::where('status','PUBLISHED')->where('category_id','7')->latest()->paginate(3);
        $ilmugeo = Post::all()->where('status','PUBLISHED')->where('category_id','7');
        $article2 = Post::where('status','PUBLISHED')->where('category_id','6')->latest()->paginate(3);
        $article3 = Post::where('status','PUBLISHED')->where('category_id','5')->latest()->paginate(3);
        $article4 = Post::where('status','PUBLISHED')->where('category_id','4')->latest()->paginate(3);
        $article5 = Post::where('status','PUBLISHED')->where('category_id','3')->latest()->paginate(3);
        return view('keilmuangeo.keilmuangeografi', compact('ilmugeo','vidios','article','posts','news','article1','article2','article3','article4','article5','settings','sliders'));
    }
}
