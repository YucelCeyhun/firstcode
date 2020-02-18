<?php

namespace App\Http\Controllers\Admin;

use App\Helper\Facade\General;
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

    public function login(Request $request)
    {
        $gresponse = General::grecaptcha($request->input('g-recaptcha-response'));

        if($gresponse) {
            $this->validateLogin($request);

            if (method_exists($this, 'hasTooManyLoginAttempts') &&
                $this->hasTooManyLoginAttempts($request)) {
                $this->fireLockoutEvent($request);

                return $this->sendLockoutResponse($request);
            }

            if ($this->attemptLogin($request)) {
                return $this->sendLoginResponse($request);
            }

            $this->incrementLoginAttempts($request);

            return $this->sendFailedLoginResponse($request);

        }

        return back()->withErrors([
            'recaptcha' => 'Güvelik doğrulama geçersiz'
        ]);
    }


    public function redirectPath()
    {
        return route('fc-admin.index');
    }


}
