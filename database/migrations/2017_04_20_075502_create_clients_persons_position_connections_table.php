<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateClientsPersonsPositionConnectionsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('clients_persons_position_connections', function(Blueprint $table)
		{
			$table->integer('count', true);
			$table->string('id', 36)->unique('id');
			$table->timestamps();
			$table->softDeletes();
			$table->string('client_id', 36)->index('fk_clients_persons_position_connections_crm_clients_idx');
			$table->string('person_id', 36)->index('fk_clients_persons_position_connections_crm_persons1_idx');
			$table->string('position_id', 36)->index('fk_clients_persons_position_connections_crm_clients_postion_idx');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('clients_persons_position_connections');
	}

}
