<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFuncionariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('funcionarios', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nome', 150);
            $table->string('celular', 15);
            $table->string('celular2', 15);
            $table->string('cpf', 16);
            $table->string('rg', 20);
            $table->string('rua');
            $table->string('bairro');
            $table->string('cidade');
            $table->string('numerocasa');
            $table->string('cep');
            $table->date('datanasc');
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
        Schema::dropIfExists('funcionarios');
    }
}
