<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCalendarOfHolidayTable extends Migration {

	public function up()
	{
		Schema::create('Calendar_of_holiday', function(Blueprint $table) {
			$table->increments('Id_holiday');
			$table->date('Date');
			$table->string('Detail', 20);
		});
	}

	public function down()
	{
		Schema::drop('Calendar_of_holiday');
	}
}