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
        if (! is_null($row['staffid'])) {
            Staff::firstOrCreate([
                'staff_id' => $this->organisation->id,
                'name' => trim($row['name']),
            ], [
                'buying_price' => $row['bp'] ?? 0.00,
                'selling_price' => $row['sp'] ?? 0.00,
            ]);
        }


        // $table->string('StaffID')->unique()->primary();
        //     $table->string('StaffType');
        //     $table->string('Title');
        //     $table->string('Firstname');
        //     $table->string('MiddleInitials')->nullable();
        //     $table->string('Surname');
        //     $table->string('Status');
        //     $table->string('Department');
        //     $table->string('JobTitle');
        //     $table->string('Mobile')->nullable();
        //     $table->string('InternalNumber')->number();
        //     $table->string('Email')->unique();
        //     $table->string('Manager');
        //     $table->string('GroupApproved');
        //     $table->string('HomePhone');
        //     $table->string('UIDNumber');
    }
}
