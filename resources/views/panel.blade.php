<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Bootstrap Material Admin by Bootstrapious.com</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="robots" content="all,follow">
    <!-- Bootstrap CSS-->
    <link rel="stylesheet" href="/vendor/bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome CSS-->
    <link rel="stylesheet" href="/vendor/font-awesome/css/font-awesome.min.css">
    <!-- Fontastic Custom icon font-->
    <link rel="stylesheet" href="/css/fontastic.css">
    <!-- Google fonts - Poppins -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,700">
    <!-- theme stylesheet-->
    <link rel="stylesheet" href="/css/style.default.css" id="theme-stylesheet">
    <!-- Custom stylesheet - for your changes-->
    <link rel="stylesheet" href="/css/custom.css">
    <!-- Favicon-->
    <link rel="shortcut icon" href="/img/favicon.ico">
    <!-- Tweaks for older IEs--><!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->

</head>
<body>
<div class="page">
    <!-- Main Navbar-->
    <header class="header">
        <nav class="navbar">
            <!-- Search Box-->
            <div class="search-box">
                <button class="dismiss"><i class="icon-close"></i></button>
                <form id="searchForm" action="#" role="search">
                    <input type="search" placeholder="What are you looking for..." class="form-control">
                </form>
            </div>
            <div class="container-fluid">
                <div class="navbar-holder d-flex align-items-center justify-content-between">
                    <!-- Navbar Header-->
                    <div class="navbar-header">
                        <!-- Navbar Brand --><a href="index.html" class="navbar-brand d-none d-sm-inline-block">
                            <div class="brand-text d-none d-lg-inline-block"><span>Bootstrap </span><strong>Dashboard</strong></div>
                            <div class="brand-text d-none d-sm-inline-block d-lg-none"><strong>BD</strong></div></a>
                        <!-- Toggle Button--><a id="toggle-btn" href="#" class="menu-btn active"><span></span><span></span><span></span></a>
                    </div>
                    <!-- Navbar Menu -->
                    <ul class="nav-menu list-unstyled d-flex flex-md-row align-items-md-center">
                        <!-- Search-->
                        <li class="nav-item d-flex align-items-center"><a id="search" href="#"><i class="icon-search"></i></a></li>
                        <!-- Notifications-->
                        <li class="nav-item dropdown"> <a id="notifications" rel="nofollow" data-target="#" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link"><i class="fa fa-bell-o"></i><span class="badge bg-red badge-corner">12</span></a>
                            <ul aria-labelledby="notifications" class="dropdown-menu">
                                <li><a rel="nofollow" href="#" class="dropdown-item">
                                        <div class="notification">
                                            <div class="notification-content"><i class="fa fa-envelope bg-green"></i>You have 6 new messages </div>
                                            <div class="notification-time"><small>4 minutes ago</small></div>
                                        </div></a></li>
                                <li><a rel="nofollow" href="#" class="dropdown-item">
                                        <div class="notification">
                                            <div class="notification-content"><i class="fa fa-twitter bg-blue"></i>You have 2 followers</div>
                                            <div class="notification-time"><small>4 minutes ago</small></div>
                                        </div></a></li>
                                <li><a rel="nofollow" href="#" class="dropdown-item">
                                        <div class="notification">
                                            <div class="notification-content"><i class="fa fa-upload bg-orange"></i>Server Rebooted</div>
                                            <div class="notification-time"><small>4 minutes ago</small></div>
                                        </div></a></li>
                                <li><a rel="nofollow" href="#" class="dropdown-item">
                                        <div class="notification">
                                            <div class="notification-content"><i class="fa fa-twitter bg-blue"></i>You have 2 followers</div>
                                            <div class="notification-time"><small>10 minutes ago</small></div>
                                        </div></a></li>
                                <li><a rel="nofollow" href="#" class="dropdown-item all-notifications text-center"> <strong>view all notifications                                            </strong></a></li>
                            </ul>
                        </li>
                        <!-- Messages                        -->
                        <li class="nav-item dropdown"> <a id="messages" rel="nofollow" data-target="#" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link"><i class="fa fa-envelope-o"></i><span class="badge bg-orange badge-corner">10</span></a>
                            <ul aria-labelledby="notifications" class="dropdown-menu">
                                <li><a rel="nofollow" href="#" class="dropdown-item d-flex">
                                        <div class="msg-profile"> <img src="img/avatar-1.jpg" alt="..." class="img-fluid rounded-circle"></div>
                                        <div class="msg-body">
                                            <h3 class="h5">Jason Doe</h3><span>Sent You Message</span>
                                        </div></a></li>
                                <li><a rel="nofollow" href="#" class="dropdown-item d-flex">
                                        <div class="msg-profile"> <img src="img/avatar-2.jpg" alt="..." class="img-fluid rounded-circle"></div>
                                        <div class="msg-body">
                                            <h3 class="h5">Frank Williams</h3><span>Sent You Message</span>
                                        </div></a></li>
                                <li><a rel="nofollow" href="#" class="dropdown-item d-flex">
                                        <div class="msg-profile"> <img src="img/avatar-3.jpg" alt="..." class="img-fluid rounded-circle"></div>
                                        <div class="msg-body">
                                            <h3 class="h5">Ashley Wood</h3><span>Sent You Message</span>
                                        </div></a></li>
                                <li><a rel="nofollow" href="#" class="dropdown-item all-notifications text-center"> <strong>Read all messages   </strong></a></li>
                            </ul>
                        </li>
                        <!-- Languages dropdown    -->
                        <li class="nav-item dropdown"><a id="languages" rel="nofollow" data-target="#" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link language dropdown-toggle"><img src="img/flags/16/GB.png" alt="English"><span class="d-none d-sm-inline-block">English</span></a>
                            <ul aria-labelledby="languages" class="dropdown-menu">
                                <li><a rel="nofollow" href="#" class="dropdown-item"> <img src="img/flags/16/DE.png" alt="English" class="mr-2">German</a></li>
                                <li><a rel="nofollow" href="#" class="dropdown-item"> <img src="img/flags/16/FR.png" alt="English" class="mr-2">French                                         </a></li>
                            </ul>
                        </li>
                        <!-- Logout    -->
                        <li class="nav-item"><a href="/cerrar" class="nav-link logout"> <span class="d-none d-sm-inline">Cerrar</span><i class="fa fa-sign-out"></i></a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <div class="page-content d-flex align-items-stretch">
        <!-- Side Navbar -->
        <nav class="side-navbar">
            <!-- Sidebar Header-->
            <div class="sidebar-header d-flex align-items-center">
                <div class="avatar"><img src="img/avatar-1.jpg" alt="..." class="img-fluid rounded-circle"></div>
                <div class="title">
                    <h1 class="h4">Mark Stephen</h1>
                    <p>Web Designer</p>
                </div>
            </div>
            <!-- Sidebar Navidation Menus--><span class="heading">Main</span>
            <ul class="list-unstyled">
                <li class="active"><a href="/"> <i class="icon-home"></i>Inicio </a></li>
                @if($users->rol == 1)
                    <li><a href="javascript:void(0);" onclick="$('#registerUsers').css('display','none');$('#listUsers').css('display','none');$('#reporte').css('display','none');$('#registrarVehiculo').css('display','block');$('#registerParqueo').css('display','block');"> <i class="icon-form"></i>Gestionar Parqueo</a></li>
                @else
                    <li><a href="javascript:void(0);" onclick="$('#registerUsers').css('display','block');$('#listUsers').css('display','block');$('#reporte').css('display','none');$('#registrarVehiculo').css('display','none');$('#registerParqueo').css('display','none');"> <i class="icon-form"></i>Gestionar Usuario</a></li>
                @endif
                <li><a href="javascript:void(0);" onclick="$('#registerUsers').css('display','none');$('#listUsers').css('display','none');$('#reporte').css('display','block');$('#registrarVehiculo').css('display','none');$('#registerParqueo').css('display','none');"> <i class="icon-page"></i>Reportes</a></li>
            </ul>
        </nav>
        <div class="content-inner">
            <!-- Page Header-->
            <header class="page-header">
                <div class="container-fluid">
                    <h2 class="no-margin-bottom">Dashboard</h2>
                </div>
            </header>
            <!-- Dashboard Counts Section-->

            <section class="forms">
                <div class="container-fluid">
                    <div class="row">
                        <!-- Basic Form-->
                        <div class="col-lg-5" id="registerUsers" style="display: none">
                            <div class="card" style="">
                                <div class="card-close">
                                    <div class="dropdown">
                                        <button type="button" id="closeCard1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="dropdown-toggle"><i class="fa fa-ellipsis-v"></i></button>
                                        <div aria-labelledby="closeCard1" class="dropdown-menu dropdown-menu-right has-shadow"><a href="#" class="dropdown-item remove"> <i class="fa fa-times"></i>Close</a><a href="#" class="dropdown-item edit"> <i class="fa fa-gear"></i>Edit</a></div>
                                    </div>
                                </div>
                                <div class="card-header d-flex align-items-center">
                                    <h3 class="h4">Gestionar De Usuario</h3>
                                </div>

                                <div class="card-body">
                                    <p>Registrar Usuario</p>
                                    <form id="formUsers">
                                        <div class="form-group">
                                            <label class="form-control-label">Username</label>
                                            <input type="hidden" id="idUsers">
                                            <input type="text" id="username" placeholder="Usuario" class="form-control" required="">
                                        </div>

                                        <div class="form-group">
                                            <label class="form-control-label">Contraseña </label>
                                            <input type="password" id="password" placeholder="Contraseña" class="form-control" required="">
                                        </div>

                                        <div class="form-group">
                                            <label class="form-control-label">Correo Electronico </label>
                                            <input type="email" id="email" placeholder="Correo Electronico" class="form-control" required="">
                                        </div>

                                        <div class="form-group">
                                            <label class="form-control-label">Rol</label>
                                            <select id="rol" class="form-control">
                                                <option value="1">Celador</option>
                                                <option value="2">Administrador</option>
                                            </select>
                                        </div>

                                        <div class="form-group">
                                            <input class="form-control" type="submit" value="Registrar Usuario">
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-7" id="listUsers" style="display: none">
                            <div class="card">
                                <div class="card-close">
                                    <div class="dropdown">
                                        <button type="button" id="closeCard1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="dropdown-toggle"><i class="fa fa-ellipsis-v"></i></button>
                                        <div aria-labelledby="closeCard1" class="dropdown-menu dropdown-menu-right has-shadow"><a href="#" class="dropdown-item remove"> <i class="fa fa-times"></i>Close</a><a href="#" class="dropdown-item edit"> <i class="fa fa-gear"></i>Edit</a></div>
                                    </div>
                                </div>
                                <div class="card-header d-flex align-items-center">
                                    <h3 class="h4">Gestionar De Usuario</h3>
                                </div>

                                <div class="card-body">
                                    <p>Registrar Usuario</p>
                                    <div>
                                        <table class="table">
                                            <thead>
                                            <tr>
                                                <th class="bdwT-0">Usuario</th>
                                                <th class="bdwT-0">Correo electronico</th>
                                                <th class="bdwT-0">rol</th>
                                                <th class="">Accion</th>
                                            </tr>
                                            </thead>
                                            <tbody id="tableUsers">

                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-12" id="reporte" style="display: none">
                            <div class="card">
                                <div class="card-close">
                                    <div class="dropdown">
                                        <button type="button" id="closeCard1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="dropdown-toggle"><i class="fa fa-ellipsis-v"></i></button>
                                        <div aria-labelledby="closeCard1" class="dropdown-menu dropdown-menu-right has-shadow"><a href="#" class="dropdown-item remove"> <i class="fa fa-times"></i>Close</a><a href="#" class="dropdown-item edit"> <i class="fa fa-gear"></i>Edit</a></div>
                                    </div>
                                </div>
                                <div class="card-header d-flex align-items-center">
                                    <h3 class="h4">Reporte</h3>
                                </div>

                                <div class="card-body">
                                    <p>Listar Vehiculos parqueados</p>
                                    <div>
                                        <table class="table">
                                            <thead>
                                            <tr>
                                                <th class="bdwT-0">Cedula</th>
                                                <th class="bdwT-0">Placa</th>
                                                <th class="bdwT-0">puesto</th>
                                                <th class="bdwT-0">Fecha Entrada</th>
                                                <th class="bdwT-0">Fecha Salida</th>
                                                <th class="bdwT-0">Estado</th>
                                                <th>Accion</th>
                                            </tr>
                                            </thead>
                                            <tbody id="tableReporte">
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-6" id="registerParqueo" style="display: none">
                            <div class="card" style="">
                                <div class="card-close">
                                    <div class="dropdown">
                                        <button type="button" id="closeCard1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="dropdown-toggle"><i class="fa fa-ellipsis-v"></i></button>
                                        <div aria-labelledby="closeCard1" class="dropdown-menu dropdown-menu-right has-shadow"><a href="#" class="dropdown-item remove"> <i class="fa fa-times"></i>Close</a><a href="#" class="dropdown-item edit"> <i class="fa fa-gear"></i>Edit</a></div>
                                    </div>
                                </div>
                                <div class="card-header d-flex align-items-center">
                                    <h3 class="h4">Registrar Persona</h3>
                                </div>
                                <div class="card-body">
                                    <p>Registrar Persona</p>
                                    <form id="formPersons">
                                        <div class="form-group">
                                            <label class="form-control-label">Cedula</label>
                                            <input type="number" id="cedula" placeholder="Cedula" class="form-control" required="">
                                        </div>

                                        <div class="form-group">
                                            <label class="form-control-label">Nombre </label>
                                            <input type="text" id="nombre" placeholder="Nombre" class="form-control" required="">
                                        </div>

                                        <div class="form-group">
                                            <input id="btnRegistrarPersons" class="form-control" type="submit" value="Registrar Usuario">
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>


                        <div class="col-lg-6" id="registrarVehiculo" style="display: none">
                            <div class="card">
                                <div class="card-close">
                                    <div class="dropdown">
                                        <button type="button" id="closeCard1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="dropdown-toggle"><i class="fa fa-ellipsis-v"></i></button>
                                        <div aria-labelledby="closeCard1" class="dropdown-menu dropdown-menu-right has-shadow"><a href="#" class="dropdown-item remove"> <i class="fa fa-times"></i>Close</a><a href="#" class="dropdown-item edit"> <i class="fa fa-gear"></i>Edit</a></div>
                                    </div>
                                </div>
                                <div class="card-header d-flex align-items-center">
                                    <h3 class="h4">Registrar Vehiculo</h3>
                                </div>
                                <div class="card-body">
                                    <p>Registrar Vehiculo en el parqueadero</p>
                                    <form id="formVehiculo">

                                        <div class="form-group">
                                            <label class="form-control-label">Placa</label>
                                            <input type="hidden" id="idPersona">
                                            <input type="text" id="placa" placeholder="Placa Vehiculo" class="form-control" required="">
                                        </div>

                                        <div class="form-group">
                                            <label class="form-control-label">Marca</label>
                                            <input type="text" id="marca" placeholder="Marca Vehiculo" class="form-control" required="">
                                        </div>

                                        <div class="form-group">
                                            <label class="form-control-label">Modelo</label>
                                            <input type="text" id="modelo" placeholder="Modelo Vehiculo" class="form-control" required="">
                                        </div>

                                        <div class="form-group">
                                            <label class="form-control-label">Color </label>
                                            <input type="text" id="color" placeholder="Color Vehiculo" class="form-control" required="">
                                        </div>

                                        <div class="form-group">
                                            <input class="form-control" type="submit" value="Registrar Vehiculo">
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </section>
            <!-- Page Footer-->
            <footer class="main-footer">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-sm-6">
                            <p>Your company &copy; 2017-2019</p>
                        </div>
                        <div class="col-sm-6 text-right">
                            <p>Design by <a href="https://bootstrapious.com/admin-templates" class="external">Bootstrapious</a></p>
                            <!-- Please do not remove the backlink to us unless you support further theme's development at https://bootstrapious.com/donate. It is part of the license conditions. Thank you for understanding :)-->
                        </div>
                    </div>
                </div>
            </footer>
        </div>
    </div>
