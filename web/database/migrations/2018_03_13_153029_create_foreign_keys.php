<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Eloquent\Model;

class CreateForeignKeys extends Migration {

	public function up()
	{
		Schema::table('Profile', function(Blueprint $table) {
			$table->foreign('Job_ID')->references('Job_ID')->on('Job')
						->onDelete('cascade')
						->onUpdate('cascade');
		});
		Schema::table('Address', function(Blueprint $table) {
			$table->foreign('ID_member')->references('ID_member')->on('Profile')
						->onDelete('cascade')
						->onUpdate('cascade');
		});
		Schema::table('History_Work', function(Blueprint $table) {
			$table->foreign('ID_member')->references('ID_member')->on('Profile')
						->onDelete('cascade')
						->onUpdate('cascade');
		});
		Schema::table('Certificate', function(Blueprint $table) {
			$table->foreign('ID_Certificate')->references('ID_Certificate')->on('Value_of_Each_Certificate')
						->onDelete('cascade')
						->onUpdate('cascade');
		});
		Schema::table('Certificate', function(Blueprint $table) {
			$table->foreign('ID_member')->references('ID_member')->on('Profile')
						->onDelete('cascade')
						->onUpdate('cascade');
		});
		Schema::table('Forms_Evidence', function(Blueprint $table) {
			$table->foreign('ID_member')->references('ID_member')->on('Profile')
						->onDelete('cascade')
						->onUpdate('cascade');
		});
		Schema::table('Transection_Peyment', function(Blueprint $table) {
			$table->foreign('ID_member')->references('ID_member')->on('Profile')
						->onDelete('cascade')
						->onUpdate('cascade');
		});
		Schema::table('Transection_Peyment', function(Blueprint $table) {
			$table->foreign('ID_payment_special')->references('ID_Payment_Special')->on('Payment_Special')
						->onDelete('cascade')
						->onUpdate('cascade');
		});
		Schema::table('Status_work', function(Blueprint $table) {
			$table->foreign('ID_member')->references('ID_member')->on('Profile')
						->onDelete('cascade')
						->onUpdate('cascade');
		});
		Schema::table('Status_work', function(Blueprint $table) {
			$table->foreign('Work_status_id')->references('Work_status_id')->on('Bonus_deduction_from_status')
						->onDelete('cascade')
						->onUpdate('cascade');
		});
		Schema::table('Status_work', function(Blueprint $table) {
			$table->foreign('Deduction_Bonus_ID')->references('Deduction_Bonus_ID')->on('Bonus_deduction_per_each_score')
						->onDelete('cascade')
						->onUpdate('cascade');
		});
		Schema::table('Department', function(Blueprint $table) {
			$table->foreign('Location_ID')->references('Location_ID')->on('Location')
						->onDelete('cascade')
						->onUpdate('cascade');
		});
		Schema::table('Job', function(Blueprint $table) {
			$table->foreign('Depart_ID')->references('Depart_ID')->on('Department')
						->onDelete('cascade')
						->onUpdate('cascade');
		});
		Schema::table('PM_of_each_department', function(Blueprint $table) {
			$table->foreign('Depart_ID')->references('Depart_ID')->on('Department')
						->onDelete('cascade')
						->onUpdate('cascade');
		});
		Schema::table('PM_of_each_department', function(Blueprint $table) {
			$table->foreign('KPI_CODE')->references('KPI_Code')->on('Performance_measurement')
						->onDelete('cascade')
						->onUpdate('cascade');
		});
		Schema::table('PM__history', function(Blueprint $table) {
			$table->foreign('PM_ID')->references('PM_ID')->on('PM_of_each_department')
						->onDelete('cascade')
						->onUpdate('cascade');
		});
		Schema::table('Activity_Department', function(Blueprint $table) {
			$table->foreign('Depart_ID')->references('Depart_ID')->on('Department')
						->onDelete('cascade')
						->onUpdate('cascade');
		});
		Schema::table('Activity_Department', function(Blueprint $table) {
			$table->foreign('Activity_ID')->references('Activity_ID')->on('Activity')
						->onDelete('cascade')
						->onUpdate('cascade');
		});
	}

	public function down()
	{
		Schema::table('Profile', function(Blueprint $table) {
			$table->dropForeign('Profile_Job_ID_foreign');
		});
		Schema::table('Address', function(Blueprint $table) {
			$table->dropForeign('Address_ID_member_foreign');
		});
		Schema::table('History_Work', function(Blueprint $table) {
			$table->dropForeign('History_Work_ID_member_foreign');
		});
		Schema::table('Certificate', function(Blueprint $table) {
			$table->dropForeign('Certificate_ID_Certificate_foreign');
		});
		Schema::table('Certificate', function(Blueprint $table) {
			$table->dropForeign('Certificate_ID_member_foreign');
		});
		Schema::table('Forms_Evidence', function(Blueprint $table) {
			$table->dropForeign('Forms_Evidence_ID_member_foreign');
		});
		Schema::table('Transection_Peyment', function(Blueprint $table) {
			$table->dropForeign('Transection_Peyment_ID_member_foreign');
		});
		Schema::table('Transection_Peyment', function(Blueprint $table) {
			$table->dropForeign('Transection_Peyment_ID_payment_special_foreign');
		});
		Schema::table('Status_work', function(Blueprint $table) {
			$table->dropForeign('Status_work_ID_member_foreign');
		});
		Schema::table('Status_work', function(Blueprint $table) {
			$table->dropForeign('Status_work_Work_status_id_foreign');
		});
		Schema::table('Status_work', function(Blueprint $table) {
			$table->dropForeign('Status_work_Deduction_Bonus_ID_foreign');
		});
		Schema::table('Department', function(Blueprint $table) {
			$table->dropForeign('Department_Location_ID_foreign');
		});
		Schema::table('Job', function(Blueprint $table) {
			$table->dropForeign('Job_Depart_ID_foreign');
		});
		Schema::table('PM_of_each_department', function(Blueprint $table) {
			$table->dropForeign('PM_of_each_department_Depart_ID_foreign');
		});
		Schema::table('PM_of_each_department', function(Blueprint $table) {
			$table->dropForeign('PM_of_each_department_KPI_CODE_foreign');
		});
		Schema::table('PM__history', function(Blueprint $table) {
			$table->dropForeign('PM__history_PM_ID_foreign');
		});
		Schema::table('Activity_Department', function(Blueprint $table) {
			$table->dropForeign('Activity_Department_Depart_ID_foreign');
		});
		Schema::table('Activity_Department', function(Blueprint $table) {
			$table->dropForeign('Activity_Department_Activity_ID_foreign');
		});
	}
}