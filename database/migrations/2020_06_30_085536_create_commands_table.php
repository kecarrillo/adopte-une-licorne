<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCommandsTable extends Migration {

	public function up()
	{
		Schema::create('commands', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->integer('breeding_id')->unsigned()->nullable();
			$table->integer('customer_id')->unsigned()->nullable();
			$table->integer('quantity')->default('1');
		});
	}

	public function down()
	{
		Schema::drop('commands');
	}
}