<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatCamionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('camion', function (Blueprint $table) {
            $table->string('id_placa');
            $table->string('placa_camion',6);
            $table->string('marca',45);
            $table->string('color',25);
            $table->date('modelo');
            $table->string('capacidad_toneladas');
            $table->string('tranporte_codigo',45);
        });
    }


    public function down()
    {
        //
    }
}
