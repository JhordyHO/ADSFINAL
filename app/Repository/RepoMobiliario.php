<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 28/11/2017
 * Time: 2:12 PM
 */
namespace App\Repository;
use App\Svep_Categoria;
use App\Svep_Departamento;
use App\Svep_DetalleMobiliario;
use App\Svep_DetalleParteMobiliario;
use App\Svep_Mobiliario;

class RepoMobiliario
{
    protected $modelMobiario;
    protected $modelDepa;
    protected $modelCate;
    protected $modelParteMob;
    protected $modelDetalleMob;


    public function __construct(Svep_Mobiliario $moviliaria,
                                Svep_DetalleParteMobiliario $partes,
                                Svep_Categoria $cate ,
                                Svep_Departamento $depa,
                                Svep_DetalleMobiliario $detMob){
        $this->modelMobiario = $moviliaria;
        $this->modelCate = $cate;
        $this->modelDepa = $depa;
        $this->modelDetalleMob = $detMob;
        $this->modelParteMob = $partes;

    }

    public function ListMobiliariobyID($idPersona){
    $data =  $this->modelMobiario->join('detalle_mobiliario', 'mobiliario.idMobiliario', '=', 'detalle_mobiliario.idMobiliario')
                         ->select('*')
                         ->where('idPersona',$idPersona)
                         ->get();
        foreach($data as $d){
            $d->Categoria;
            $d->Departamento;
        }

        return $data;
    }

    public function ListCategoria(){
        return $this->modelCate->all();
    }
    public function ListDepa(){
        return $this->modelDepa->all();
    }
    /*
          *


             "": "1",
             "": "Bueno",
             "": "NO",

         "part": [
             "MOUSE::GT2::2343::1::NO",
             "TECLADO::HP::GB3::1::NO"
             ]

         */
    public function saveMobiliario($data){
       $model = new  $this->modelMobiario;
        $model->idCategoria = $data['idCategoria'];
        $model->idDepartamento = $data['idDepartamento'];
        $model->nombre_Mob = $data['nombreMob'];
        $model->marca_Mob = $data['marcaMob'];
        $model->serie_Mob = $data['serieMob'];
        $model->cantidad = $data['cantiMob'];
        $model->estado = $data['estado'];
        $model->fechaReg_Mob = $data['fechaMob'];
        $model->comentario = $data['comentaMob'];
        $model ->save();
        return $model;
    }
    public  function saveDetalleMoviliario($idMobiliario,$data){
       $model = new $this->modelDetalleMob;
        $model->idDetalle_Mobiliario  = $data[''];
        $model->idMobiliario = $idMobiliario;
        $model->idPersona = $data['idPersona'];
        $model->descripcion_det_Mob = $data['comentaMob'];
        $model->RegFeha_det_Mob = $data['fechaMob'];
        $model->cantidad_det_Mob = $data['cantiMob'];
        $model->estado_det_Mob = $data['estado'];
        $model->save();
        return $model;
    }
    public function savePartMobiliarioByID($idMobiliario,$data)
    {
        $model = new $this->modelParteMob;
        $model->idMobiliario =  $idMobiliario;
        $model->nombre_Mob2 =   $data['nombrePart'];
        $model->marca_Mob2 =    $data['marcaPart'];
        $model->serie_Mob2 =    $data['seriePart'];
        $model->cantidad2 =     $data['cantidaPart'];
        $model->estado =        $data['estadoPart'];
        $model->fechaReg_Mob2 = $data['fechaPart'];
        $model->comentario2 =   $data['comentPart'];
        $model->save();
        return $model;
    }
}