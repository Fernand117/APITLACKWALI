<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCategoriasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('categorias', function (Blueprint $table) {
            $table->bigIncrements('id')->comment('Este campo almacena el id de cada categoria.');
            $table->string('nombre')->comment('Aquí almacenamos el nombre de la categoria.');
            $table->string('imagen')->comment('Guardamos una imagen de cada categoria.');
            $table->boolean('status')->default('1')->comment('Indica que el valor esta activo, esto se usará para no eliminar por completo el dato solo ponerlo como nulo');
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
        Schema::dropIfExists('categorias');
    }
}
