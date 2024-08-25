<?php

use App\Imports\StaffImport;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Maatwebsite\Excel\Facades\Excel;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('Staff', function (Blueprint $table) {
            $table->string('StaffID')->unique()->primary();
            $table->string('StaffType');
            $table->string('Title');
            $table->string('Firstname');
            $table->string('MiddleInitials')->nullable();
            $table->string('Surname');
            $table->string('Status');
            $table->string('Department');
            $table->string('JobTitle');
            $table->string('Mobile')->nullable();
            $table->string('InternalNumber')->number();
            $table->string('Email')->unique();
            $table->string('Manager');
            $table->string('GroupApproved');
            $table->string('HomePhone');
            $table->string('UIDNumber');
        });


        Schema::table('Staff', function (Blueprint $table) {
            $table->foreign('Manager')->references('StaffID')->on('Staff');
        });

        Excel::import(new StaffImport, 'ocg_hr.xlsx');
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('Staff');
    }
};
