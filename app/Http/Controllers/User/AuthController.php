<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class AuthController extends Controller
{
	use AuthenticatesUsers;
   /**
     * Constructor
     * 
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    //-------------------------------------------------------------------------

    /**
     * View login page
     *
     */
    public function getLogin(){
       return view('user.login.index');
    }
}
