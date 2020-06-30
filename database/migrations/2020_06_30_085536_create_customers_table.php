<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCustomersTable extends Migration {

	public function up()
	{
		Schema::create('customers', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->string('firstname', 60)->nullable();
			$table->string('lastname', 60)->nullable();
			$table->integer('company_id')->unsigned()->nullable();
			$table->integer('companies_id')->unsigned()->nullable();
			$table->integer('contact_id')->unsigned()->nullable();
			$table->integer('bred_id')->unsigned()->nullable();
		});
	}

	public function down()
	{
		Schema::drop('customers');
	}
}
