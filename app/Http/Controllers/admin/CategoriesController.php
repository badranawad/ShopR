<?php

namespace App\Http\Controllers\admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Category;

class CategoriesController  extends Controller
{

    public function index()
    {
      $user =auth()->user();
      if ($user->is_admin) {

        $categories = Category::get();
        return view( 'admin.categories.index' , [
            'categories' => $categories ,
        ]);
      }else{
      }
    }

    public function create()
    {
     return view( 'admin.categories.create');
    }
    public function store(Request $request)
    {

        $this->validate($request, [
            'title' => 'required',
            'link' => 'required',


        ]);

        $category = new Category();
        $category->title = request()->title;
        $category->link = request()->link;
        $category->save();

        return redirect( url('admin/categories') )->with('success','The Category was successfully added ');

    }

    public function edit($id)
    {

        $category = Category::find($id);

        return view( 'admin.categories.edit',[
          'category' => $category ,

        ]);

    }
    public function update(Request $request , $id)
    {
        $this->validate($request, [
          'title' => 'required',
          'link' => 'required',

        ],[
          // 'title.required' => 'الرجاء تعبئة حقل العنوان',
          // 'price.required' => 'الرجاء تعبئة حقل السعر',
          // 'price.numeric' => 'حقل السعر يجب ان يكون رقم',
        ]);

        $category = Category::find( $id );
        $category->title = request()->title;
        $category->link = request()->link;
        $category->save();


        return redirect( url('admin/categories') )->with('success','Modifications to the category have been successfully saved');
    }


    public function delete( $id )
    {
        $category = Category::find($id);
        $category->delete();
        return redirect( url('admin/categories') )->with('success','The category was successfully deleted');
    }


}
