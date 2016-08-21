<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVentanillasTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('ventanillas', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('ventanilla');
			$table->integer('tipoVentanillas_id')->unsigned();
			$table->foreign('tipoVentanillas_id')->references('id')->on('tipoVentanillas');
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
		Schema::drop('ventanillas');
	}

}
