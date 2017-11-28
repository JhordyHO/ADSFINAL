<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Svep_Departamento extends Model
{
    protected $table = 'departamento';
    protected $primaryKey = 'idDepartamento';
    public $timestamps  = false ;
}
