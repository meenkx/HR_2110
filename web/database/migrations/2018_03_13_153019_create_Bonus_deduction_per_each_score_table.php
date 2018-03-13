<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateBonusDeductionPerEachScoreTable extends Migration {

	public function up()
	{
		Schema::create('Bonus_deduction_per_each_score', function(Blueprint $table) {
			$table->increments('Deduction_Bonus_ID');
			$table->string('Rate_Score', 20);
			$table->string('Value_Score', 20);
		});
	}

	public function down()
	{
		Schema::drop('Bonus_deduction_per_each_score');
	}
}