<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Company;


class CompaniesController extends Controller
{

    public function details($id)
    {
        $company = Company::find($id);
        return view('site.companies.single' , [ 'company' => $company ] );
    }



}
