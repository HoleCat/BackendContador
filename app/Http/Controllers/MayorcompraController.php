<?php

namespace App\Http\Controllers;

use App\Mayorcompra;
use Illuminate\Http\Request;
use DB;
use Maatwebsite\Excel\Facades\Excel;
use App\Imports\MayorcomprasImport;
use App\Exports\MayorcomprasExport;

class MayorcompraController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Mayorcompra  $mayorcompra
     * @return \Illuminate\Http\Response
     */
    public function show(Mayorcompra $mayorcompra)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Mayorcompra  $mayorcompra
     * @return \Illuminate\Http\Response
     */
    public function edit(Mayorcompra $mayorcompra)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Mayorcompra  $mayorcompra
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Mayorcompra $mayorcompra)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Mayorcompra  $mayorcompra
     * @return \Illuminate\Http\Response
     */
    public function destroy(Mayorcompra $mayorcompra)
    {
        //
    }

    public function import(Request $request)
    {
        $this->validate($request, [
            'myfile' => 'required|mimes:xls,xlsx'
        ]);
        Excel::import(new MayorcomprasImport, $request->file('myfile'));
        
        $data = DB::table('Mayorcompras')->get();

        return response()->json($data,200);
    }

    public function export(Request $request) 
    {
        //DB::select('exec my_stored_procedure(?,?,..)',array($Param1,$param2));
        $data = DB::select('call report_xl_compras("1000","2000")');

        return Excel::download(new MayorcomprasExport, 'resumen_compras.xlsx');

        //return response()->json($data,200);
    }
}
