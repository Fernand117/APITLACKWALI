<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClienteTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cliente', function (Blueprint $table) {
            $table->bigIncrements('id')->comment('Llave primaria de la tabla "cliente" que se auto incrementa.');
            $table->string('nombre')->comment('Campo "nombre" almacenará el nombre del cliente.');
            $table->string('paterno')->comment('Campo "paterno" almacena el apellido paterno del cliente.');
            $table->string('materno')->comment('Campo "materno" almacena el apallido materno del cliente.');
            $table->integer('edad')->comment('Campo "edad" registra la edad del cliente.');
            $table->string('imagen')->comment('Campo "imagen" almacena la foto de perfil del cliente, esta solo almacenará la ruta.');
            $table->integer('user_id')->comment('Campo "user_id" alamacena el id del ususairo.');
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
        Schema::dropIfExists('cliente');
    }
}
