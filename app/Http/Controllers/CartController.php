<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cart;


class CartController extends Controller
{


    public function index(){
        $carts = [];
        $current_session = auth()->id();
        if($current_session){
          $carts = Cart::where('cart_session',$current_session)->get();
        }
        if ($carts){
          if(!$carts->isEmpty()){
            return view('site.cart.cart',[
              'carts' => $carts,
            ]);

          }else{
            return view('site.cart.empty');
          }
      }else{
          return view('site.cart.empty');
      }

    }
    public function delete($id){
      if( $pro = Cart::find($id) ){
        $pro->delete();
        return redirect( url('cart') )->with('success','Product deleted successfully ');
      }
      return redirect( url('cart') )->with('success','Product added to the Cart');

    }


    public function add($id)
    {
        $current_s = auth()->id();


        // if(!$current_s){
        //     $random = rand(111111,999999);
        //     $current_s = request()->session()->put('current_session',$random);
        // }

        // $current_s = request()->session()->get('current_session');

        $pro = Cart::where('cart_session',$current_s)->where('product_id',$id)->first();
        if($pro){
          $oldQty = $pro->qty;
          $pro->qty = $pro->qty + 1;
          $pro->save();
        }else{
          $cart = new Cart();
          $cart->qty = 1;
          $cart->product_id = $id;
          $cart->cart_session = $current_s;
          $cart->save();

        }

        return redirect( url('cart') )->with('success','Product added to the Cart');

    }

    public function checkout(){
      return view('site.cart.checkout');

    }



}
