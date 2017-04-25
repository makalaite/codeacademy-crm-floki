<?php

namespace App\model;

class CrmProjectsPersonConnection extends CoreModel
{
    /**
     * Table name created
     * @var string
     */
    protected $table = 'crm_projects_person_connection';

    /**
     * Fields will be manipulated
     * @var array
     */

    protected $fillable = ['id', 'project_id', 'person_id', 'type_id'];

    public function projectData(){
        return $this->hasOne(CrmProjects::class, 'id', 'project_id');
    }

    public function personData(){
        return $this->hasOne(CrmPersons::class, 'id', 'person_id');
    }

    public function typeIdData(){
        return $this->hasOne(CrmPersonTypes::class, 'id', 'type_id');
    }
}

