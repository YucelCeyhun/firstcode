<?php

namespace App\Http\Controllers\Main;

use App\Category;
use App\Helper\Facade\General;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function show(Category $category)
    {
        $contents = $category->contents()->latest()->paginate(10);

        $breadcrumbList = General::breadcrumbList(
            [
                'name' => 'Dersler','route' => ['name' => 'main.lessons']
            ]
        );

        return view('main.category.show', compact('category','contents','breadcrumbList'));

    }
}
