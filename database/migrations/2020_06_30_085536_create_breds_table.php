<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateBredsTable extends Migration {

	public function up()
	{
		Schema::create('breds', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->date('date');
			$table->integer('unicorn_id')->unsigned()->nullable();
			$table->integer('customer_id')->unsigned()->nullable();
		});
	}

	public function down()
	{
		Schema::drop('breds');
	}
}