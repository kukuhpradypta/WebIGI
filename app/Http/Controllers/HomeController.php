<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Youtube;

class HomeController extends Controller
{
        public function index()
    {
        $vidios = Youtube::all()->where('status', 'Active');
        return view('home', compact('vidios'));
    }
}
