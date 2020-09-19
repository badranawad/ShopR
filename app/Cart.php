<?php
namespace App;
use Illuminate\Database\Eloquent\Model;
use DB;

class Cart extends Model
{

      public function product() {
         return $this->hasOne('App\Product','id','product_id');
      }

      public function productTotalPrice() {
         return number_format($this->product->price * $this->qty , 0 , '.' , '') . '$';
      }


      public function cartTotal() {
        $proTotal = 0;
        if( $current_s = auth()->id() ){
          $carts = Cart::where('cart_session',$current_s)->get();
          foreach ($carts as $cart) {
            $proTotal += $cart->product->price * $cart->qty;
          }
          $return = $proTotal;
        }else{;
          $return = 0;
        }

        return $return;
      }

      public function cartTotalWithIcon() {

        return number_format($this->cartTotal() , 0 , '.' , '') . '$';
      }

      public static function getTotalCount() {

        if( $current_s = auth()->id() ){
          $return = Cart::where('cart_session',$current_s)->count();
        }else{;
          $return = 0;
        }
        return $return;
      }



}
