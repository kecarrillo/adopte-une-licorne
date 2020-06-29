<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateUnicornsTable extends Migration {

	public function up()
	{
		Schema::create('unicorns', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->integer('age')->default('0');
			$table->string('name', 40);
			$table->integer('mating_season')->default('1');
			$table->date('date_start_mating_season');
			$table->integer('nb_mating')->default('0');
			$table->integer('breeder_id')->unsigned()->nullable();
			$table->decimal('unit_cost_HT', 12,2)->default('0');
		});
	}

	public function down()
	{
		Schema::drop('unicorns');
	}
}