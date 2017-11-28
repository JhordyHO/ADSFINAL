<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Auth\Authenticatable;

class Svep_Usuario extends Model implements AuthenticatableContract
{
    use Authenticatable;
    protected $table = 'usuario';
    protected $primaryKey = 'idusuario';
    public $timestamps  = false ;

    public function Persona(){
        return $this->belongsTo('App\...','idPersona');
    }

}
