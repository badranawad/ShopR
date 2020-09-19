<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Excel;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function exportExcel($collection, $title)
    {
        Excel::create($title, function($excel) use ($collection,$title){

            // Set the spreadsheet title, creator, and description
            $excel->setTitle(get_option('SiteTitle'). ' , ' .$title);
            $excel->setCreator(get_option('SiteTitle'))->setCompany(get_option('SiteTitle').', LLC');
            $excel->setDescription($title);

            // Build the spreadsheet, passing in the payments array
            $excel->sheet(str_slug($title), function($sheet) use ($collection) {
                $sheet->setRightToLeft(true);
                $sheet->fromArray($collection);
            });

        })->download('xlsx');

    }

}
