<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;


use App\Models\YoPrint;
use App\Imports\YoPrintImport;


class YoPrintController extends Controller
{
    public function index_action(Request $request)
    {
        $records = YoPrint::get();
        return $records;
    }


    public function import_index(Request $request)
    {
        return view('modules.yoprint.import');
    }


    public function yo_upload(Request $request)
    {
        Excel::import(new YoPrintImport, $request->file);
        return redirect('dashboard');
    }



}
