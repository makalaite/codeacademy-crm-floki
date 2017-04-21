<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;

class CrmClientsPositions extends CoreModel
{
    /**
     * Table name created
     * @var string
     */
    protected $table = 'crm_positions';

    /**
     * Fields will be manipulated
     * @var array
     */

    protected $fillable = ['id', 'name', 'description'];
}
