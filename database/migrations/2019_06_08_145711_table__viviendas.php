<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TableViviendas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('viviendas', function (Blueprint $table) {
            $table->bigIncrements('id_vivienda');
            $table->integer('c_habit');
            $table->integer('c_banios');
            $table->string('colonia', 50);
            $table->double('tamanio', 10,2);
            $table->double('precio', 10,2);
            $table->string('municipio', 50);
            $table->string('departamento', 50);
            $table->string('categoria', 50);
            $table->string('negociable', 2);
            $table->string('estado', 20);
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
        Schema::dropIfExists('viviendas');
    }
}
