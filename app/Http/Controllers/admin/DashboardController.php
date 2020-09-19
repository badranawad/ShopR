<?php

namespace App\Http\Controllers\admin;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Product;
use App\Slider;
use App\Company;
use App\Service;
use App\Order;
use App\User;

use Auth;


class DashboardController extends Controller
{

    public function index2()
    {
        $user =auth()->user();
        if ($user->is_admin) {
          $products = Product::count();
          $orders = Order::count();
          $services = Service::count();
          $users = User::count();

          return view( 'admin.dashboard',[
            'products' => $products,
            'orders' => $orders,
            'users' => $users,
            'services' => $services,

          ]);
        }else{
          $sliders = Slider::paginate(8);
          $featured = Product::where('status' , '1')->where('featured' , '1')->paginate(8);
          $products = Product::where('status' , '1')->paginate(8);
          $companies = Company::paginate(8);
          $services = Service::paginate(8);
          $users = User::paginate(8);
          $orders = Order::count();


          return view('site.home', [ 'products' => $products , 'users' => $users , 'orders' => $orders ,'featured' => $featured , 'sliders' => $sliders ,'companies'=> $companies , 'services' => $services ]);

        }
    }

}
