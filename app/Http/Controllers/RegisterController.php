<?php

namespace App\Http\Controllers;

use Auth;
use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller {

    public function register(){
      return view('site.register.register');

    }


    public function doRegister()
    {

        request()->validate([
            'name' => 'required',
            'email' => 'required|unique:users',
            'phone' => 'required',
            'password' => 'required',

        ]);

        $user = new User();
        $user->name = request('name');
        $user->email = request('email');
        $user->phone = request('phone');
        $user->password = Hash::make( request('password') );
        $user->save();

        // Auth::loginUsingId($user->id);

        return redirect( url('/') );

    }

}
