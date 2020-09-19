<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;


class ProductsController extends Controller
{

    public function details($id)
    {
        $product = Product::find($id);
        if( !$product ){
          return redirect( url('/') );
        }
        return view('site.products.Single' , [ 'product' => $product ] );
    }


}
