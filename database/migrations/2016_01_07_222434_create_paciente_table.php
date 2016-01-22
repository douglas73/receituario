<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePacienteTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('paciente', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nome',100);
            $table->enum('sexo', ['masculino', 'feminino']);

            $table->dateTime('dtnascimento')->nullable();
            $table->string('profissao',100)->nullable();
            $table->enum('escolaridade', ['analfabeto', 'fundamental','medio','superior'])->nullable();
            $table->string('identidade',12)->nullable();
            $table->string('cpf',11)->nullable();

            $table->integer('status');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('paciente');
    }
}
