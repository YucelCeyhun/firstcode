<?php

namespace App\Http\Controllers\Main;

use App\Helper\Facade\General;
use App\Http\Controllers\Controller;
use App\Mail\ContactMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function index()
    {
        $breadcrumbList = [];
        return view('main.contact.index', compact('breadcrumbList'));
    }

    public function store(Request $request)
    {
        $gresponse = General::grecaptcha($request->input('g-recaptcha-response'));

        if($gresponse) {
            $formValidate = General::inputFilter($this->formValidate($request));
            $mail = new ContactMail($formValidate);

            Mail::to(env('MAIL_TO'))->send($mail);

            return back();
        }

        return back()->withErrors([
            'recaptcha' => 'Güvelik doğrulama geçersiz'
        ]);
    }

    private function formValidate(Request $request)
    {
        return $request->validate([
            'name' => 'required|min:3|max:255',
            'email' => 'required|email:dns,rfc',
            'request' => 'required|min:3|max:1000'
        ]);
    }
}
