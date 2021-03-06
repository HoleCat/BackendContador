<?php

namespace App\Http\Controllers;

use App\Mayorgasto;
use Illuminate\Http\Request;
use DB;
use Maatwebsite\Excel\Facades\Excel;
use App\Imports\MayorgastosImport;

class MayorgastoController extends Controller
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
     * @param  \App\Mayorgasto  $mayorgasto
     * @return \Illuminate\Http\Response
     */
    public function show(Mayorgasto $mayorgasto)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Mayorgasto  $mayorgasto
     * @return \Illuminate\Http\Response
     */
    public function edit(Mayorgasto $mayorgasto)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Mayorgasto  $mayorgasto
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Mayorgasto $mayorgasto)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Mayorgasto  $mayorgasto
     * @return \Illuminate\Http\Response
     */
    public function destroy(Mayorgasto $mayorgasto)
    {
        //
    }

    public function import(Request $request)
    {
        $this->validate($request, [
            'myfile' => 'required|mimes:xls,xlsx'
        ]);
        Excel::import(new MayorgastosImport, $request->file('myfile'));
        
        $data = DB::table('Mayorgastos')->get();

        return response()->json($data,200);
    }
}
