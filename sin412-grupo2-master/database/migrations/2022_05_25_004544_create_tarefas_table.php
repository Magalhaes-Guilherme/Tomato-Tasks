<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tarefas', function (Blueprint $table) {
            $table->id();
            $table->string('titulo')->nullable();
            $table->longText('descricao')->nullable();
            $table->string('tempo')->nullable();
            $table->integer('qtd_ciclos')->nullable();
            $table->string('status')->nullable();
            $table->string('complexidade')->nullable();
            $table->string('prioridade')->nullable();
            $table->bigInteger('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users');
            $table->bigInteger('ciclo_id')->unsigned();
            $table->foreign('ciclo_id')->references('id')->on('ciclos');
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
        Schema::dropIfExists('tarefas');
    }
};
