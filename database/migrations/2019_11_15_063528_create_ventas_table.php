<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVentasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ventas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('orden_id')->comment('Le pasamos el id de la orden');
            $table->date('fecha_venta')->comment('Guardamos la fecha en que se generó la venta, esta deberá coincidir con la de la orden');
            $table->float('monto_total')->comment('Almacenamos el valor total de la orden generada por el cliente');
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
        Schema::dropIfExists('ventas');
    }
}
