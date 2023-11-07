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
        Schema::create('products', function (Blueprint $table) {
            $table->id('id_producto');
            $table->string('codigo',50);
            $table->foreignId('id_categoria');
            $table->foreignId('id_marca');
            $table->string('descripcion',50);
            $table->enum('unidad_medida', ['UNIDAD', 'OTRO']);
            $table->tinyInteger('disponible');
            $table->decimal('porcentaje_iva', 4,2);
            $table->decimal('precio_unitario', 20,2);
            $table->smallInteger('stock');
            $table->timestamps();
            $table->foreign('id_categoria')->references('id_categoria')->on('category');
            $table->foreign('id_marca')->references('id_marca')->on('manufacturer_brands');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
};
