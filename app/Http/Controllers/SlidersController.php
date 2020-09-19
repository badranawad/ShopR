<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Slider;


class SlidersController extends Controller
{

    public function details($link)
    {
        $slider = Slider::where('link',$link)->first();
        return view('site.sliders.details' , [ 'slider' => $slider ] );
    }



}
