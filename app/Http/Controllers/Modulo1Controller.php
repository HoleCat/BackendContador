<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Maatwebsite\Excel\Facades\Excel;
use App\Modulo1;

class Modulo1Controller extends Controller
{
    public function store(Request $request)
    {
        $ruta = '';
        $filenametostore = '';
       
        if($request->hasfile('myfile')){
            $filenamewithext = $request->file('myfile')->getClientOriginalName();
            $filename = pathinfo($filenamewithext, PATHINFO_FILENAME);
            $ext = $request->file('myfile')->getClientOriginalExtension();
            $filenametostore = $filename.'_'.time().'.'.$ext;
            $ruta = $request->file('myfile')->move('storage/archivo/', $filenametostore);
        } else {
            $filenametostore = 'noimage.jpg';
        }

        $form_data = $request;
        return response()->json($filename,200);
    }
    
    public function import(Request $request)
    {
        $this->validate($request, [
            'myfile' => 'required|mimes:xls,xlsx'
        ]);
        Excel::import(new Modulo1sImport, $request->file('myfile'));
        //$path = $request->file('myfile')->getRealPath();
        //$ext = $request->file('myfile')->getClientOriginalExtension();
        //$type = IOFactory::identify($path);
        //$reader = IOFactory::createReader($type);
        //$data = IOFactory::load($path);

        //return response()->json($data,200);
        //íf($data::count() > 0)
        //{
        $data = DB::table('Modulo1')->get();
        //}
        //return response()->json($tbl,200);
        return response()->json($data,200);
    }
}
