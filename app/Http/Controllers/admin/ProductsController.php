<?php

namespace App\Http\Controllers\admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Product;
use App\Category;

class ProductsController  extends Controller
{

    public function index()
    {
      $user =auth()->user();
      if ($user->is_admin) {
        $products = Product::get();
        return view( 'admin.products.index' , [
            'products' => $products ,
        ]);
      }else{
      }

    }


    public function create()
    {
      $categories = Category::get();

     return view( 'admin.products.create',[
       'categories' => $categories
     ]);

    }

    public function store(Request $request)
    {

        $this->validate($request, [
            'title' => 'required',
            'price' => 'required|numeric',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',

        ]);
        $imageName = time().'.'.request()->image->getClientOriginalExtension();
        request()->image->move(public_path('images'), $imageName);

        $product = new Product();
        $category = new Category();
        $product->title = request()->title;
        $product->description = request()->description;
        $product->price = request()->price;
        $product->after_discount = request()->after_discount;
        $product->status = request()->status?1:0;
        $product->image = $imageName;
        $product->featured = request()->featured?1:0;
        $product->save();

        $product->categories()->attach( request()->categories );



        return redirect( url('admin/products') )->with('success','product added successfully');

    }

    public function edit($id)
    {

        $product = Product::find($id);
        $categories = Category::get();
        return view( 'admin.products.edit',[
          'product' => $product ,
            'categories' => $categories ,
        ]);

    }
    public function update(Request $request , $id)
    {
        $this->validate($request, [
            'title' => 'required',
            'price' => 'required|numeric',
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',

        ]);


        $product = Product::find( $id );
        if (request()->image) {
          $imageName = time().'.'.request()->image->getClientOriginalExtension();
          request()->image->move(public_path('images'), $imageName);

          $product->image = $imageName;

        }

        $product->title = request()->title;
        $product->description = request()->description;
        $product->price = request()->price;
        $product->after_discount = request()->after_discount;
        $product->status = request()->status?1:0;
        $product->featured = request()->featured?1:0;

        $product->save();

        $product->categories()->sync( request()->categories );

        return redirect( url('admin/products') )->with('success','Changes to the product have been successfully saved ');
    }


    public function delete( $id )
    {
        $product = Product::find($id);
        $product->delete();
        return redirect( url('admin/products') )->with('success','The product was successfully deleted');
    }


}
