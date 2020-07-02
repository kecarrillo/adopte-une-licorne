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
			$table->bigInteger('company_id')->unsigned()->nullable();
			$table->foreign('company_id')->references('id')->on('companies')
                ->onDelete('SET NULL');
		});
	}

	public function down()
	{
		Schema::drop('breds');
	}
}