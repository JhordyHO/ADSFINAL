<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Svep_Mobiliario extends Model
{
    protected $table = 'mobiliario';
    protected $primaryKey = 'idMobiliario';
    public $timestamps  = false ;

    public function Categoria(){
        return $this->belongsTo('App\Svep_Categoria','idCategoria');
    }
    public function Departamento(){
        return $this->belongsTo('App\Svep_Departamento','idDepartamento');
    }
}