</div>
<!-- JavaScript files-->
<script src="/vendor/jquery/jquery.min.js"></script>
<script src="/vendor/popper.js/umd/popper.min.js"> </script>
<script src="/vendor/bootstrap/js/bootstrap.min.js"></script>
<script src="/vendor/jquery.cookie/jquery.cookie.js"> </script>
<script src="/vendor/chart.js/Chart.min.js"></script>
<script src="/vendor/jquery-validation/jquery.validate.min.js"></script>
<script src="/js/charts-home.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js"></script>
<!-- Main File-->
<script src="/js/front.js"></script>
<script src="/js/custom.js"></script>
<script src="/js/notify.min.js"></script>

<script>

    var url = '{{url('')}}';
    var csrf_token = '{{csrf_token()}}';

    $(document).ready(function () {
        loaderU();
        loaderReporte();
    });


    function loaderU() {
        post(url+"/gestionUsers/4",{},"POST",csrf_token).then(
            data => {
                loaderUsers(data);
            }
        );
    }

    function  loaderUsers(data) {
        var string = "";
        for(var i in data){
            string += "<tr>";
            string += "<td>"+data[i].username+"</td>";
            string += "<td>"+data[i].email+"</td>";
            if(data[i].rol == 1){
                string += "<td>Celador</td>";
            }else{
                string += "<td>Admin</td>";
            }
            string += "<td><a class='btn-info btn-sm' href='javascript:void(0);' onclick='editarUsers("+JSON.stringify(data[i])+")'>Editar</a>||<a href='javascript:void(0);' class='btn-danger btn-sm' onclick='eliminarUsers("+data[i].id+")'>Eliminar</a></td>";
            string += "</tr>";
        }
        $("#tableUsers").html(string);
    }

    function editarUsers(data) {
        $("#username").val(data.username);
        $("#email").val(data.email);
        $("#password").val(data.password);
        $("#idUsers").val(data.id);
    }

    function eliminarUsers(id) {
        if(!confirm("Desea continuar con la operacion?")){
            return false;
        }
        var obj = new Object();
        obj.id = id;
        post(url+"/gestionUsers/3",obj,"POST",csrf_token).then(
            data => {
                $.notify("Usuario elimado con exito","success");
                loaderU();
            }
        );
    }


    $("#formUsers").on("submit",function (form) {
        form.preventDefault();
        var obj = new Object();

        if(!confirm("Desea completar la transacion?")){
            return false;
        }
        obj.username = $("#username").val();
        obj.password = $("#password").val();
        obj.email = $("#email").val();
        obj.rol = $("#rol").val();

        var uri = "";
        if($("#idUsers").val().length>0){
            obj.id = $("#idUsers").val();
            uri = url+"/gestionUsers/2";
        }else{
            uri = url+"/gestionUsers/1";
        }

        post(uri,obj,"POST",csrf_token).then(
            data => {
                if(!data){
                    $.notify("Error al crear usuario o este ya existe");
                }else{
                    $.notify("Usuario Registrado","success");
                    loaderU();
                }
            }
        );
    });



    function dia_semana(fecha){
        fecha=fecha.split('/');
        if(fecha.length!=3){
            return null;
        }
        //Array para calcular día de la semana de un año regular.
        var regular =[0,3,3,6,1,4,6,2,5,0,3,5];
        //Array para calcular día de la semana de un año bisiesto.
        var bisiesto=[0,3,4,0,2,5,0,3,6,1,4,6];
        //Array para hacer la traducción de resultado en día de la semana.
        var semana=['Domingo', 'Lunes', 'Martes', 'Miércoles', 'Jueves', 'Viernes', 'Sábado'];
        //Día especificado en la fecha recibida.
        var dia=fecha[0];
        //Módulo acumulado del mes especificado en la fecha recibida.
        var mes=fecha[1]-1;
        //Año especificado por la fecha recibida.
        var anno=fecha[2];
        //Comparación para saber si el año recibido es bisiesto.
        if((anno % 4 == 0) && !(anno % 100 == 0 && anno % 400 != 0))
            mes=bisiesto[mes];
        else
            mes=regular[mes];
        //Se retorna el resultado del calculo del día de la semana.
        return semana[Math.ceil(Math.ceil(Math.ceil((anno-1)%7)+Math.ceil((Math.floor((anno-1)/4)-Math.floor((3*(Math.floor((anno-1)/100)+1))/4))%7)+mes+dia%7)%7)];
    }



    $("#cedula").keyup(function(){
        if($("#cedula").val().length==8 || $("#cedula").val().length==10){
            var obj = new Object();
            obj.cedula = $("#cedula").val();
            post(url+"/gestionParking/4",obj,"POST",csrf_token).then(
              data => {
                  if(data.id !== undefined){
                      $("#idPersona").val(data.id);
                      $("#nombre").val(data.nombre);
                      $("#btnRegistrarPersons").prop("disabled",true);
                  }else{
                      $("#idPersona").val("");
                      $("#nombre").val("");
                      $("#btnRegistrarPersons").prop("disabled",false);
                  }
              }
            );
        }
    });


    $("#formPersons").on("submit",function (form) {
        form.preventDefault();

        if(mensaje()){
            var obj = new Object();
            obj.cedula = $("#cedula").val();
            obj.nombre = $("#nombre").val();
            post(url+"/gestionParking/5",obj,"POST",csrf_token).then(
                data => {
                    $("#idPersona").val(data);
                    $.notify("Persona registrada con exito","success");
                }
            );
        }
    });


    $("#formVehiculo").on("submit",function (form) {
       form.preventDefault();

       if($("#idPersona").val().length<1){
           $.notify("Por favor debes registrar o selecionar una persona","error");
           return false;
       }
       var obj  = new Object();
       obj.placa = $("#placa").val();
       obj.marca = $("#marca").val();
       obj.modelo = $("#modelo").val();
       obj.color = $("#color").val();
       obj.idPersona = $("#idPersona").val();
        if(mensaje()){
            post(url+"/gestionParking/1",obj,"POST",csrf_token).then(
                data => {
                    if(!data){
                        $.notify("El vehiculo se encuentra parqueado","warnig")
                    }else if(data == -1){
                        $.notify("No hay espacio para parquear el vehiculo","warning");
                    }else{
                        $.notify("Vehiculo Registrado","success");
                        loaderReporte();
                    }
                }
            );
        }
    });


    function loaderReporte(){
        post(url+"/gestionParking/3",{},"POST",csrf_token).then(data=>{
            var string = "";
            for(var i in data){
                string += "<tr>";
                string += "<td>"+data[i].cedula+"</td>";
                string += "<td>"+data[i].placa+"</td>";
                string += "<td>"+data[i].puesto+"</td>";
                string += "<td>"+data[i].created_at+"</td>";
                string += "<td>"+data[i].updated_at+"</td>";
                if(data[i].estado == 1){
                    string += "<td>Parqueado</td>";
                    string += "<td><a href='javascript:void(0);' onclick='salidarVehiculo("+data[i].id+")'>Salida vehiculo</a></td>";
                }else{
                    string += "<td>No Parqueado</td>";
                    string += "<td><a id=btn href='javascript:void(0);' onclick='warning()'>Vehiculo No parqueado</a></td>";
                }
                string += "</tr>";
            }
            $("#tableReporte").html(string);
        });
    }

    function warning() {
        $.notify("Vehiculo no se encuentra parqueado en este momento","warning")
    }

    function salidarVehiculo(id) {
        if(mensaje()){
            var obj = new Object();
            obj.id = id;
            post(url+"/gestionParking/2",obj,"POST",csrf_token).then(data=>{
                loaderReporte();
                $.notify("Vehiculo Entregado","success");
            });
        }
    }

    function mensaje() {
        if(confirm("Desea realizar esta operacion?")){
            return true;
        }
    }
</script>

</body>
</html>