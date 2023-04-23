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
        Schema::create('especialidads', function (Blueprint $table) {
            $table->id();
            $table->string('Descripcion');
            $table->string('NombreE');
            $table->integer('CantidadFotos');
            $table->integer('PrecioE');
            $table->unsignedBigInteger('estudio_fotografico_id');
            $table->foreign('estudio_fotografico_id')->references('id')->on('estudio_fotograficos');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('especialidads');
    }
};
