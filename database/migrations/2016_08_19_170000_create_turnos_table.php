<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTurnosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('turnos', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('turno');
			$table->integer('tipoVentanilla_id')->unsigned();
			$table->foreign('tipoVentanilla_id')->references('id')->on('tipo_ventanillas');
			$table->integer('ventanilla_id')->unsigned();
			$table->foreign('ventanilla_id')->references('id')->on('ventanillas');
			$table->integer('usuario_id')->unsigned();
			$table->foreign('usuario_id')->references('id')->on('users');
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
		Schema::drop('turnos');
	}

}
