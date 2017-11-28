<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Svep_Categoria extends Model
{
    protected $table = 'categoria';
    protected $primaryKey = 'idCategoria';
    public $timestamps  = false ;
}
