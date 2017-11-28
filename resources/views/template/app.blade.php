<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="recursos/css/sweetalert2.css" rel="stylesheet" type="text/css"/>
    <!--<link rel="stylesheet"  type="text/css" href="https://cdn.jsdelivr.net/sweetalert2/6.2.2/sweetalert2.min.css"> -->
    <link type="text/css" href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css" rel="stylesheet">
    <!-- Bootstrap -->
    <link href="recursos/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    <!-- Font Awesome -->
    <link href="recursos/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
    <!-- NProgress -->
    <link href="recursos/vendors/nprogress/nprogress.css" rel="stylesheet" type="text/css"/>
    <!-- Animate.css -->
    <link href="recursos/vendors/animate.css/animate.min.css" rel="stylesheet" type="text/css"/>
    <!-- Custom Theme Style -->
    <link href="recursos/build/css/custom.min.css" rel="stylesheet" type="text/css"/>

    <!-- iCheck -->
    <link href="recursos/vendors/iCheck/skins/flat/green.css" rel="stylesheet">

    <!-- bootstrap-progressbar -->
    <link href="recursos/vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet">
    <!-- JQVMap -->
    <link href="recursos/vendors/jqvmap/dist/jqvmap.min.css" rel="stylesheet"/>
    <!-- bootstrap-daterangepicker -->
    <link href="recursos/vendors/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">
    <!-- Datatables -->
    <link href="recursos/vendors/datatables.net-bs/css/dataTables.bootstrap.min.css" rel="stylesheet">
    <link href="recursos/vendors/datatables.net-buttons-bs/css/buttons.bootstrap.min.css" rel="stylesheet">
    <link href="recursos/vendors/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css" rel="stylesheet">
    <link href="recursos/vendors/datatables.net-responsive-bs/css/responsive.bootstrap.min.css" rel="stylesheet">
    <link href="recursos/vendors/datatables.net-scroller-bs/css/scroller.bootstrap.min.css" rel="stylesheet">
    <!-- #FAVICONS-->
    <link rel="shortcut icon" href="recursos/img/favicon/favicon2.ico" type="image/x-icon">
    <link rel="icon" href="recursos/img/favicon/favicon2.ico" type="image/x-icon">
    <!-- bootstra    <link href="../vendors/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">
p-daterangepicker -->
    <link href="recursos/vendors/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">
    <!-- bootstrap-datetimepicker -->
    <link href="recursos/vendors/bootstrap-datetimepicker/build/css/bootstrap-datetimepicker.css" rel="stylesheet">
    <!-- Ion.RangeSlider -->
    <link href="recursos/vendors/normalize-css/normalize.css" rel="stylesheet">
    <link href="recursos/vendors/ion.rangeSlider/css/ion.rangeSlider.css" rel="stylesheet">
    <link href="recursos/vendors/ion.rangeSlider/css/ion.rangeSlider.skinFlat.css" rel="stylesheet">
    <!-- Bootstrap Colorpicker -->
    <link href="recursos/vendors/mjolnic-bootstrap-colorpicker/dist/css/bootstrap-colorpicker.min.css" rel="stylesheet">

    <link href="recursos/vendors/cropper/dist/cropper.min.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="recursos/build/css/custom.min.css" rel="stylesheet">

    <title>Institución Educativa El Buen Pastor</title>
