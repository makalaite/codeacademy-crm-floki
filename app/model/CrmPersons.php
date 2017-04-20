<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class CrmPersons extends Model
{
    use SoftDeletes;
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

