<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCompaniesTable extends Migration {

	public function up()
	{
		Schema::create('companies', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->string('company_name', 60);
			$table->string('legal_status', 20);
			$table->bigInteger('contact_id')->unsigned()->nullable();
			$table->bigInteger('bred_id')->unsigned()->nullable();
			$table->bigInteger('unicorn_id')->unsigned()->nullable();
			$table->bigInteger('breeding_id')->unsigned()->nullable();
            $table->foreign('contact_id')->references('id')->on('contacts')
                ->onDelete('SET NULL');
            $table->foreign('bred_id')->references('id')->on('breds')
                ->onDelete('SET NULL');
            $table->foreign('unicorn_id')->references('id')->on('unicorns')
                ->onDelete('SET NULL');
            $table->foreign('breeding_id')->references('id')->on('breedings')
                ->onDelete('SET NULL');
		});
	}

	public function down()
	{
		Schema::drop('companies');
	}
}
