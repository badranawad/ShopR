<?php

namespace App\Http\Controllers\admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Setting;
class SettingsController  extends Controller
{

    public function index()
    {
      $user =auth()->user();
      if ($user->is_admin) {
      $setting = Setting::find(5);
        return view( 'admin.settings.index' , [
            'setting' => $setting ,
        ]);
      }else{
      }

    }


    public function update(Request $request)
    {
        $this->validate($request, [
            'title' => 'required',
            'facebook' => 'required',
            'twitter' => 'required',
            'instagram' => 'required',
            'linkedIn' => 'required',

        ]);

        $setting = Setting::find( 5 );
        $setting->title = request()->title;
        $setting->facebook = request()->facebook;
        $setting->twitter = request()->twitter;
        $setting->instagram = request()->instagram;
        $setting->linkedIn = request()->linkedIn;

        $setting->save();


        return redirect( url('admin/settings') )->with('success','  Changes to the page have been successfully saved  ');
    }

}
