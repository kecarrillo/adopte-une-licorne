<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateAddressesTable extends Migration {

	public function up()
	{
		Schema::create('addresses', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->string('zip_code', 8);
			$table->string('town', 60);
			$table->string('wording', 120);
		});
	}

	public function down()
	{
		Schema::drop('addresses');
	}
}