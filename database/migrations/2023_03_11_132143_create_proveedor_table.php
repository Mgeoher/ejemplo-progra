<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProveedorTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('proveedor', function (Blueprint $table) {
            $table->id();
            $table->string('codigo_proveedor', 75);
            $table->string('nombre_proveedor',120);
            $table->string('direccion',250);
            $table->string('telefono',15);
            $table->timestamps();
        });
    }


    public function down()
    {
        Schema::dropIfExists('proveedor');
    }
}
