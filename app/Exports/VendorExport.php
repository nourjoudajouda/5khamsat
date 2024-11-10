<?php

namespace App\Exports;

use App\Models\Vendor;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;


class VendorExport implements FromCollection ,ShouldAutoSize
{
    /**
    * @return \Illuminate\Support\Collection
    */

    private $data; 

    public function __construct($data)
    {
        $this->data = $data;
    }

    public function collection()
    {
        return new Collection($this->data);

    }
    // public function headings(): array
    // {
    //     return ["Name", "Legal Entity"];
    // }
}
