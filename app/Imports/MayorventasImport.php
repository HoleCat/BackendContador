<?php

namespace App\Imports;

use App\Mayorventa;
use Maatwebsite\Excel\Concerns\ToModel;

class MayorventasImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Mayorventa([
            'Numerocor'=> $row[0],
            'Fechadee'=> $row[1],
            'FechadeV'=> $row[2],
            'TipodeCo'=> $row[3],
            'NroDeSe'=> $row[4],
            'Numerode'=> $row[5],
            'TipodeDo'=> $row[6],
            'NroDoc'=> $row[7],
            'ApellidosyNombresDenomoRazonS'=> $row[8],
            'ValorFact'=> $row[9],
            'Baseimpon'=> $row[10],
            'Descuento1'=> $row[11],
            'IGVYOIP'=> $row[12],
            'Descuento2'=> $row[13],
            'Importede1'=> $row[14],
            'Importede2'=> $row[15],
            'ISC'=> $row[16],
            'Otros'=> $row[17],
            'Total'=> $row[18],
            'ImptoML'=> $row[19],
            'FechadeR'=> $row[20],
            'Tipopara'=> $row[21],
            'Seriedel'=> $row[22],
            'NroDelc'=> $row[23],
        ]);
    }
}
