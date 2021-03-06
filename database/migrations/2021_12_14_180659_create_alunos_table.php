<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAlunosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('alunos', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->bigInteger('numero_aluno');
            $table->string('nome');
            $table->integer('matricula');
            $table->boolean('desistente');
            $table->boolean('concluiu_curso');
            $table->unsignedBigInteger('curso_id')->nullable();
            $table->unsignedBigInteger('plano_estudo_id')->nullable();

            $table->foreign('curso_id')->references('id')->on('cursos')->onDelete('cascade');
            $table->foreign('plano_estudo_id')->references('id')->on('plano_estudos')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('alunos');
    }
}
