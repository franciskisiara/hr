<?php

use App\Imports\StaffImport;
use Illuminate\Support\Facades\Route;
use Maatwebsite\Excel\Facades\Excel;

Route::get('/', function () {
    dd("GOING ONCE");

    Excel::import(new StaffImport, 'ocg_hr.xlsx');
});
