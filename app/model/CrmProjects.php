<?php

namespace App\model;

class CrmProjects extends CoreModel
{
    /**
     * Table name created
     * @var string
     */
    protected $table = 'crm_projects';

    /**
     * Fields will be manipulated
     * @var array
     */

    protected $fillable = ['id', 'client_id', 'name', 'type_id', 'description'];

    public function client()
    {
        return $this->hasOne(CrmClients::class, 'id', 'client_id');
    }

    public function type()
    {
        return $this->hasOne(CrmProjectTypes::class, 'id', 'type_id');
    }

    public function personal(){
        return $this->hasMany(CrmProjectsPersonConnection::class, 'project_id', 'id');

    }
}
