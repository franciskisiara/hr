<?php

namespace App\Imports;

use App\Models\Staff;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class StaffImport implements ToModel, WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        dump($row['StaffId'], "\n");

        // return Staff::firstOrCreate([
        //     'staff_id' => $this->organisation->id,
        //     'name' => trim($row['name']),
        // ], [
        //     'buying_price' => $row['bp'] ?? 0.00,
        //     'selling_price' => $row['sp'] ?? 0.00,
        // ]);
    }
}
