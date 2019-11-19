<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdenesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ordenes', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('cliente_id')->comment('Le asignamos el id del cliente al que pertenece la ordén.');
            $table->integer('producto_id')->comment('Se le asigna el id del producto que el cliente ha seleccionado');
            $table->integer('cantidad')->comment('Aquí el cliente ingresa la cantidad a consumir del producto seleccionado');
            $table->float('precio_total')->comment('Se registra el precio total calculado a partir del precio unitario del producto');
            $table->string('estado_orden')->comment('Aquí se podrá modificar el estado de la orden');
            $table->date('fecha_orden')->comment('Guardamos la fecha en que se generó la orden');
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
        Schema::dropIfExists('ordenes');
    }
}
