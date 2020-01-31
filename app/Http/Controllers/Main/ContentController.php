<?php

namespace App\Http\Controllers\Main;

use App\Content;
use App\Helper\Facade\General;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ContentController extends Controller
{
    public function show(Content $content)
    {
        $breadcrumbList = General::breadcrumbList(
            [
                'name' => 'Dersler','route' => ['name' => 'main.lessons']
            ]
//            [
//                'name' => $content->category->name,'route' => ['name' => 'category.show', $content->category->slug]
//            ],

        );

        return view('main.content.show', compact('content','breadcrumbList'));
    }
}
