<?php

namespace App\Http\Controllers\admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Order;
use App\Product;
use App\Slider;
use App\Company;
use App\Service;
use App\User;

use Auth;


class OrdersController  extends Controller
{

    public function index()

    {
      $user =auth()->user();
      if ($user->is_admin) {

        $orders = Order::get();
        return view( 'admin.orders.index' , [
            'orders' => $orders ,
        ]);
      }else{

      }

    }

    public function create()
    {
     return view( 'admin.orders.create');
    }
    public function store(Request $request)
    {

        $this->validate($request, [
          'name' => 'required',
          'email' => 'required',
          'country' => 'required',
          'address' => 'required',
          'city' => 'required',
          'phone' => 'required',


        ]);

        $order = new Order();
        $order->name = request()->name;
        $order->email = request()->email;
        $order->country = request()->country;
        $order->address = request()->address;
        $order->city = request()->city;
        $order->phone = request()->phone;
        $order->save();

        return redirect( url('admin/orders') )->with('success','order added successfully');

    }

    // public function edit($id)
    // {
    //
    //     $order = Order::find($id);
    //     return view( 'admin.orders.edit',[
    //         'order' => $order ,
    //     ]);
    //
    // }


    public function show($id)
       {
           return view('admin.orders.show', ['order' => Order::findOrFail($id)]);
       }


    public function update(Request $request , $id)
    {
        $order = Order::find( $id );
        $order->statuses = request()->status;
        $order->save();

        return redirect( url('admin/orders') )->with('success','Changes to the order have been successfully saved');
    }


    public function delete( $id )
    {
        $order = Order::find($id);
        $order->delete();
        return redirect( url('admin/orders') )->with('success','The order was successfully deleted');
    }


}
