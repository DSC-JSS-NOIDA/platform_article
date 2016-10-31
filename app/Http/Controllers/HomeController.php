<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests;
use App\Article;
use App\Category;
use App\Event;
use App\join;
use App\Rating;
use App\User;

class HomeController extends Controller
{
    public function index()
    {
    	$categories = Category::get();
    	return view('homepage', compact('categories'));
    	
   }
}
