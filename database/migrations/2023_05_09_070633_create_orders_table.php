<?php

use App\Models\Order;
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
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_recibe'); //el usuario que la generó
            $table->foreign('user_recibe')->references('id')->on('users');
            $table->unsignedBigInteger('user_paga'); //el usuario que la generó
            $table->foreign('user_paga')->references('id')->on('users');
           
            $table->string('carnet');
            $table->integer('phone');             
            $table->string('email');
          //  $table->enum('tabla',[Order::Susc,Order::Fotos,Order::Evento], 10)->default(Order::Evento);
            $table->string('table');

            $table->enum('status',[Order::PENDIENTE,Order::RECIBIDO,Order::CONFIRMADO,Order::ANULADO])->default(Order::PENDIENTE);
            $table->double('total');
            $table->json('content')->nullable(); 
            $table->String('factura')->nullable();             
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
