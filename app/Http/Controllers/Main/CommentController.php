<?php

namespace App\Http\Controllers\Main;

use App\Content;
use App\Helper\Facade\General;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function store(Request $request,Content $content)
    {
        $inputs = $this->formValidate($request);
        $content->comments()->create($inputs);
        return back();
    }

    private function formValidate($request)
    {
        return General::inputFilter($request->validate([
            'name' => 'required|min:3',
            'email' => 'required|email:rfc,dns',
            'comment' => 'required|min:3|max:200'
        ]));
    }
}
