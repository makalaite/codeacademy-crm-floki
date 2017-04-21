<?php

namespace App\model;

class CrmProjectTypes extends CoreModel
{
    /**
     * Table name created
     * @var string
     */
    protected $table = 'crm_project_types';

    /**
     * Fields will be manipulated
     * @var array
     */

    protected $fillable = ['id', 'names', 'description'];
}

