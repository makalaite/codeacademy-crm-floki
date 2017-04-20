<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToCrmProjectsPersonConnectionTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('crm_projects_person_connection', function(Blueprint $table)
		{
			$table->foreign('type_id', 'fk_crm_prpjects_person_types_connection_crm_person_types1')->references('id')->on('crm_person_types')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('person_id', 'fk_crm_prpjects_person_types_connection_crm_persons1')->references('id')->on('crm_persons')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('project_id', 'fk_crm_prpjects_person_types_connection_crm_projects_list1')->references('id')->on('crm_projects')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('crm_projects_person_connection', function(Blueprint $table)
		{
			$table->dropForeign('fk_crm_prpjects_person_types_connection_crm_person_types1');
			$table->dropForeign('fk_crm_prpjects_person_types_connection_crm_persons1');
			$table->dropForeign('fk_crm_prpjects_person_types_connection_crm_projects_list1');
		});
	}

}
