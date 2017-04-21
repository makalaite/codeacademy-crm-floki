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
}
