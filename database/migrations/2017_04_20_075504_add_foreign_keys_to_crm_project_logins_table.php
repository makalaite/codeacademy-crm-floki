<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToCrmProjectLoginsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('crm_project_logins', function(Blueprint $table)
		{
			$table->foreign('type_id', 'fk_crm_project_logins_crm_project_login_types1')->references('id')->on('crm_project_login_types')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('crm_project_logins', function(Blueprint $table)
		{
			$table->dropForeign('fk_crm_project_logins_crm_project_login_types1');
		});
	}

}
