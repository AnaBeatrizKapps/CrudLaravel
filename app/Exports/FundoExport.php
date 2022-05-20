<?php

namespace App\Exports;

use App\Models\Models\ModelFundo;
use Maatwebsite\Excel\Concerns\FromCollection;

class FundoExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return ModelFundo::all();
    }
}
