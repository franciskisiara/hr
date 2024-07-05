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
        Schema::create('people', function (Blueprint $table) {
            $table->id();
            $table->string('staff_number');
            $table->unsignedBigInteger('object_type_id');
            $table->unsignedBigInteger('manager_id')->nullable();
            // $table->enum('HRType', [
            //     'Empployee',
            //     'Contractor',
            // ]);
            // $table->id('Title', [

            // ]);

            $table->foreign('object_type_id')->references('id')->on('object_types')->cascadeOnDelete();
            $table->foreign('manager_id')->references('id')->on('people');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('people');
    }
};