</head>
<body onload="nobackbutton()" class="nav-md">
<div class="container body">
    <div class="main_container">
        <div class="col-md-3 left_col">
            <div class="left_col scroll-view">
                <div class="navbar nav_title" style="border: 0;">
                    <a href="principal" class="site_title"><i class="fa fa-home"></i> <span>Inventario Svep</span></a>
                </div>

                <div class="clearfix"></div>

                <!-- menu profile quick info -->
                <div class="profile clearfix">
                    <div class="profile_pic">
                        <img src="recursos/img/M.PNG" alt="..." class="img-circle profile_img">
                    </div>
                    <div class="profile_info">
                        <a href="#" style="color: white;"><i class="fa fa-circle text-success"></i></a>
                        <span>nOMBRE rOL</span>
                        <h2>aPELLIDO</h2>
                    </div>
                </div>
                <!-- /menu profile quick info -->
                <br />
                <!-- sidebar menu -->
                <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
                    <div class="menu_section">
                        <h3>General</h3>
                        <ul class="nav side-menu">
                            <li><a a href="principal"><i class="fa fa-user"></i> Perfil</a>
                                <!-- <ul class="nav child_menu">
                                   <li><a href="Rtesorera">Perfil</a></li>
                                 </ul>-->
                            </li>

                                <li><a><i class="fa fa-edit"></i> Registrar <span class="fa fa-chevron-down"></span></a>
                                    <ul class="nav child_menu">
                                        <li><a href="Rresponsable">Responsables</a></li>
                                        <li><a href="Rdepar">Departamentos</a></li>
                                        <li><a href="maper?opc=3">Mobiliarios</a></li>
                                        <li><a href="Rcate">Categorias</a></li>
                                        <li><a href="maper?opc=5">Roles</a></li>
                                    </ul>
                                </li>

                                <li><a><i class="fa fa-edit"></i> Registrar <span class="fa fa-chevron-down"></span></a>
                                    <ul class="nav child_menu">
                                        <li><a href="maper?opc=3">Mobiliarios</a></li>
                                    </ul>
                                </li>

                                <li><a><i class="fa fa-file-text-o"></i> Inventario Mobiliarios <span class="fa fa-chevron-down"></span></a>
                                    <ul class="nav child_menu">
                                        <li><a href="ConsultaMob2">Generar Inventario</a></li>
                                    </ul>
                                </li>

                                <li><a><i class="fa fa-desktop"></i> Consultar Mobiliarios <span class="fa fa-chevron-down"></span></a>
                                    <ul class="nav child_menu">
                                        <li><a href="ConsultaMob">Mobiliarios en Baja</a></li>
                                    </ul>
                                </li>

                                <li><a><i class="fa fa-file-text-o"></i> Reporte General <span class="fa fa-chevron-down"></span></a>
                                    <ul class="nav child_menu">
                                        <li><a href="reporteAdmin">Generar Reportes</a></li>
                                        <li><a href="tables_dynamic.html">Reportes Realizados</a></li>
                                    </ul>
                                </li>


                        </ul>
                    </div>
                </div>
                <!-- /sidebar menu -->

                <!-- /menu footer buttons -->
                <div class="sidebar-footer hidden-small">
                    <a data-toggle="tooltip" data-placement="top" title="Settings">
                        <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
                    </a>
                    <a data-toggle="tooltip" data-placement="top" title="FullScreen">
                        <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
                    </a>
                    <a data-toggle="tooltip" data-placement="top" title="Lock">
                        <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
                    </a>
                    <a data-toggle="tooltip" data-placement="top" title="Logout" href="login">
                        <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
                    </a>
                </div>
                <!-- /menu footer buttons -->
            </div>
        </div>
        <!-- top barra de navigation -->
        <div class="top_nav">
            <div class="nav_menu">
                <nav>
                    <div class="nav toggle">
                        <a id="menu_toggle"><i class="fa fa-bars"></i></a>
                    </div>

                    <ul class="nav navbar-nav navbar-right">
                        <li class="">
                            <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                <img src="recursos/img/M.PNG" alt="">Apellido<span class=" fa fa-angle-down"></span>
                            </a>
                            <ul class="dropdown-menu dropdown-usermenu pull-right">
                                <li>
                                    <a href="javascript:;">
                                        <span class="badge"></span>
                                        <span>Settings</span>
                                    </a>
                                </li>
                                <li><a href="javascript:;">Help</a></li>
                                <li><a href="out"><i class="fa fa-sign-out pull-right" ></i> Log Out</a></li>
                            </ul>
                        </li>

                        <li role="presentation" class="dropdown">
                            <a href="javascript:;" class="dropdown-toggle info-number" data-toggle="dropdown" aria-expanded="false">
                                <i class="fa fa-envelope-o"></i>
                                <span class="badge bg-green">6</span>
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
        <!-- page content -->
        <div class="right_col" role="main">
            @yield('content')
        </div>
        <!-- /page content -->
        <!-- footer content -->
        <footer>
            <div class="pull-right">
                Ingenieria de Sistemas Upeu © 2017 <a href="#">Svep Desing 1.0</a>
            </div>
            <div class="clearfix"></div>
        </footer>
    </div>
</div>

