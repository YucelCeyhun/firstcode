<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;

class AuthController extends Controller
{

    use AuthenticatesUsers;


    protected  $decayMinutes = 30;


    public function __construct()
    {

        $this->middleware('guest')->only('showLoginForm');
        $this->middleware('throttle:3,1')->only('login');
    }

    public function username(){
        return 'name';
    }


    public function showLoginForm()
    {
        return view('admin.auth.login');
    }

    protected function attemptLogin(Request $request)
    {
        return $this->guard()->attempt(
            $this->credentials($request), false
        );
    }

    public function redirectPath()
    {
        return route('fc-admin.index');
    }


}
