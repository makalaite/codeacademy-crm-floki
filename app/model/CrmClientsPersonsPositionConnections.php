<?php

namespace App\model;
class CrmClientsPersonsPositionConnections extends CoreModel
{
    /**
     * Table name created
     */
    protected $table = 'clients_persons_position_connections';

    public function __construct(array $attributes = [])
    {
        parent::__construct($attributes);

        $this->hidden = array_merge($this->hidden, ['client_id', 'person_id', 'position_id']);
    }

    /**
     * Fields will be manipulated
     * @var array
     */

    protected $fillable = ['id', 'client_id', 'person_id', 'position_id'];

    public function personalData(){
        return $this->hasOne(CrmPersons::class, 'id', 'person_id');
    }

    public function clientData(){
        return $this->hasOne(CrmClients::class, 'id', 'client_id');
    }

    public function positionData(){
        return $this->hasOne(CrmClientsPositions::class, 'id', 'position_id');
    }
}
