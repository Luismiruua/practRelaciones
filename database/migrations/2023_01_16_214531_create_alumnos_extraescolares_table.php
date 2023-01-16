<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('alumnos_extraescolares', function (Blueprint $table) {
            $table->id();
            $table->foreignId('alumno_id')
                ->nullable()
                ->constrained('alumnos')
                ->cascadeOnUpdate()
                ->nullOnDelete();

            
            $table->foreignId('extraescolar_id')
                ->nullable()
                ->constrained('extraescolares')
                ->cascadeOnUpdate()
                ->nullOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('alumnos_extraescolares');
    }
};
