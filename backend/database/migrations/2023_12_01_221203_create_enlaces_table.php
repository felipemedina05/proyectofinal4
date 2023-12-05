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
        Schema::create('enlaces', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_pagina');
            $table->foreign('id_pagina')->references('id')->on('paginas')->cascadeOnDelete()->cascadeOnUpdate();
            $table->unsignedBigInteger('id_rol');
            $table->foreign('id_rol')->references('id')->on('rols')->cascadeOnDelete()->cascadeOnUpdate();
            $table->string('descripcion');
            $table->date('fecha_creacion');
            $table->date('fecha_modificacion');

            

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
        Schema::dropIfExists('enlaces');
    }
};
