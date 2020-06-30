<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateContactsTable extends Migration {

	public function up()
	{
		Schema::create('contacts', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->string('email', 75);
			$table->string('phone', 25);
			$table->string('wording_address', 120);
			$table->string('town', 60);
			$table->string('zip_code', 8);
			$table->string('country', 60);
			$table->integer('company_id')->unsigned()->nullable();
			$table->integer('customer_id')->unsigned()->nullable();
		});
	}

	public function down()
	{
		Schema::drop('contacts');
	}
}
