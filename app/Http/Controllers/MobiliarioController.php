<?php

namespace App\Http\Controllers;

use App\Repository\RepoMobiliario;
use Illuminate\Http\Request;


class MobiliarioController extends Controller
{
    protected $RespoMob;
    public function __construct(RepoMobiliario $repoMob){
        $this->RespoMob = $repoMob;
    }

    public function index(){
        $Mobi = $this->RespoMob->ListMobiliariobyID(1);
        $Cate = $this->RespoMob->ListCategoria();
        $Depa = $this->RespoMob->ListDepa();
        return view('mobiliario.index',compact('Mobi','Cate','Depa'));
    }

    public function store(Request $request){

       $mobi = $this->RespoMob->saveMobiliario($request);
        $this->RespoMob->saveDetalleMoviliario($mobi->idMobiliario,$request);
        $delimit = ':^*:';
        if(isset($request['part'])){
            foreach($request['part'] as $part){
                $parte = explode($delimit,$part);
                $this->RespoMob->savePartMobiliarioByID($mobi->idMobiliario,[
                    //Nombre*  Marca* ModeloSerie*  Cantidad*  Estado* Comentario*

                    'nombrePart'=> $parte[0],
                    'marcaPart'=> $parte[1],
                    'seriePart'=> $parte[2],
                    'cantidaPart'=> $parte[3],
                    'estadoPart'=> $parte[4],
                    'fechaPart'=> $request['fechaMob'],
                    'comentPart'=> $parte[5]
                ]);
            }
        }

        return redirect('mobiliario');
    }
}
