<?php

namespace App\Http\Controllers\Main;

use App\Helper\Facade\General;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index(){

        $breadcrumbList = [];
        return view('main.about.index',compact('breadcrumbList'));
    }
}
