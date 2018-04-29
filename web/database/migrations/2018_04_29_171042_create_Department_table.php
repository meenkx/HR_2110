<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateDepartmentTable extends Migration {

	public function up()
	{
		Schema::create('Department', function(Blueprint $table) {
			$table->increments('Depart_ID');
			$table->string('Depart_name', 20);
			$table->string('Head_ID', 20);
			$table->integer('Tel');
			$table->integer('Location_ID')->unsigned();
		});
	}

	public function down()
	{
		Schema::drop('Department');
	}
}