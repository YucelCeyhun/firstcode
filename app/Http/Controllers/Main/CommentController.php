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
            if(empty($request->comment))
                return back();

            $inputs = [
                'name' => Auth::user()->name,
                'email' => Auth::user()->email,
                'comment' => $request->comment,
                'auth' => 1
            ];

            $content->comments()->create($inputs);
            return back();
        }

        $gresponse = General::grecaptcha($request->input('g-recaptcha-response'));

        if($gresponse) {
            $inputs = $this->formValidate($request);
            $content->comments()->create($inputs);
            return back();
        }

        return back()->withErrors([
            'recaptcha' => 'Güvelik doğrulama geçersiz'
        ]);

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
