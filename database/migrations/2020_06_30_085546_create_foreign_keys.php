<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateForeignKeys extends Migration {

	public function up()
	{
		Schema::table('unicorns', function(Blueprint $table) {
			$table->foreign('company_id')->references('id')->on('companies')
						->onDelete('set null')
						->onUpdate('restrict');
		});
		Schema::table('breedings', function(Blueprint $table) {
			$table->foreign('company_id')->references('id')->on('companies')
						->onDelete('set null')
						->onUpdate('restrict');
		});
		Schema::table('companies', function(Blueprint $table) {
			$table->foreign('customer_id')->references('id')->on('customers')
						->onDelete('set null')
						->onUpdate('restrict');
		});
		Schema::table('companies', function(Blueprint $table) {
			$table->foreign('clientele_id')->references('id')->on('customers')
						->onDelete('set null')
						->onUpdate('restrict');
		});
		Schema::table('companies', function(Blueprint $table) {
			$table->foreign('entity_id')->references('id')->on('contacts')
						->onDelete('set null')
						->onUpdate('restrict');
		});
		Schema::table('companies', function(Blueprint $table) {
			$table->foreign('bred_id')->references('id')->on('breds')
						->onDelete('set null')
						->onUpdate('restrict');
		});
		Schema::table('companies', function(Blueprint $table) {
			$table->foreign('unicorn_id')->references('id')->on('unicorns')
						->onDelete('set null')
						->onUpdate('restrict');
		});
		Schema::table('companies', function(Blueprint $table) {
			$table->foreign('breeding_id')->references('id')->on('breedings')
						->onDelete('set null')
						->onUpdate('restrict');
		});
		Schema::table('commands', function(Blueprint $table) {
			$table->foreign('breeding_id')->references('id')->on('unicorns')
						->onDelete('set null')
						->onUpdate('restrict');
		});
		Schema::table('commands', function(Blueprint $table) {
			$table->foreign('customer_id')->references('id')->on('customers')
						->onDelete('set null')
						->onUpdate('restrict');
		});
		Schema::table('customers', function(Blueprint $table) {
			$table->foreign('company_id')->references('id')->on('companies')
						->onDelete('set null')
						->onUpdate('restrict');
		});
		Schema::table('customers', function(Blueprint $table) {
			$table->foreign('companies_id')->references('id')->on('companies')
						->onDelete('set null')
						->onUpdate('restrict');
		});
		Schema::table('customers', function(Blueprint $table) {
			$table->foreign('entity_id')->references('id')->on('contacts')
						->onDelete('set null')
						->onUpdate('restrict');
		});
		Schema::table('customers', function(Blueprint $table) {
			$table->foreign('bred_id')->references('id')->on('breds')
						->onDelete('set null')
						->onUpdate('restrict');
		});
		Schema::table('breds', function(Blueprint $table) {
			$table->foreign('unicorn_id')->references('id')->on('breedings')
						->onDelete('set null')
						->onUpdate('restrict');
		});
		Schema::table('breds', function(Blueprint $table) {
			$table->foreign('customer_id')->references('id')->on('customers')
						->onDelete('set null')
						->onUpdate('restrict');
		});
		Schema::table('contacts', function(Blueprint $table) {
			$table->foreign('company_id')->references('id')->on('companies')
						->onDelete('set null')
						->onUpdate('restrict');
		});
		Schema::table('contacts', function(Blueprint $table) {
			$table->foreign('customer_id')->references('id')->on('customers')
						->onDelete('set null')
						->onUpdate('restrict');
		});
	}

	public function down()
	{
		Schema::table('unicorns', function(Blueprint $table) {
			$table->dropForeign('unicorns_company_id_foreign');
		});
		Schema::table('breedings', function(Blueprint $table) {
			$table->dropForeign('breedings_company_id_foreign');
		});
		Schema::table('companies', function(Blueprint $table) {
			$table->dropForeign('companies_customer_id_foreign');
		});
		Schema::table('companies', function(Blueprint $table) {
			$table->dropForeign('companies_clientele_id_foreign');
		});
		Schema::table('companies', function(Blueprint $table) {
			$table->dropForeign('companies_entity_id_foreign');
		});
		Schema::table('companies', function(Blueprint $table) {
			$table->dropForeign('companies_bred_id_foreign');
		});
		Schema::table('companies', function(Blueprint $table) {
			$table->dropForeign('companies_unicorn_id_foreign');
		});
		Schema::table('companies', function(Blueprint $table) {
			$table->dropForeign('companies_breeding_id_foreign');
		});
		Schema::table('commands', function(Blueprint $table) {
			$table->dropForeign('commands_breeding_id_foreign');
		});
		Schema::table('commands', function(Blueprint $table) {
			$table->dropForeign('commands_customer_id_foreign');
		});
		Schema::table('customers', function(Blueprint $table) {
			$table->dropForeign('customers_company_id_foreign');
		});
		Schema::table('customers', function(Blueprint $table) {
			$table->dropForeign('customers_companies_id_foreign');
		});
		Schema::table('customers', function(Blueprint $table) {
			$table->dropForeign('customers_entity_id_foreign');
		});
		Schema::table('customers', function(Blueprint $table) {
			$table->dropForeign('customers_bred_id_foreign');
		});
		Schema::table('breds', function(Blueprint $table) {
			$table->dropForeign('breds_unicorn_id_foreign');
		});
		Schema::table('breds', function(Blueprint $table) {
			$table->dropForeign('breds_customer_id_foreign');
		});
		Schema::table('contacts', function(Blueprint $table) {
			$table->dropForeign('entities_company_id_foreign');
		});
		Schema::table('contacts', function(Blueprint $table) {
			$table->dropForeign('entities_customer_id_foreign');
		});
	}
}
