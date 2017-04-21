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
}
