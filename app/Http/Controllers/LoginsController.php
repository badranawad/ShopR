<?php

namespace App\Http\Controllers;

use Auth;
use App\Http\Controllers\Controller;

class LoginsController extends Controller {

  public function login(){
    return view('site.login.login');

  }


    public function authenticate()
    {

        if ( Auth::attempt( ['email' => request('email'), 'password' => request('password') ], request('remember')))
        {
            return redirect( url('/') );
        }

        return redirect( url('/login') )->with('error','Email or password error try again later');

    }
    public function logout(){
      Auth::logout();
      return redirect( url('/') );

    }

}
