<?php
/**
 * Created by PhpStorm.
 * User: CodeAcademy
 * Date: 2017.04.21
 * Time: 09:16
 */

namespace App\model;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class CoreModel extends Model
{
    use SoftDeletes;
}