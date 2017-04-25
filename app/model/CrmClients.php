<?php

namespace App\model;

class CrmClients extends CoreModel
{
    /**
     * Table name created
     * @var string
     */
    protected $table = 'crm_clients';

    /**
     * Fields will be manipulated
     * @var array
     */

    protected $fillable = ['id', 'title', 'juridical_fizical'];

    // protected $hidden = ['count', 'updated_at', 'created_at', 'deleted_at'];

    protected $appends = ['is_company'];

    protected $with = ['projects'];

    public function projects(){
        return $this->hasMany(CrmProjects::class, 'client_id','id');
    }



    public function getIsCompanyAttribute(){

        return $this->juridical_fizical == 'J';
    }


    public function personal(){
        return $this->hasMany(CrmClientsPersonsPositionConnections::class, 'client_id', 'person_id', 'position_id');

    }
}
