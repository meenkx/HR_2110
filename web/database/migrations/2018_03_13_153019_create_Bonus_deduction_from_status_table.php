<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateBonusDeductionFromStatusTable extends Migration {

	public function up()
	{
		Schema::create('Bonus_deduction_from_status', function(Blueprint $table) {
			$table->string('Work_status', 20);
			$table->string('Score_Bonus', 20);
			$table->increments('Work_status_id');
		});
	}

	public function down()
	{
		Schema::drop('Bonus_deduction_from_status');
	}
}