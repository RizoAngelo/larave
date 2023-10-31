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
        Schema::create('manufacturer_brands', function (Blueprint $table) {
            $table->id('id_marca');
            $table->string('codigo',10);
            $table->string('nombre',10);
            $table->foreignId('pais_origen');
            $table->foreign('pais_origen')->references('id_pais')->on('country');
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
        Schema::dropIfExists('manufacturer_brands');
    }
};
