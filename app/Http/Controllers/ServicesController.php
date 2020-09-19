<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Service;


class ServicesController extends Controller
{

    public function details($id)
    {
        $service = Service::find($id);
        return view('site.services.single' , [ 'service' => $service ] );
    }



}