<script src="recursos/vendors/jquery/dist/jquery.min.js"></script>
<script src="recursos/build/js/animatescroll/animatescroll.js" type="text/javascript"></script>
<!-- Bootstrap -->
<script src="recursos/vendors/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- FastClick -->
<script src="recursos/vendors/fastclick/lib/fastclick.js"></script>
<!-- NProgress -->
<script src="recursos/vendors/nprogress/nprogress.js"></script>
<!-- Chart.js -->
<script src="recursos/vendors/Chart.js/dist/Chart.min.js"></script>
<!-- gauge.js -->
<script src="recursos/vendors/gauge.js/dist/gauge.min.js"></script>
<!-- bootstrap-progressbar -->
<script src="recursos/vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
<!-- iCheck -->
<script src="recursos/vendors/iCheck/icheck.min.js"></script>
<!-- Skycons -->
<script src="recursos/vendors/skycons/skycons.js"></script>
<!-- Flot -->
<script src="recursos/vendors/Flot/jquery.flot.js"></script>
<script src="recursos/vendors/Flot/jquery.flot.pie.js"></script>
<script src="recursos/vendors/Flot/jquery.flot.time.js"></script>
<script src="recursos/vendors/Flot/jquery.flot.stack.js"></script>
<script src="recursos/vendors/Flot/jquery.flot.resize.js"></script>
<!-- Flot plugins -->
<script src="recursos/vendors/flot.orderbars/js/jquery.flot.orderBars.js"></script>
<script src="recursos/vendors/flot-spline/js/jquery.flot.spline.min.js"></script>
<script src="recursos/vendors/flot.curvedlines/curvedLines.js"></script>
<!-- DateJS -->
<script src="recursos/vendors/DateJS/build/date.js"></script>
<!-- JQVMap -->
<script src="recursos/vendors/jqvmap/dist/jquery.vmap.js"></script>
<script src="recursos/vendors/jqvmap/dist/maps/jquery.vmap.world.js"></script>
<script src="recursos/vendors/jqvmap/examples/js/jquery.vmap.sampledata.js"></script>
<!-- bootstrap-daterangepicker -->
<script src="recursos/vendors/moment/min/moment.min.js"></script>
<script src="recursos/vendors/bootstrap-daterangepicker/daterangepicker.js"></script>

<!-- Custom Theme Scripts -->
<script src="recursos/build/js/custom.min.js"></script>
<!-- morris.js -->
<script src="recursos/vendors/raphael/raphael.min.js"></script>
<script src="recursos/vendors/morris.js/morris.min.js"></script>
<!-- bootstrap-progressbar -->
<script src="recursos/vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
<!-- bootstrap-daterangepicker -->
<!-- Datatables -->
<script src="recursos/vendors/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="recursos/vendors/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
<script src="recursos/vendors/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
<script src="recursos/vendors/datatables.net-buttons-bs/js/buttons.bootstrap.min.js"></script>
<script src="recursos/vendors/datatables.net-buttons/js/buttons.flash.min.js"></script>
<script src="recursos/vendors/datatables.net-buttons/js/buttons.html5.min.js"></script>
<script src="recursos/vendors/datatables.net-buttons/js/buttons.print.min.js"></script>
<script src="recursos/vendors/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js"></script>
<script src="recursos/vendors/datatables.net-keytable/js/dataTables.keyTable.min.js"></script>
<script src="recursos/vendors/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
<script src="recursos/vendors/datatables.net-responsive-bs/js/responsive.bootstrap.js"></script>
<script src="recursos/vendors/datatables.net-scroller/js/dataTables.scroller.min.js"></script>
<script src="recursos/vendors/jszip/dist/jszip.min.js"></script>
<script src="recursos/vendors/pdfmake/build/pdfmake.min.js"></script>
<script src="recursos/vendors/pdfmake/build/vfs_fonts.js"></script>
<script src="recursos/vendors/jQuery-Smart-Wizard/js/jquery.smartWizard.js" type="text/javascript"></script>

<!-- bootstrap-daterangepicker -->
<script src="recursos/vendors/moment/min/moment.min.js"></script>
<script src="recursos/vendors/bootstrap-daterangepicker/daterangepicker.js"></script>
<!-- bootstrap-datetimepicker -->
<script src="recursos/vendors/bootstrap-datetimepicker/build/js/bootstrap-datetimepicker.min.js"></script>
<!-- SweetAlert2 -->
<script src="recursos/js/sweetalert2.js" type="text/javascript"></script>
<!-- jquery.inputmask -->
<script src="recursos/vendors/jquery.inputmask/dist/min/jquery.inputmask.bundle.min.js" type="text/javascript"></script>
@yield('script')
</body>
</html>
