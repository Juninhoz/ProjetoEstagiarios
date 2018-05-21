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
            $table->integer('instituicao_id')->unsigned();
            $table->integer('curso_id')->unsigned();
            $table->integer('horario_id')->unsigned();
            $table->integer('status_id')->unsigned();
            $table->integer('setor_id')->unsigned();
            $table->string('nome');
            $table->string('email');
            $table->string('telefone')->nullable();
            $table->date('data_contrato')->nullable();
            $table->date('pri_renovacao')->nullable();
            $table->date('seg_renovacao')->nullable();
            $table->date('ter_renovacao')->nullable();
            $table->date('fim_contrato')->nullable();
            $table->timestamps();
            $table->softDeletes();
            
            $table->foreign('instituicao_id')->references('id')->on('instituicoes');
            $table->foreign('curso_id')->references('id')->on('cursos');
            $table->foreign('horario_id')->references('id')->on('horarios');
            $table->foreign('status_id')->references('id')->on('status');
            $table->foreign('setor_id')->references('id')->on('setores');
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
