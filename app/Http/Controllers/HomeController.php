<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Post;

class HomeController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        $posts = Post::when(request('category_id'), function ($query) {
            $query->where('category_id', request('category_id'));
        })->latest()->get();

            return view('welcome', compact('categories', 'posts'));
        }
    }

    // $posts = request()->has('category_id')
    //     ? Post::where('category_id', request('category_id'))->latest()->get()
    //     : Post::latest()->get();
