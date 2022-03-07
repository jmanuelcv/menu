<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class restaurante extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
    

        Schema::create('restaurante', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->string('categoria');
            $table->float('precio',8,2);
            $table->timestamps();
            $table->string('ruta');

          
        });


    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('restaurante');
    }
}
