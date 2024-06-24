<?php

namespace App\Http\Controllers;

use App\Imports\CollegeImport;
use Illuminate\Http\Request;

class CollegeController extends Controller
{
    //added index

    public function index()
    {
        return view('college.index');
    }

    public function importExcelData(Request $request)
    {
        $request->validate([

            'import_file'=>[
                'required',
                'file'
            ],
        ]);

        \Maatwebsite\Excel\Facades\Excel::import(new CollegeImport, $request->file('import_file'));
        return redirect()->back()->with('status','Excel import successful!');
    }

}
