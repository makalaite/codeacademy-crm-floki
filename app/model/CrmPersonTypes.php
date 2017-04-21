<?php

namespace App\model;


class CrmPersonTypes extends CoreModel
{
    /**
     * Table name created
     * @var string
     */
    protected $table = 'crm_person_types';

    /**
     * Fields will be manipulated
     * @var array
     */

    protected $fillable = ['id', 'name', 'description'];
}
