<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCrmProjectsPersonConnectionTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('crm_projects_person_connection', function(Blueprint $table)
		{
			$table->integer('count', true);
			$table->string('id', 36)->unique('id');
			$table->timestamps();
			$table->softDeletes();
			$table->string('project_id', 36)->nullable()->index('fk_crm_prpjects_person_types_connection_crm_projects_list1_idx');
			$table->string('person_id', 36)->nullable()->index('fk_crm_prpjects_person_types_connection_crm_persons1_idx');
			$table->string('type_id', 36)->nullable()->index('fk_crm_prpjects_person_types_connection_crm_person_types1');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('crm_projects_person_connection');
	}

}
