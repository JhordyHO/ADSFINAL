<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Svep_ReporteMobiliario extends Model
{
    protected $table = 'reporte_mobimiento';
    protected $primaryKey = 'idReporte';
    public $timestamps  = false ;
}
