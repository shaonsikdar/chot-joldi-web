<?php

use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		$table->increments('id');
	   	$table->string('firstname', 20);
	   	$table->string('lastname', 20);
	   	$table->string('email', 100)->unique();
	   	$table->string('mobile', 11);
	   	$table->string('password', 64);
	   	$table->timestamps();
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('users');
	}

}