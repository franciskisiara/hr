<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('HRData', function (Blueprint $table) {
            $table->id();
            $table->string('staffId')->unique();
            $table->string('objectType');
            $table->string('manager')->index()->nullable();
            $table->enum('HRType', [
                'Employee',
                'Contractor',
            ]);
            $table->enum('title', [
                'Architect',
                'CEO',
                'Developer',
                'Engineer',
                'Intern',
                'Sales Associate',
                'Sales Lead',
                'Sr. Engineer',
                'Sr. Technologist',
                'Support Engineer',
                'Human Resource',
                'VP',
            ]);
            $table->enum('department', [
                'Engineering',
                'Executive',
                'HR',
                'IT',
                'Sales',
            ]);
            $table->string('firstName');
            $table->string('middleName')->nullable();
            $table->string('lastName');
            $table->timestamps();
        });

        Schema::table('HRData', function (Blueprint $table) {
            $table->foreign('manager')->references('staffId')->on('HRData');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('HRData');
    }
};
