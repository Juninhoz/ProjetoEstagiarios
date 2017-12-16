<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEstagiarioTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('estagiarios', function($table) {
            $table->increments('id');
            $table->integer('id_horario')->unsigned();
            $table->integer('id_status')->unsigned();
            $table->string('nome_estagiario');
            $table->string('email_estagiario');
            $table->string('telefone')->nullable();
            $table->date('data_contrato')->nullable();
            $table->date('pri_renovacao')->nullable();
            $table->date('seg_renovacao')->nullable();
            $table->date('ter_renovacao')->nullable();
            $table->date('fim_contrato')->nullable();
            $table->timestamps();

            $table->foreign('id_horario')->references('id')->on('horario');
            $table->foreign('id_status')->references('id')->on('status');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('estagiarios');
    }
}
