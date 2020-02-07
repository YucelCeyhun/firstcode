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
        $formValidate = General::inputFilter($this->formValidate($request));
        $mail = new ContactMail($formValidate);

        Mail::to('codeceyhun@gmail.com')->send($mail);

        return back();
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
