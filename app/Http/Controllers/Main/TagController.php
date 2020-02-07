<?php

namespace App\Http\Controllers\Main;

use App\Helper\Facade\General;
use App\Http\Controllers\Controller;
use App\Tag;
use Illuminate\Http\Request;

class TagController extends Controller
{
    public function show(Tag $tag)
    {

        $contents = $tag->contents()->latest()->paginate(10);

        $breadcrumbList = General::breadcrumbList(
            [
                'name' => 'Dersler', 'route' => ['name' => 'main.lessons']
            ]
        );

        return view('main.tag.show',compact('contents','breadcrumbList','tag'));
    }
}
