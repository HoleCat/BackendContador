<?php

namespace App\Exports;

use App\Mayorcompra;
use Maatwebsite\Excel\Concerns\FromCollection;

class MayorcomprasExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Mayorcompra::where('ImporteTo', '>=', 1000)
        			->where('ImporteTo', '<=', 2000)
                     ->get();
    }
}
