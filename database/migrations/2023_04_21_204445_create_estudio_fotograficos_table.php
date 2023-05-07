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
        Schema::create('estudio_fotograficos', function (Blueprint $table) {
            $table->id();
            $table->string('NombreEF');
            $table->text('DescripcionEF')->nullable();
            $table->string('UbicacionEF')->nullable();
            $table->string('telefono');
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users');          
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('estudio_fotograficos');
    }
};
