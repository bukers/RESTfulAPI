<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class VeiculosMigration extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('veiculos', function(Blueprint $table)
		{
		$table->increments('serie');
			$table->string('color');
			$table->float('cilindraje');
			$table->integer('potencia');
			$table->float('peso');
			$table->integer('fabricante_id')->unsigned();
			$table->foreign('fabricante_id')->references('id')->on('fabricantes');
			$table->nullableTimestamps();
		});
	}

	/** 
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('veiculos');
	}

}
