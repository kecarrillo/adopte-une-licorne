<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateUnicornsTable extends Migration {

	public function up()
	{
		Schema::create('unicorns', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->bigInteger('age')->default('0');
			$table->string('name', 40);
			$table->bigInteger('mating_season')->default('1');
			$table->date('date_start_mating_season');
			$table->bigInteger('nb_mating')->default('0');
			$table->bigInteger('company_id')->unsigned()->nullable();
			$table->decimal('unit_cost_HT', 12,2)->default('0');
            $table->foreign('company_id')->references('id')->on('companies')
                ->onDelete('SET NULL');
		});
	}

	public function down()
	{
		Schema::drop('unicorns');
	}
}
