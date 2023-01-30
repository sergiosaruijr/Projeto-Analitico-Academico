<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEventsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('events', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nomeEvento');
            $table->string('nomeResponsavel');
            $table->string('area');
            $table->integer('numeroFuncionarios');
            $table->integer('numeroParticipantes');
            $table->bigInteger('custo');
            $table->float('rendimento_bruto');
            $table->date('dataInicio');
            $table->date('dataFim');
            $table->mediumText('descricao');
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
        Schema::dropIfExists('events');
    }
}
