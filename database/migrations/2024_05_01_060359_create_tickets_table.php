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
        Schema::create('tickets', function (Blueprint $table) {
            $table->id();
            $table->string('folio');
            $table->string('curp');
            $table->string('name');
            $table->string('last_name');
            $table->string('second_last_name');
            $table->foreignId('city_id')->references('id')->on('cities');
            $table->foreignId('education_level_id')->references('id')->on('education_levels');
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tickets');
    }
};
