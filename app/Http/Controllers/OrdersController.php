<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Http\Request;
use App\Order;

class OrdersController extends Controller
{

    public function details($id)
    {
        $order = Order::find($id);
        return view('site.orders.single' , [ 'order' => $order ] );
    }
    
}
