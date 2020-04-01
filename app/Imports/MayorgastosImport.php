<?php

namespace App\Imports;

use App\Mayorgasto;
use Maatwebsite\Excel\Concerns\ToModel;

class MayorgastosImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Mayorgasto([
            'Anno'=> $row[0],
            'Mes'=> $row[1],
            'IdOrigen'=> $row[2],
            'Origen'=> $row[3],
            'NroAsiento'=> $row[4],
            'Fecha'=> $row[5],
            'GlosaCab'=> $row[6],
            'Cuenta'=> $row[7],
            'DescriCta'=> $row[8],
            'IdCenCos'=> $row[9],
            'CenCosto'=> $row[10],
            'IndDebHab'=> $row[11],
            'TipCamDet'=> $row[12],
            'Imp_Sig_MN'=> $row[13],
            'Imp_Sig_ME'=> $row[14],
            'IdTipDoc'=> $row[15],
            'NroDoc'=> $row[16],
            'NroDocRef'=> $row[17],
            'GlosaDet'=> $row[18],
        ]);
    }
}
