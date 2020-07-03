<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateBreedingsTable extends Migration {

	public function up()
	{
		Schema::create('breedings', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->string('name', 40);
			$table->bigInteger('nb_unicorn')->default('1');
			$table->decimal('unit_cost_HT', 12,2);
			$table->enum('gender', array('male', 'female', 'alien', 'mixed'));
			$table->bigInteger('company_id')->unsigned()->nullable();
            $table->foreign('company_id')->references('id')->on('companies')
                ->onDelete('SET NULL');
		});
	}

	public function down()
	{
		Schema::drop('breedings');
	}
}
