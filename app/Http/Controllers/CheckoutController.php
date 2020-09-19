<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

use Auth;
use App\Http\Controllers\Controller;
use App\Cart;
use App\Order;
use App\OrderProduct;

class CheckoutController extends Controller

  {

    public function index(){
        $carts = [];
        $current_session = auth()->id();
        if($current_session){
          $carts = Cart::where('cart_session',$current_session)->get();
        }
        if(!$carts->isEmpty()){
          return view('site.cart.checkout',[
            'carts' => $carts,
          ]);

        }else{
          return view('site.cart.empty');
        }

    }

    public function store(Request $request)
    {

        $this->validate($request, [
          'name' => 'required',
          'country' => 'required',
          'address' => 'required',
          'city' => 'required',


        ]);

        $carts = [];
        $current_session = auth()->id();
        if($current_session){
          $carts = Cart::where('cart_session',$current_session)->get();
        }
        if(!$carts->isEmpty()){
          redirect();

        }


        $order = new Order();
        $order->name = request()->name;
        $order->email = auth()->user()->email;
        $order->country = request()->country;
        $order->address = request()->address;
        $order->city = request()->city;
        $order->phone = auth()->user()->phone;
        $order->save();


        foreach ( $carts as $cart) {
          $orderProduct = new OrderProduct();
          $orderProduct->order_id = $order->id;
          $orderProduct->product_name = $cart->product->title;
          $orderProduct->price = $cart->product->price;
          $orderProduct->qty = $cart->qty;
          $orderProduct->total = $cart->cartTotal();
          $orderProduct->save();
        }

        Cart::where('cart_session',$current_session)->delete();


        return view('site.cart.success');

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



  }
