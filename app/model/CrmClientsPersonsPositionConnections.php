<?php

namespace App\model;



class CrmClientsPersonsPositionConnections extends CoreModel
{
    /**
     * Table name created
     * @var string
     */
    protected $table = 'clients_persons_position_connections';

    /**
     * Fields will be manipulated
     * @var array
     */

    protected $fillable = ['id', 'client_id', 'person_id', 'position_id'];
}
