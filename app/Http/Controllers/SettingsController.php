<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Setting;


class SettingsController extends Controller
{

  public function details($id)
  {
      $setting = Setting::find($id);
      return view('site.settings.single' , [ 'setting' => $setting ] );
  }



}
