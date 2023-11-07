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
        Schema::create('facturas', function (Blueprint $table) {
            $table->id('codigo_factura');
            $table->string('numero_factura',50)->unique();
            $table->string('id_vendedor',50);
            $table->foreignId('id_cliente');
            $table->timestamp('fecha_emision');
            $table->tinyInteger('estadio');
            $table->enum('forma_pago', ['CONTADOR', 'CREDITO']);
            $table->foreign('id_cliente')->references('id_cliente')->on('clients');
            $table->foreign('id_vendedor')->references('id_vendedor')->on('vendedor');    
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('facturas');
    }
};
