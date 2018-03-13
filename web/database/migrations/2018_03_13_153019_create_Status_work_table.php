<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateStatusWorkTable extends Migration {

	public function up()
	{
		Schema::create('Status_work', function(Blueprint $table) {
			$table->increments('ID_Status');
			$table->integer('ID_member')->unsigned();
			$table->date('Work_date');
			$table->integer('Work_status_id')->unsigned();
			$table->date('Time_checkin');
			$table->date('Time_checkout');
			$table->integer('OT');
			$table->integer('Deduction_Bonus_ID')->unsigned();
		});
	}

	public function down()
	{
		Schema::drop('Status_work');
	}
}