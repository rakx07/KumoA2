<?php

namespace App\Http\Controllers;

use App\Models\College;
use App\Imports\CollegeImport;
use Illuminate\Http\Request;

class CollegeController extends Controller
{
    //added index

    public function index()
    {
        $college = College::all();
        return view('college.index', compact('college'));
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
