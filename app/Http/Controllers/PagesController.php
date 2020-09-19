<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Page;


class PagesController extends Controller
{

    public function details($link)
    {
        $page = Page::where('link',$link)->first();
        return view('site.pages.details' , [ 'page' => $page ] );
    }



}
