<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToCrmProjectsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('crm_projects', function(Blueprint $table)
		{
			$table->foreign('client_id', 'fk_crm_projects_list_crm_clients1')->references('id')->on('crm_clients')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('type_id', 'fk_crm_projects_list_crm_projects_types1')->references('id')->on('crm_project_types')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('crm_projects', function(Blueprint $table)
		{
			$table->dropForeign('fk_crm_projects_list_crm_clients1');
			$table->dropForeign('fk_crm_projects_list_crm_projects_types1');
		});
	}

}
