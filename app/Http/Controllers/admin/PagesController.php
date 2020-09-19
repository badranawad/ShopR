<?php

namespace App\Http\Controllers\admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Page;

class PagesController  extends Controller
{

    public function index()
    {
      $user =auth()->user();
      if ($user->is_admin) {
        $pages = Page::get();
        return view( 'admin.pages.index' , [
            'pages' => $pages ,
        ]);
      }else{
      }

    }


    public function create()
    {
     return view( 'admin.pages.create');
    }
    public function store(Request $request)
    {

        $this->validate($request, [
            'title' => 'required',
            'description' => 'required',
            'link' => 'required',

        ]);

        $page = new Page();
        $page->title = request()->title;
        $page->link = str_slug(request()->link);
        $page->description = request()->description;
        $page->save();

        return redirect( url('admin/pages') )->with('success','page added successfully  ');

    }

    public function edit($id)
    {

        $page = Page::find($id);
        return view( 'admin.pages.edit',[
          'page' => $page ,
        ]);

    }
    public function update(Request $request , $id)
    {
        $this->validate($request, [
            'title' => 'required',
            'description' => 'required',
            'link' => 'required|unique:pages,id,'.$id,
        ],[
          // 'title.required' => 'الرجاء تعبئة حقل العنوان',
          // 'price.required' => 'الرجاء تعبئة حقل السعر',
          // 'price.numeric' => 'حقل السعر يجب ان يكون رقم',
        ]);

        $page = Page::find( $id );
        $page->title = request()->title;
        $page->link = str_slug(request()->link);
        $page->description = request()->description;

        $page->save();


        return redirect( url('admin/pages') )->with('success','Changes to the page have been successfully saved  ');
    }


    public function delete( $id )
    {
        $page = Page::find($id);
        $page->delete();
        return redirect( url('admin/pages') )->with('success',' The page was successfully deleted ');
    }


}
