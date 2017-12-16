<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFeriasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ferias', function($table){
            
            $table->increments('id');
            $table->integer('id_estagiario')->unsigned();
            $table->date('data_inicio')->nullable();
            $table->date('data_termino')->nullable();
            $table->date('data_retorno')->nullable();
            $table->timestamps();

            $table->foreign('id_estagiario')->references('id')->on('estagiarios');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('ferias');
    }
}
