@extends('template.app')
@section('content')
    <div class="">
        <div class="page-title">
            <div class="title_left">
                <h3>Resgistrar Departamento xxx</h3>
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
                    <button type="button" class="btn btn-success" id="addepa"  data-toggle="modal" data-target=".bs-example-modal-lg"><i class="fa fa-edit m-right-xs"></i>Agregar</button>
                    <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-hidden="true">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">

                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
                                    </button>
                                    <h4 class="modal-title" id="myModalLabel">Agregar Nuevo Departamento</h4>
                                </div>
                                <div class="modal-body">
                                    <form class="insert" novalidate>
                                        <div class="item form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Nombre<span class="required">*</span>
                                            </label>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <input id="nombre_depar" class="form-control col-md-7 col-xs-12" data-validate-length-range="6" data-validate-words="2" name="nombre_depar" required="required" type="text">
                                            </div>
                                        </div>
                                        <br>
                                        <br>
                                        <br>
                                        <div class="modal-footer">
                                            <button   class="cancelar btn btn-default" data-dismiss="modal">Cancelar</button>
                                            <button  class="submitp btn btn-primary">Guardar</button>
                                        </div>
                                    </form>
                                </div>


                            </div>
                        </div>
                    </div>

                    <!--end modal -->
                    <div class="x_content">
                        <h1 class="text-muted font-13 m-b-30">
                            Lista de Departamentos
                        </h1>
                        <br>
                        <table id="datatable" class="table table-striped table-bordered">
                            <thead>
                            <tr>
                                <th data-class="expand"><i class="fa fa-fw fa-user text-muted hidden-md hidden-sm hidden-xs"></i> Nombre</th>
                                <td>Editar</td>
                                <td>Eliminar</td>
                            </tr>
                            </thead>


                            <tbody>
                            <c:forEach var="departamento" begin="0" items="${lista2}">
                                <tr>

                                    <td><c:out value="${departamento.nombre_depar}"></c:out></td>
                                    <td><a class="btn btn-info btn-xs" data-toggle="modal"  href="#myModal1_${departamento.idDepartamento}" ><i class="fa fa-pencil"></i> Editar </a></td>
                                    <td><a class="btn btn-danger btn-xs"  href="#myModal_${departamento.idDepartamento}" role="button" data-toggle="modal" ><i class="fa fa-trash-o"></i> Eliminar </a></td>
                                </tr>
                                <!--  eliminar -->
                                <div id="myModal_${departamento.idDepartamento}" class="modal fade">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                                <h4 class="modal-title">Confirmar Eliminacion..</h4>
                                            </div>

                                            <div class="modal-body">
                                                <p>Esta Seguro de Eliminar el Departamento..? </p>
                                            </div>
                                            <div class="modal-footer">

                                                <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                                                <a class=" btn btn-danger" href="${pageContext.request.contextPath}/deldepa?idDepartamento=${departamento.idDepartamento}" >Eliminar</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- end  eliminar -->
                                <!-- editar -->
                                <div class="modal "  id="myModal1_${departamento.idDepartamento}" tabindex="-1" role="dialog" aria-hidden="true">
                                    <div class="modal-dialog modal-lg">
                                        <div class="modal-content">

                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
                                                </button>
                                                <h4 class="modal-title" id="myModalLabel">Editar Categoria</h4>
                                            </div>
                                            <div class="modal-body">
                                                <form   method="post" action="updatedepa"  >
                                                    <div class="item form-group">
                                                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="nombre_Categ">Nombre<span >*</span>
                                                        </label>
                                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                                            <input id="nombre_Categ" class="form-control col-md-7 col-xs-12"  name="nombre_depar" value="<c:out value='${departamento.nombre_depar}'/>"  type="text"  >
                                                            <input type="hidden" name="idDepartamento" value="<c:out value='${departamento.idDepartamento}'/>"  >
                                                        </div>
                                                    </div>
                                                    <br>
                                                    <br>
                                                    <br>
                                                    <div class="modal-footer">
                                                        <input type="hidden" value="" name="op">
                                                        <button class=" btn btn-primary "  type="submit" >Guardar</button>
                                                        <button class="cancelar btn btn-default ">Cancelar</button>
                                                    </div>
                                                </form>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <!-- end  editar -->
                            </c:forEach>
                            </tbody>
                        </table>
                    </div>
                    <!-- end main -->
                </div>
            </div>
        </div>
    </div>
@endsection