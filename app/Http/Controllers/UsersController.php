<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Order;
use App\Product;
use Auth;
use Illuminate\Support\Facades\Hash;


class UsersController extends Controller
{

    public function details($id)
    {
        $user = User::find($id);
        return view('site.users.single' , [ 'user' => $user ] );
    }

    public function profile()
  {
    return view('site.my.profile',['user' => auth()->user()]);


  }

  public function update2(Request $request)
    {

        $this->validate($request, [
            'name' => 'required',
            'email' => 'required',
            'phone' => 'required|numeric',

        ]);

        $user = auth()->user();

        $user->name = request()->name;
        $user->email = request()->email;
        $user->phone = request()->phone;
        if( request()->password ){
          $user->password = Hash::make( request()->password );
        }
        $user->save();
        return view('site.my.success');


}
public function myorder()
{
  $email = auth()->user()->email;
  $orders = Order::where('email',$email)->get();
    return view('site.my.myorder',['orders' => $orders]);
}
}
