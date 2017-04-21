<?php

namespace App\model;

class CrmProjectLogins extends CoreModel
{
    /**
     * Table name created
     * @var string
     */
    protected $table = 'crm_project_logins';

    /**
     * Fields will be manipulated
     * @var array
     */

    protected $fillable = ['id', 'username', 'password', 'login_url', 'type_id'];
}

