<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCompaniesTable extends Migration {

	public function up()
	{
		Schema::create('companies', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->boolean('is_breeder')->default(false);
			$table->string('company_name', 60);
			$table->string('legal_status', 20);
			$table->integer('customer_id')->unsigned()->nullable();
			$table->integer('clientele_id')->unsigned()->nullable();
			$table->integer('entity_id')->unsigned()->nullable();
			$table->integer('bred_id')->unsigned()->nullable();
			$table->integer('unicorn_id')->unsigned()->nullable();
			$table->integer('breeding_id')->unsigned()->nullable();
		});
	}

	public function down()
	{
		Schema::drop('companies');
	}
}