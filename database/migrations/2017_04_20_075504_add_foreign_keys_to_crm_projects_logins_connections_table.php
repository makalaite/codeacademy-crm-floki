<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToCrmProjectsLoginsConnectionsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('crm_projects_logins_connections', function(Blueprint $table)
		{
			$table->foreign('login_id', 'fk_crm_projects_logins_connections_crm_project_logins1')->references('id')->on('crm_project_logins')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('project_id', 'fk_crm_projects_logins_connections_crm_projects1')->references('id')->on('crm_projects')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('crm_projects_logins_connections', function(Blueprint $table)
		{
			$table->dropForeign('fk_crm_projects_logins_connections_crm_project_logins1');
			$table->dropForeign('fk_crm_projects_logins_connections_crm_projects1');
		});
	}

}
