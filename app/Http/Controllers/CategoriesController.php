<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Product;


class CategoriesController extends Controller
{

  public function details($link)
  {
      $category = Category::where('link',$link)->first();
      if(!$category){
        return redirect( url('/') );
      }
      return view('site.categories.details' , [ 'category' => $category ] );
  }
  public function search(Request $request)
  {
    $result = Product::where('status' , '1')->where('title' ,'like', '%'.$request->s.'%')->paginate(100);
      return view('site.search.details' , [ 'result' => $result ] );
  }



}
