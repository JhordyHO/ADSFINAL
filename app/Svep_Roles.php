<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Svep_Roles extends Model
{
    protected $table = 'roles';
    protected $primaryKey = 'idRoles';
    public $timestamps  = false ;
}
