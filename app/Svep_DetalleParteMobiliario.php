<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Svep_DetalleParteMobiliario extends Model
{
    protected $table = 'detallle_partes_mobiliario';
    protected $primaryKey = 'iddetallle_partes_mobiliario';
    public $timestamps  = false ;
    public function Moviliario(){
        return $this->belongsTo('App\Svep_Mobiliario','idMobiliario');
    }
}
