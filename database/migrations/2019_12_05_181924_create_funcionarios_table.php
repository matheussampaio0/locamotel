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
            $table->varchar('celular', 15);
            $table->varchar('celular2', 15);
            $table->varchar('cpf', 16);
            $table->varchar('rg', 20);
            $table->varchar('rua');
            $table->varchar('bairro');
            $table->varchar('cidade');
            $table->varchar('numerocasa');
            $table->varchar('cep');
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
