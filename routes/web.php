<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WebController;


use App\Models\Category;
use App\Models\Post;
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

// Route::get('/home', function () {
//     return view('home');
// });
Route::get('/', 'HomeController@index');
// Route::get('/', 'HomeController@index');
Route::get('/showartikel/{id}', function ($id) {
    // dd($id);
    $articleShow = App\Models\Post::where('slug', $id)->first();
    // dd($articleShow->author_id);

    // dd($author);

    return view('showartikel', compact('articleShow'));
})->name('showartikel');
Route::get('/artikel', function () {
    
    $article = App\Models\Post::where('status', 'PUBLISHED')->get();

    return view('artikel', compact('article'));
});
Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
