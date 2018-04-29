<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateFormsEvidenceTable extends Migration {

	public function up()
	{
		Schema::create('Forms_Evidence', function(Blueprint $table) {
			$table->integer('ID_member')->unsigned();
			$table->string('ID_Evidence', 20);
			$table->date('Date');
			$table->timestamps();
			$table->string('Reason', 20);
			$table->string('Confirm', 20);
		});
	}

	public function down()
	{
		Schema::drop('Forms_Evidence');
	}
}