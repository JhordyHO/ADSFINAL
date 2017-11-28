<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Svep_Persona extends Model
{
    protected $table = 'persona';
    protected $primaryKey = 'idPersona';
    public $timestamps  = false ;
    public function Departamento(){
        return $this->belongsTo('App\Svep_Departamento','idDepartamento');
    }
}
