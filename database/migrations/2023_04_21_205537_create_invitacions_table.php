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
        Schema::create('invitacions', function (Blueprint $table) {
            $table->id();
            $table->string('NombreI');
            $table->text('DescripcionI');
            $table->string('UbicacionI');
            $table->time('DuracionI');
            $table->boolean('EstadoI')->nullable();
            $table->date('fecha')->nullable();
            $table->unsignedBigInteger('organizador_id');
            $table->foreign('organizador_id')->references('id')->on('organizadors');
            $table->unsignedBigInteger('especialidad_id');
            $table->foreign('especialidad_id')->references('id')->on('especialidads');
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
        Schema::dropIfExists('invitacions');
    }
};
