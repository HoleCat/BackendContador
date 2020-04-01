<?php

namespace App\Imports;

use App\Mayorcompra;
use Maatwebsite\Excel\Concerns\ToModel;

class MayorcomprasImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Mayorcompra([
            'Periodo'=> $row[0],
            'NumeroCorrelativo'=> $row[1],
            'Correlativo'=> $row[2],
            'Fechadee'=> $row[3],
            'FechadeV'=> $row[4],
            'TipodeCo'=> $row[5],
            'SerieoCo'=> $row[6],
            'AnodeDua'=> $row[7],
            'Numerode'=> $row[8],
            'TipodeDo'=> $row[9],
            'NroDoc'=> $row[10],
            'ApellidosyNombresDenomRazonS'=> $row[11],
            'AGdestina1'=> $row[12],
            'AGdestina2'=> $row[13],
            'AGdestina3'=> $row[14],
            'AGdestina4'=> $row[15],
            'AGdestina5'=> $row[16],
            'AGdestina6'=> $row[17],
            'AdqnoGr'=> $row[18],
            'ISC'=> $row[19],
            'Otros'=> $row[20],
            'ImporteTo'=> $row[21],
            'Moneda'=> $row[22],
            'Tipodeca'=> $row[23],
            'FechadeR'=> $row[24],
            'Tipopara'=> $row[25],
            'Seriedel'=> $row[26],
            'CDPDUA'=> $row[27],
            'NroDelc'=> $row[28],
            'Detraccion1'=> $row[29],
            'Detraccion2'=> $row[30],
            'Tipodere'=> $row[31],
            'ClasifBi'=> $row[32],
        ]);
    }
}
