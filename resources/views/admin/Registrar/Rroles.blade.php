@extends('template.app')
@section('content')
    <div class="">
        <div class="page-title">
            <div class="title_left">
                <h3>Resgistrar Rol xxxx</h3>
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
                    <!-- main -->
                    <!-- modal -->
                    <button type="button" class="btn btn-success" data-toggle="modal" data-target=".bs-example-modal-lg"><i class="fa fa-edit m-right-xs"></i>Agregar</button>
                    <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-hidden="true">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">

                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
                                    </button>
                                    <h4 class="modal-title" id="myModalLabel">Agregar Nuevo Rol</h4>
                                </div>
                                <div class="modal-body">
                                    <form class="form-horizontal form-label-left" novalidate>
                                        <div class="item form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Nombre<span class="required">*</span>
                                            </label>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="6" data-validate-words="2" name="name" required="required" type="text">
                                            </div>
                                        </div>

                                    </form>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                                    <button type="button" class="btn btn-primary">Guardar</button>
                                </div>

                            </div>
                        </div>
                    </div>

                    <!--end modal -->
                    <div class="x_content">
                        <h1 class="text-muted font-13 m-b-30">
                            Lista de Rol
                        </h1>
                        <br>
                        <table id="datatable" class="table table-striped table-bordered">
                            <thead>
                            <tr>
                                <th data-hide="phone">ID</th>
                                <th data-class="expand"><i class="fa fa-fw fa-user text-muted hidden-md hidden-sm hidden-xs"></i> Nombre</th>
                                <th data-hide="phone">Editar</th>
                                <th data-hide="phone">Borrar</th>
                            </tr>
                            </thead>


                            <tbody>

                            <tr>
                                <td>1</td>
                                <td>Docente</td>
                                <td><button type="button" class="btn btn-success">Editar</button></td>
                                <td><button type="button" class="btn btn-danger">Eliminar</button></td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Administrador</td>
                                <td><button type="button" class="btn btn-success">Editar</button></td>
                                <td><button type="button" class="btn btn-danger">Eliminar</button></td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>Tesorera</td>
                                <td><button type="button" class="btn btn-success">Editar</button></td>
                                <td><button type="button" class="btn btn-danger">Eliminar</button></td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                    <!-- end main -->
                </div>
            </div>
        </div>
    </div>
@endsection