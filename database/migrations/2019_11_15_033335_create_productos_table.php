<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('productos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nombre')->comment('Nombre de cada producto que se registrará');
            $table->string('descripcion')->comment('Aquí almacenamos la descripción de cada producto');
            $table->float('precio')->comment('Campo que almacena el precio unitario de cada producto');
            $table->string('imagen')->comment('Almacenamos una imagen del producto');
            $table->boolean('status')->default('1')->comment('Indica si el producto esta activo o inactivo');
            $table->integer('categoria_id')->comment('Guardamos el ID de la cateogira a la que pertenece');
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
        Schema::dropIfExists('productos');
    }
}
