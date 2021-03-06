<?php

namespace App\model;


class CrmPersons extends CoreModel
{
    /**
     * Table name created
     * @var string
     */
    protected $table = 'crm_persons';

    /**
     * Fields will be manipulated
     * @var array
     */

    protected $fillable = ['id', 'name', 'email', 'phone'];
}

