<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\KeilmuanController;

use App\Models\Category;
use App\Models\Post;
use App\Models\Setting;
use App\Models\Youtube;
use App\Models\Slider;


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

// Route::get('/template', function () {
//     return view('template.template');
// });
Route::get('/', 'HomeController@index');
Route::get('/elearning', 'KeilmuanController@index1');
Route::get('/jurnalilmiah', 'KeilmuanController@index2');
Route::get('/profileanggota', 'KeilmuanController@index3');
Route::get('/sharingcontent', 'KeilmuanController@index4');
Route::get('/keilmuangeografi', 'KeilmuanController@index5');
Route::get('/ptnptsgeografi', 'HomeController@index2');
Route::get('/informasikeprofesian', 'KeprofesianController@index5');
Route::get('/kegiatanigi', 'KegiatanController@index5');
Route::get('/keanggotaan', 'KeanggotaanController@index5');
// Route::get('/', 'HomeController@index');
Route::get('/showartikel/{id}', function ($id) {
    $news = Post::where('status','PUBLISHED')->latest()->paginate(10);
        $article = Post::where('status','PUBLISHED')->latest()->paginate(6);
        $vidios = Youtube::all()->where('status', 'Active');
        $posts = Post::all()->where('status','PUBLISHED');
        $settings = Setting::all();
         $sliders = Slider::all();
        $article1 = Post::where('status','PUBLISHED')->where('category_id','7')->latest()->paginate(3);
        $article2 = Post::where('status','PUBLISHED')->where('category_id','6')->latest()->paginate(3);
        $article3 = Post::where('status','PUBLISHED')->where('category_id','5')->latest()->paginate(3);
        $article4 = Post::where('status','PUBLISHED')->where('category_id','4')->latest()->paginate(3);
        $article5 = Post::where('status','PUBLISHED')->where('category_id','3')->latest()->paginate(3);
    $articleShow = App\Models\Post::where('slug', $id)->first();
    return view('homepage.showartikel', compact('articleShow','vidios','article','posts','news','article1','article2','sliders','article3','article4','article5','settings'));
})->name('showartikel');

Route::get('/artikel', function () {
    
       $news = Post::where('status','PUBLISHED')->latest()->paginate(10);
        $article = Post::where('status','PUBLISHED')->latest()->paginate(10);
        $vidios = Youtube::all()->where('status', 'Active');
        $posts = Post::all()->where('status','PUBLISHED');
        $settings = Setting::all();
         $sliders = Slider::all();
        $article1 = Post::where('status','PUBLISHED')->where('category_id','7')->latest()->paginate(3);
        $article2 = Post::where('status','PUBLISHED')->where('category_id','6')->latest()->paginate(3);
        $article3 = Post::where('status','PUBLISHED')->where('category_id','5')->latest()->paginate(3);
        $article4 = Post::where('status','PUBLISHED')->where('category_id','4')->latest()->paginate(3);
        $article5 = Post::where('status','PUBLISHED')->where('category_id','3')->latest()->paginate(3);

    return view('homepage.artikel', compact('vidios','article','posts','news','article1','article2','sliders','article3','article4','article5','settings'));
});
Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
