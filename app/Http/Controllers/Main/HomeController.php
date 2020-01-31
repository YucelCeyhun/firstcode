<?php

namespace App\Http\Controllers\Main;

use App\Comment;
use App\Content;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $contents = Content::with('category')->limit(10)->get();
        $comments = Comment::with('content')->limit(10)->get();
        return view('main.home',compact('contents','comments'));
    }
}
