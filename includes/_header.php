<?php
error_reporting(0);
session_start();
$actualsesion = $_SESSION['correo'];

if($actualsesion == null || $actualsesion == ''){

    echo 'acceso denegado';
    die();
}
?>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Inventario</title>


    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <link href="https://fonts.googleapis.com/css2?family=Material+Icons" rel="stylesheet">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    
    <link rel="stylesheet" href="../../css/styles.css">
    <link href="../../css/sb-admin-2.min.css" rel="stylesheet">
</head>
<body>
    
<div id="wrapper">
    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-dark sidebar sidebar-dark accordion" id="accordionSidebar">
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">
    <div class="sidebar-brand-icon rotate-n-15">
    </div>
    <div class="sidebar-brand-text mx-3">ADMIN</div>
</a>
<hr class="sidebar-divider my-0">
<li class="nav-item active">
<hr class="sidebar-divider">
<div class="sidebar-heading">
    Dashboard
</div>
    <a class="nav-link" href="index.php">
        <i class="material-icons">home</i>
        <span>Inicio</span></a>
</li>
<hr class="sidebar-divider">
<div class="sidebar-heading">
    ADMINISTRADOR
</div>

<li class="nav-item active">
    <a class="nav-link collapsed" href="articulos.php">
    <span class="material-icons">category</span>
        <span>Artículos</span>
    </a>
</li>
<li class="nav-item active">
    <a class="nav-link collapsed" href="reportes.php">
        <span class="material-icons">report</span>
        <span>Reportes</span>
    </a>
</li>
<li class="nav-item active">
    <a class="nav-link collapsed" href="extraviados.php">
        <span class="material-icons">book</span>
        <span>Extraviados</span>
    </a>
</li>
<li class="nav-item active">
    <a class="nav-link collapsed" href="producto_agregar.php">
        <span class="material-icons">download</span>
        <span>Ingresar Artículo</span>
    </a>
</li>
<hr class="sidebar-divider">
<div class="sidebar-heading">
    PERFIL
</div>
<li class="nav-item active">
    <a class="nav-link collapsed" href="usuariosindex.php">
        <span class="material-icons">people</span>
        <span>Información usuario</span>
    </a>
</li>
<li class="nav-item active">
    <a class="nav-link" href="../../includes/_sesion/cerrarSesion.php">
    <span class="material-icons">logout</span>
        <span>Salir</span></a>
        
</li>

<hr class="sidebar-divider d-none d-md-block">

<div class="text-center d-none d-md-inline">
    <button class="rounded-circle border-0"></button>
</div>
</ul>
<!-- EMPIEZA EL NAVBAR -->
       <div id="content-wrapper" class="d-flex flex-column">
        <div id="content">
                <nav class="navbar navbar-expand navbar-dark bg-dark topbar mb-4 static-top shadow">
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>
                    
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item dropdown no-arrow d-sm-none">
                            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            </a>
                        <div class="topbar-divider d-none d-sm-block"></div>
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">Bienvenido <?php echo $actualsesion?></span>
                                <span class="material-icons">account_circle</span>
                            </a>
                        </li>
                    </ul>
                </nav>


