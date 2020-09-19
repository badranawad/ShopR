<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Product;
use App\Slider;
use App\Company;
use App\Service;
use App\Setting;





class HomeController extends Controller
{



    public function index()
    {
        $sliders = Slider::paginate(8);
        $featured = Product::where('status' , '1')->where('featured' , '1')->paginate(8);
        $products = Product::where('status' , '1')->paginate(8);
        $companies = Company::paginate(8);
        $services = Service::paginate(8);
        $settings = Setting::paginate(8);


        return view('site.home', [
          'products' => $products ,
          'settings' => $settings ,
          'featured' => $featured ,
          'sliders' => $sliders ,
          'companies'=> $companies ,
          'services' => $services
        ]);
    }

    public function submitLogin()
    {
      if ( Auth::attempt( [ 'email' => request('email') , 'password' => request('password'), 'type' => 'user' ] )) {
          if( Auth::user()->status != 1 ){
              return redirect( route('site.login') )->with('error',siteLang('account_no_activated'));
          }

              return redirect( $redirectTo ? $redirectTo : route('site.home') );


      }


      if( request()->ajax() ){
          return [ 'error' => true , 'message' => 'error' ];
      }else{
          return redirect( route('site.login') )->with('error',siteLang('login_information_incorrect'));
      }

  }


}
