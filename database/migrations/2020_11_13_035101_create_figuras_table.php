<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFigurasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('figuras', function (Blueprint $table) {
            //$table->id();

            $table->bigIncrements('id');
            $table->string('nombre');
            $table->string('serie');
            $table->string('marca');
            $table->integer('peso');
            $table->integer('altura');
            $table->string('empaque'); 
            $table->integer('precio');
            $table->string('imagen');



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
        Schema::dropIfExists('figuras');
    }
}
