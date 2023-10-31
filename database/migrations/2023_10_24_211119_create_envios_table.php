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
        Schema::create('envios', function (Blueprint $table) {
            $table->id('id_envio');
            $table->string('numero_factura',50);
            $table->integer('id_cliente');
            $table->foreignId('id_trasportadora');
            $table->foreignId('ciudad_envio');
            $table->string('dirrecion_entrega',100);
            $table->boolean('envio_unico');
            $table->foreign('numero_factura')->references('numero_factura')->on('facturas');
            $table->foreign('id_trasportadora')->references('id_trasportadora')->on('transportadoras');
            $table->foreign('ciudad_envio')->references('id_ciudad')->on('city');
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
        Schema::dropIfExists('envios');
    }
};
