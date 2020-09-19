<?php

namespace App\Http\Controllers\admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Service;

class ServicesController  extends Controller
{

    public function index()
    {
      $user =auth()->user();
      if ($user->is_admin) {
        $services = Service::get();
        return view( 'admin.services.index' , [
            'services' => $services ,
        ]);
      }else{
      }

    }

    public function create()
    {
     return view( 'admin.services.create');
    }
    public function store(Request $request)
    {

        $this->validate($request, [
            'name' => 'required',
            'vsion' => 'required',
            'icon' => 'required',

        ]);

        $service = new Service();
        $service->name = request()->name;
        $service->vsion = request()->vsion;
        $service->icon = request()->icon;
        $service->save();

        return redirect( url('admin/services') )->with('success','service added successfully');

    }

    public function edit($id)
    {

        $service = Service::find($id);

        return view( 'admin.services.edit',[
          'service' => $service ,

        ]);

    }
    public function update(Request $request , $id)
    {
        $this->validate($request, [
          'name' => 'required',
          'vsion' => 'required',
          'icon' => 'required',

        ]);



        $service = Service::find( $id );
        $service->name = request()->name;
        $service->vsion = request()->vsion;
        $service->icon = request()->icon;
        $service->save();


        return redirect( url('admin/services') )->with('success','Changes to the service have been successfully saved');
    }


    public function delete( $id )
    {
        $service = Service::find($id);
        $service->delete();
        return redirect( url('admin/services') )->with('success','The service was successfully deleted');
    }


}
