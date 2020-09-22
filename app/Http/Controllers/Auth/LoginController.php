<?php

namespace App\Http\Controllers\Auth;

use Auth;
use Illuminate\Http\Response;
use App\Events\User\LoggedIn;
use App\Events\User\LoggedOut;
use App\Http\Controllers\Controller;
use Codino\UserStatusModule\UserStatus;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class LoginController extends Controller
{
    use AuthenticatesUsers;

    /**
     * Create a new authentication controller instance.
     * @param UserRepository $users
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
        $this->middleware('auth')->only('logout');
    }

    /**
     * Show the application login form.
     *
     * @return Response
     */
    public function show()
    {
        return view('auth.login', [
            'socialProviders' => config('auth.social.providers')
        ]);
    }
}
