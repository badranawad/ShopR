<?php

namespace App\Http\Controllers\admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Company;

class CompaniesController  extends Controller
{

    public function index()
    {
      $user =auth()->user();
      if ($user->is_admin) {

        $companies = Company::get();
        return view( 'admin.companies.index' , [
            'companies' => $companies ,
        ]);
      }else{
      }

    }

    public function create()
    {
     return view( 'admin.companies.create');
    }
    public function store(Request $request)
    {

        $this->validate($request, [
            'name' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',


        ]);
        $imageName = time().'.'.request()->image->getClientOriginalExtension();
        request()->image->move(public_path('images'), $imageName);

        $company = new Company();
        $company->name = request()->name;
        $company->image = $imageName;
        $company->save();

        return redirect( url('admin/companies') )->with('success','The company was successfully added');

    }

    public function edit($id)
    {

        $company = Company::find($id);
        return view( 'admin.companies.edit',[
          'company' => $company ,

        ]);

    }
    public function update(Request $request , $id)
    {
        $this->validate($request, [
          'name' => 'required',
          'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',

        ]);

                $company = Company::find( $id );
                if (request()->image) {
                  $imageName = time().'.'.request()->image->getClientOriginalExtension();
                  request()->image->move(public_path('images'), $imageName);

                  $company->image = $imageName;

        }

        $company->name = request()->name;

        $company->save();


        return redirect( url('admin/companies') )->with('success','Changes to the company have been successfully saved');
    }


    public function delete( $id )
    {
        $company = Company::find($id);
        $company->delete();
        return redirect( url('admin/companies') )->with('success','The company was successfully deleted');
    }


}
