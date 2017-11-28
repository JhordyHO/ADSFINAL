@extends('template.app')
@section('content')
    <div class="">
        <div class="page-title">
            <div class="title_left">
                <h3>Consultar Mobiliario xxxx</h3>
            </div>
        </div>
        <div class="clearfix"></div>
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                    <div class="x_title">

                        <ul class="nav navbar-right panel_toolbox">
                            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                            </li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                                <ul class="dropdown-menu" role="menu">
                                    <li><a href="#">Settings 1</a>
                                    </li>
                                    <li><a href="#">Settings 2</a>
                                    </li>
                                </ul>
                            </li>
                            <li><a class="close-link"><i class="fa fa-close"></i></a>
                            </li>
                        </ul>
                        <div class="clearfix"></div>
                    </div>
                    <!--end modal -->
                    <div class="x_content">
                        <h1 class="text-muted font-13 m-b-30">
                            Lista de Mobiliarios
                        </h1>
                        <br>
                        <div class="conTable"></div>
                    </div>
                    <!-- end main -->

                </div>
            </div>
        </div>
    </div>

    <div class="modal fade bs-example-modal-lg18" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">

                <div class="modal-header bg-blue">
                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">x</span>
                    </button>
                    <h4 class="modal-title" id="myModalLabel">Calificar</h4>
                </div>
                <div class="modal-body">
                    <form method="post"  class="form-horizontal form-label-left" >
                        <div class="item form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Fecha<span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <input id="fechacon" class="form-control col-md-7 col-xs-12" data-validate-length-range="6" data-validate-words="2" name="name" selected disabled type="text" >
                                            </div>
                                        </div>
                                        <div class="item form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Cantidad<span class="required">*</span>
                                            </label>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <input id="cantidadcon" class="form-control col-md-7 col-xs-12" data-validate-length-range="6" data-validate-words="2" name="name" required="required" type="text">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Estado</label>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <select id="estadocon" name="name" class="form-control">
                                                    <option>Eliga una Opcion</option>
                                                    <option value="B">Bueno</option>
                                                    <option value="R">Regular</option>
                                                    <option value="M">Malo</option>
                                                </select>

                                            </div>
                                        </div>

                                             <div class="item form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Descripcion<span class="required">*</span>
                                            </label>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                               <textarea id="descripcioncon" required="required" type="text" name="name"  ></textarea>

                                            </div>
                                        </div>
                                               <div class="modal-footer">
                                                    <input type="hidden" id="idMobiliariocon" name="op">
                                                    <input type="hidden" id="idPersonacon" name="op">
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                                                    <input type="button" id="registrarcon" value="registrar" class="btn btn-primary">
                                </div>
                                    </form>
                                            </div>
                                </div>

                        </div>
                    </div>
                     @endsection