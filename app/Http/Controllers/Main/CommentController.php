<?php

namespace App\Http\Controllers\Main;

use App\Content;
use App\Helper\Facade\General;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CommentController extends Controller
{
    public function store(Request $request, Content $content)
    {
        if (Auth::check()) {
            $inputs = [
                'name' => Auth::user()->name,
                'email' => Auth::user()->email,
                'comment' => $request->comment,
                'auth' => 1
            ];

            $content->comments()->create($inputs);
            return back();
        }

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
