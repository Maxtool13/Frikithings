<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNesoberisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nesoberis', function (Blueprint $table) {
            //$table->id();

            $table->bigIncrements('id');
            $table->string('nombre');
            $table->string('serie');
            $table->integer('tamaño');
            $table->integer('peso');
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
        Schema::dropIfExists('nesoberis');
    }
}
