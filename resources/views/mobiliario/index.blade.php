@extends('template.app')
@section('content')
    <div class="">
        <div class="page-title">
            <div class="title_left">
                <h3>Resgistrar Mobiliarios</h3>
            </div>
            <div class="title_right">
                <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                    <div class="input-group alignright">
                        <button id="info2" type="button" class="btn btn-round btn-info" style="border: 1px solid #d0d0d0;"><i class="fa fa-exclamation-circle"></i>Información!!</button>
                    </div>
                </div>
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
                                    <h4 class="modal-title" id="myModalLabel">Agregar Nuevo Mobiliario</h4>
                                </div>
                                <div class="modal-body">
                                    <form method="post" class="form-horizontal form-label-left" action="mobiliario/create">
                                        {{ csrf_field() }}
                                        <input type="hidden" name="idPersona" value="{{auth()->user()->Persona->idPersona}}"/>
                                        <div class="form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Categoría</label>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <select id="selecionar" class="form-control" name="idCategoria">
                                                    <option value="">Escoje una Opcion</option>
                                                   @foreach($Cate as $cat)
                                                    <option value="{{$cat->idCategoria}}">{{$cat->nombre_Categ}}</option>
                                                   @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Departamento</label>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <select  id="departamento" class="form-control" name="idDepartamento">
                                                    <option value="">Escoja una Opcion</option>
                                                    @foreach($Depa as $dep)
                                                        <option value="{{$dep->idDepartamento}}">{{$dep->nombre_depar}}</option>
                                                    @endforeach

                                                </select>
                                            </div>
                                        </div>
                                        <div class="item form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Nombre<span class="required">*</span>
                                            </label>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <input id="nombreMob" class="form-control col-md-7 col-xs-12" data-validate-length-range="6" data-validate-words="2" name="nombreMob" style="text-transform:uppercase;">
                                                <!--    <input id="departamento" class="form-control col-md-7 col-xs-12" data-validate-length-range="6" data-validate-words="2" value="<c:out value="${DEPARTAMENTO_ID}"/>" required="required" type="hidden"> --->
                                            </div>
                                        </div>
                                        <div class="item form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Marca<span class="required">*</span>
                                            </label>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <input id="marcaMob" class="form-control col-md-7 col-xs-12" data-validate-length-range="6" data-validate-words="2" name="marcaMob" style="text-transform:uppercase;">
                                            </div>
                                        </div>
                                        <div class="item form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Modelo / Serie<span class="required">*</span>
                                            </label>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <input id="serieMob" class="form-control col-md-7 col-xs-12" data-validate-length-range="6" data-validate-words="2" name="serieMob" style="text-transform:uppercase;">
                                            </div>
                                        </div>
                                        <div class="item form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Cantidad<span class="required">*</span>
                                            </label>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <input id="cantiMob" class="form-control col-md-7 col-xs-12" data-validate-length-range="6" data-validate-words="2" name="cantiMob" required="required" type="number">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Estado</label>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <select  id="selecionar3" class="form-control" name="estado">
                                                    <option value="">Escoja una Opcion</option>
                                                    <option value="Bueno">Bueno</option>
                                                    <option value="Regular">Regular</option>
                                                    <option value="Defectuoso">Defectuoso</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="item form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Fecha_Registro<span class="required">*</span>
                                            </label>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <input id="fechaMob" class="form-control col-md-7 col-xs-12" data-validate-length-range="6" data-validate-words="2" name="fechaMob" selected  type="text" value="{{date('d/m/Y')}}">
                                            </div>
                                        </div>

                                        <div class="item form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Comentario<span class="required">*</span>
                                            </label>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <input id="comentaMob" class="form-control col-md-7 col-xs-12" data-validate-length-range="6" data-validate-words="2" name="comentaMob" style="text-transform:uppercase;">
                                            </div>
                                        </div>
                                        <div class="item form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name"><span class="required"></span>
                                            </label>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <button type="button" class="btn btn-info addPart" data-toggle="modal" data-target=".ModalPartes"><i class="fa fa-plus m-right-xs"></i>Agregar Partes</button>
                                                <hr>
                                                <div id="PartsMobi">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="ln_solid"></div>
                                        <div class="form-group">
                                            <div class="col-md-6 col-md-offset-3">
                                                <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                                                <input type="submit" id="btnRegistro" value="Registrar" class="btn btn-primary">
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="modal fade ModalPartes" tabindex="-1" role="dialog" aria-hidden="true">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">

                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
                                    </button>
                                    <h4 class="modal-title" id="myModalLabel">Agregar Parte <strong id="txtMob"></strong></h4>
                                </div>
                                <div class="modal-body">
                                    <form method="post" class="form-part form-horizontal form-label-left" novalidate>
                                        <div class="item form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Nombre<span class="required">*</span>
                                            </label>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <input id="nombreMob" class="form-control col-md-7 col-xs-12" data-validate-length-range="6" data-validate-words="2" name="name" style="text-transform:uppercase;">
                                                <!--    <input id="departamento" class="form-control col-md-7 col-xs-12" data-validate-length-range="6" data-validate-words="2" value="<c:out value="${DEPARTAMENTO_ID}"/>" required="required" type="hidden"> --->
                                            </div>
                                        </div>
                                        <div class="item form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Marca<span class="required">*</span>
                                            </label>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <input id="marcaMob" class="form-control col-md-7 col-xs-12" data-validate-length-range="6" data-validate-words="2" name="name" style="text-transform:uppercase;">
                                            </div>
                                        </div>
                                        <div class="item form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Modelo / Serie<span class="required">*</span>
                                            </label>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <input id="serieMob" class="form-control col-md-7 col-xs-12" data-validate-length-range="6" data-validate-words="2" name="name" style="text-transform:uppercase;">
                                            </div>
                                        </div>
                                        <div class="item form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Cantidad<span class="required">*</span>
                                            </label>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <input id="cantiMob" class="form-control col-md-7 col-xs-12" data-validate-length-range="6" data-validate-words="2" name="name" required="required" type="number">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Estado</label>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <select name="estado"  id="selecionar3" class="form-control">
                                                    <option value="">Escoja una Opcion</option>
                                                    <option value="Bueno">Bueno</option>
                                                    <option value="Regular">Regular</option>
                                                    <option value="Defectuoso">Defectuoso</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="item form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Comentario<span class="required">*</span>
                                            </label>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <input id="comentaMob" class="form-control col-md-7 col-xs-12" data-validate-length-range="6" data-validate-words="2" name="name" style="text-transform:uppercase;">
                                            </div>
                                        </div>

                                        <div class="ln_solid"></div>
                                        <div class="form-group">
                                            <div class="col-md-6 col-md-offset-3">
                                                <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                                                <input type="button" id="btnAñadir" value="Añadir" class="btn btn-success">
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="x_content">
                        <h1 class="text-muted font-13 m-b-30">
                            Lista de Mobiliarios
                        </h1>
                        <table id="datatable" class=" table table-striped table-bordered">
                            <thead>
                            <tr>
                                <th><p>Nombre Mobiliario</p></th>
                                <th><p>Marca</p></th>
                                <th><p>Modelo/Serie</p></th>
                                <th><p>Cantidad</p></th>
                                <th><p>Estado</p></th>
                                <th><p>Fecha registro</p></th>
                                <th><p>Comentario</p></th>
                                <th><p>Departamento</p></th>
                                <th><p>Categoria</p></th>
                                <th><p>Acciones</p></th>
                                </tr>
                            </thead>
                            <tbody class="mbody">
                            @foreach($Mobi as $mob)
                                <tr>
                                    <td>{{$mob->nombre_Mob}}</td>
                                    <td>{{$mob->marca_Mob}}</td>
                                    <td>{{$mob->serie_Mob}}</td>
                                    <td>{{$mob->cantidad}}</td>
                                    <td>{{$mob->estado}}</td>
                                    <td>{{$mob->fechaReg_Mob}}</td>
                                    <td>{{$mob->comentario}}</td>
                                    <td>{{$mob->departamento->nombre_depar}}</td>
                                    <td>{{$mob->categoria->nombre_Categ}}</td>
                                    <td><a id='{{$mob->idMobiliario}}' onclick="getData(this.id);" class="btn btn-primary btn-xs"><i class="fa fa-folder"></i> Ver</a>
                                    <a href="#" class="btn btn-info btn-xs"><i class="fa fa-pencil"></i> Editar </a>
                                    <a href="#" class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i> Eliminar </a></td>

                                </tr>
                            @endforeach
                            </tbody>
                            </table>
                    </div>
                    <!-- fin de la lista principal -->
                </div>
            </div>
        </div>
    </div>
@endsection
@section('script')
    <script>
        $(document).ready(function () {

        });

        $('.addPart').click(function(){
            $('#txtMob').append($('#nombreMob').val()+' '+$('#serieMob').val())
        });
        $('#btnAñadir').click(function(e){
            e.preventDefault();
            var delimit = ':^*:';
            var data = $('.form-part').serializeArray();
            //Nombre*  Marca* ModeloSerie*  Cantidad*  Estado* Comentario*
            var part= '<input type="hidden" name="part[]" value="'+data[0].value+delimit+data[1].value+delimit+data[2].value+delimit+data[3].value+delimit+data[4].value+delimit+data[5].value+'" />'
            $('.ModalPartes').modal('hide');
            $('#PartsMobi').append('<p>Parte : <strong>'+data[0].value+' '+data[1].value+' '+data[2].value+'</strong></p>');
            $('#PartsMobi').append(part);
            $('.form-part')[0].reset();

        });

    </script>
@endsection