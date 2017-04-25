<?php

namespace App\model;

class CrmProjectLoginTypes extends CoreModel
{
    /**
     * Table name created
     * @var string
     */
    protected $table = 'crm_project_login_types';

    /**
     * Fields will be manipulated
     * @var array
     */

    protected $fillable = ['id', 'name', 'description'];


}

