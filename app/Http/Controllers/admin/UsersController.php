<?php

namespace App\Http\Controllers\admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Hash;



class UsersController  extends Controller
{

    public function index()

    {
      $user =auth()->user();
      if ($user->is_admin) {
        $users = User::get();
        return view( 'admin.users.index' , [
            'users' => $users ,
        ]);
      }else{
      }

    }


    public function create()
    {
    }
    public function store(Request $request)
    {

    }

    public function edit($id)
    {

        $user = User::find($id);
        return view( 'admin.users.edit',[
            'user' => $user ,
        ]);

    }
    public function update(Request $request , $id)
    {
        $this->validate($request, [
          'name' => 'required',
          'email' => 'required',
          'phone' => 'required',

        ]);

        $user = User::find( $id );
        $user->name = request()->name;
        $user->is_admin = request()->is_admin?1:0;
        $user->email = request()->email;
        $user->phone = request()->phone;
        if( request()->password ){
          $user->password = Hash::make( request()->password );
        }
        $user->save();
        return redirect( url('admin/users') )->with('success',' Changes to the user have been successfully saved');
    }


    public function delete( $id )
    {
        $user = User::find($id);
        $user->delete();
        return redirect( url('admin/users') )->with('success','The user was successfully deleted');
    }


}
