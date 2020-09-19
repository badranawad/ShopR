<?php

namespace App\Http\Controllers\admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Slider;

class SlidersController  extends Controller
{

    public function index()
    {
      $user =auth()->user();
      if ($user->is_admin) {
        $sliders = Slider::get();
        return view( 'admin.sliders.index' , [
            'sliders' => $sliders ,
        ]);
      }else{
      }

    }


    public function create()
    {
     return view( 'admin.sliders.create');
    }
    public function store(Request $request)
    {

        $this->validate($request, [
            'title' => 'required',
            'description' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',

        ]);

        $imageName = time().'.'.request()->image->getClientOriginalExtension();
        request()->image->move(public_path('sliders'), $imageName);


        $slider = new Slider();
        $slider->title = request()->title;
        $slider->description = request()->description;
        $slider->image = $imageName;
        $slider->save();

        return redirect( url('admin/sliders') )->with('success','slider added successfully  ');

    }
    public function edit($id)
    {

        $slider = Slider::find($id);
        return view( 'admin.sliders.edit',[
          'slider' => $slider ,
        ]);

    }
    public function update(Request $request , $id)
    {
        $this->validate($request, [
            'title' => 'required',
            'description' => 'required',
        ],[
          // 'title.required' => 'الرجاء تعبئة حقل العنوان',
          // 'price.required' => 'الرجاء تعبئة حقل السعر',
          // 'price.numeric' => 'حقل السعر يجب ان يكون رقم',
        ]);


        $slider = Slider::find($id);

        if( request()->image ){
          $imageName = time().'.'.request()->image->getClientOriginalExtension();
          request()->image->move(public_path('sliders'), $imageName);
          $slider->image = $imageName;

        }


        $slider->title = request()->title;
        $slider->description = request()->description;
        $slider->link = request()->link;
        $slider->save();

        return redirect( url('admin/sliders') )->with('success',' Changes to the slider have been successfully saved  ');
    }


    public function delete( $id )
    {
        $slider = Slider::find($id);
        $slider->delete();
        return redirect( url('admin/sliders') )->with('success',' The slider was successfully deleted ');
    }


}
