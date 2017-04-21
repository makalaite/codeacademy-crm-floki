<?php

namespace App\model;

class CrmProjectsLoginsConnections extends CoreModel
{
    /**
     * Table name created
     * @var string
     */
    protected $table = 'crm_projects_logins_connections';

    /**
     * Fields will be manipulated
     * @var array
     */

    protected $fillable = ['id', 'project_id', 'login_id'];
}
