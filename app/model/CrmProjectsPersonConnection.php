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
}

