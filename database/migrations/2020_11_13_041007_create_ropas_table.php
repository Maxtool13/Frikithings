<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRopasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ropas', function (Blueprint $table) {
            //$table->id();

            $table->bigIncrements('id');

            $table->string('tipo');
            $table->string('talla');
            $table->string('genero');
            $table->string('nolote');
            $table->string('origen');
            $table->integer('peso');


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
        Schema::dropIfExists('ropas');
    }
}
