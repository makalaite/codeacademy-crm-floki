<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToClientsPersonsPositionConnectionsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('clients_persons_position_connections', function(Blueprint $table)
		{
			$table->foreign('client_id', 'fk_clients_persons_position_connections_crm_clients')->references('id')->on('crm_clients')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('position_id', 'fk_clients_persons_position_connections_crm_clients_postions1')->references('id')->on('crm_clients_postions')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('person_id', 'fk_clients_persons_position_connections_crm_persons1')->references('id')->on('crm_persons')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('clients_persons_position_connections', function(Blueprint $table)
		{
			$table->dropForeign('fk_clients_persons_position_connections_crm_clients');
			$table->dropForeign('fk_clients_persons_position_connections_crm_clients_postions1');
			$table->dropForeign('fk_clients_persons_position_connections_crm_persons1');
		});
	}

}
