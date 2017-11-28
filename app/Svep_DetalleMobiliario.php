<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Svep_DetalleMobiliario extends Model
{
    protected $table = 'detalle_mobiliario';
    protected $primaryKey = 'idDetalle_Mobiliario';
    public $timestamps  = false ;
    public function Mobiliario(){
        return $this->belongsTo('App\Svep_Moviliario','idMoviliario');
    }
    public function Persona(){
        return $this->belongsTo('App\Svep_Persona','idPersona');
    }
}
