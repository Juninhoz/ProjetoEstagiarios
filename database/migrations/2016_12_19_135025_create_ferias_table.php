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
            $table->integer('estagiario_id')->unsigned();
            $table->date('data_inicio')->nullable();
            $table->date('data_termino')->nullable();
            $table->date('data_retorno')->nullable();
            $table->timestamps();

            $table->foreign('estagiario_id')->references('id')->on('estagiarios');
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
