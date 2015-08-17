<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFilmeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('filme', function (Blueprint $table)
        {
            $table->increments('id');
            $table->string('nome');
            $table->string('cast');
            $table->string('duracao');
            $table->string('direcao');
            $table->timestamps();
            
            $table->integer('genero_id')->unsigned();
            $table->foreign('genero_id')->references('id')->on('genero');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
