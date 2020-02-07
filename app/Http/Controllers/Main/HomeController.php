<?php

namespace App\Http\Controllers\Main;

use App\Comment;
use App\Content;
use App\Http\Controllers\Controller;


class HomeController extends Controller
{
    public function index()
    {
        $contents = Content::with('category')->latest()->limit(10)->get();
        $comments = Comment::with('content')->latest()->limit(10)->get();
        return view('main.home',compact('contents','comments'));

    }
}
