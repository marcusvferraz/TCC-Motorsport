<?php
  session_start();
  if(!isset($_SESSION['email'])){
      header("location: ../login.php");
  }
  ?>






<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords"
        content="wrappixel, admin dashboard, html css dashboard, web dashboard, bootstrap 5 admin, bootstrap 5, css3 dashboard, bootstrap 5 dashboard, Ample lite admin bootstrap 5 dashboard, frontend, responsive bootstrap 5 admin template, Ample admin lite dashboard bootstrap 5 dashboard template">
    <meta name="description"
        content="Ample Admin Lite is powerful and clean admin dashboard template, inpired from Bootstrap Framework">
    <meta name="robots" content="noindex,nofollow">
    <title>Admin Painel</title>
    <link rel="canonical" href="https://www.wrappixel.com/templates/ample-admin-lite/" />
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="plugins/images/favicon.png">
    <!-- Custom CSS -->
    <link href="plugins/bower_components/chartist/dist/chartist.min.css" rel="stylesheet">
    <link rel="stylesheet" href="plugins/bower_components/chartist-plugin-tooltips/dist/chartist-plugin-tooltip.css">
    <!-- Custom CSS -->
    <link href="css/style.min.css" rel="stylesheet">
</head>

<body>
    <!-- ============================================================== -->
    <div class="preloader">
        <div class="lds-ripple">
            <div class="lds-pos"></div>
            <div class="lds-pos"></div>
        </div>
    </div>
    <!-- ============================================================== -->
    <div id="main-wrapper" data-layout="vertical" data-navbarbg="skin5" data-sidebartype="full"
        data-sidebar-position="absolute" data-header-position="absolute" data-boxed-layout="full">
        <!-- ============================================================== -->
        <header class="topbar" data-navbarbg="skin5">
            <nav class="navbar top-navbar navbar-expand-md navbar-dark">
                <div class="navbar-header" data-logobg="skin6">
                    <!-- ============================================================== -->
                    <!-- Logo -->
                    <!-- ============================================================== -->
                      <a class="navbar-brand" href="adminpainel.php">
                        <!-- Logo icon -->
                        <b class="logo-icon">
                            <!-- Dark Logo icon -->
                           
                        </b>
                        <!--End Logo icon -->
                        <!-- Logo text -->
                        <span class="logo-text">
                            <!-- dark Logo text -->
                            <img src="plugins/images/logo-text.png" alt="homepage" />
                        </span>
                    </a>
             <!-- ============================================================== -->
                    <a class="nav-toggler waves-effect waves-light text-dark d-block d-md-none"
                        href="javascript:void(0)"><i class="ti-menu ti-close"></i></a>
                </div>
                <!-- ============================================================== -->
                <!-- End Logo -->
                <!-- ============================================================== -->
                <div class="navbar-collapse collapse" id="navbarSupportedContent" data-navbarbg="skin5">
                   
                    <!-- ============================================================== -->
                    <!-- Right side toggle and nav items -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav ms-auto d-flex align-items-center">
<!-- ============================================================== -->
                    </ul>
                </div>
            </nav>
        </header>
        <!-- ============================================================== -->
        <!-- End Topbar header -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <aside class="left-sidebar" data-sidebarbg="skin6">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar">
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                    <ul id="sidebarnav">
                        <!-- User Profile-->
                        <li class="sidebar-item pt-2">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="acessocadastrar.php"
                                aria-expanded="false">
                                <i class="fa fa-table" aria-hidden="true"></i>

                                <span class="hide-menu">Acessórios</span>
                            </a>
                        </li>
                         <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="marcacadastrar.php"
                                aria-expanded="false">
                                <i class="fa fa-table" aria-hidden="true"></i>
                                <span class="hide-menu">Marca</span>
                            </a>
                        </li>
                         <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="veiculocadastrar.php"
                                aria-expanded="false">
                                <i class="fa fa-font" aria-hidden="true"></i>
                                <span class="hide-menu">Veículo</span>
                            </a>
                        </li>
                       
                       
                       
                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="concecadastrar.php"
                                aria-expanded="false">
                                <i class="fa fa-globe" aria-hidden="true"></i>
                                <span class="hide-menu">Concessionária</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="corcadastrar.php"
                                aria-expanded="false">
                                <i class="fa fa-table" aria-hidden="true"></i>

                                <span class="hide-menu">Cor</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="anocadastrar.php"
                                aria-expanded="false">
                                <i class="far fa-clock" aria-hidden="true"></i>                               
                                 <span class="hide-menu">Ano</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="combustivelcadastrar.php"
                                aria-expanded="false">
                                <i class="fa fa-info-circle" aria-hidden="true"></i>
                                <span class="hide-menu">Combustível</span>
                            </a>
                        </li>
                         <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="tpvehcadastrar.php"
                                aria-expanded="false">
                                <i class="fa fa-user" aria-hidden="true"></i>
                                <span class="hide-menu">Tipo do Veículo</span>
                            </a>
                        </li>

                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="../sair.php"
                                aria-expanded="false">
                                <i class="fa fa-user" aria-hidden="true"></i>
                                <span class="hide-menu">Sair</span>
                            </a>
                        </li>
                       
                    </ul>

                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
        </aside>
        <div class="page-wrapper">
            <div class="page-breadcrumb bg-white">
                <div class="row align-items-center">
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                        <h4 class="page-title">Painel</h4>
                    </div>
                    <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                       
                    </div>
                </div>
   
            </div>
            <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Acessórios - Tipo do Veículo - Marca -->
                <!-- ============================================================== -->
                <div class="row justify-content-center">
                    <div class="col-lg-4 col-md-12">
                        <div class="white-box analytics-info">
                           <center> <h3 class="box-title">Acessórios</h3> </center>
                           
                            <div class="d-grid gap-2 col-6 mx-auto">
  <a  href="acessocadastrar.php" class="btn btn-warning" type="button">Cadastrar</a>
  <a   href="acessoatualizar.php" class="btn btn-warning" type="button">Atualizar</a>
</div>

                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12">
                        <div class="white-box analytics-info">
                        <center> <h3 class="box-title">Tipo do Veículo</h3> </center>
                           
                            <div class="d-grid gap-2 col-6 mx-auto">
  <a href="tpvehcadastrar.php" class="btn btn-warning" type="button">Cadastrar</a>
  <a href="tpvehatualizar.php" class="btn btn-warning" type="button">Atualizar</a>
</div>

                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12">
                        <div class="white-box analytics-info">
                        <center> <h3 class="box-title">Marca</h3> </center>
                            
                            <div class="container text-center">
                            <div class="d-grid gap-2 col-6 mx-auto">
  <a href="marcacadastrar.php" class="btn btn-warning" type="button">Cadastrar</a>
  <a href="marcaatualizar.php" class="btn btn-warning" type="button">Atualizar</a>
</div>
                            
                        </div>
                    </div>
                </div>
<!-- ============================================================== -->
                <!-- Veículo - Concessionária - Cor  -->
                <!-- ============================================================== -->
                <div class="row justify-content-center">
                    <div class="col-lg-4 col-md-12">
                        <div class="white-box analytics-info">
                           <center> <h3 class="box-title">Veículo</h3> </center>
                           
                            <div class="d-grid gap-2 col-6 mx-auto">
  <a href="veiculocadastrar.php" class="btn btn-warning" type="button">Cadastrar</a>
  <a href="veiculoatualizar.php" class="btn btn-warning" type="button">Atualizar</a>
</div>

                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12">
                        <div class="white-box analytics-info">
                        <center> <h3 class="box-title">Concessionária</h3> </center>
                           
                            <div class="d-grid gap-2 col-6 mx-auto">
  <a href="concecadastrar.php" class="btn btn-warning" type="button">Cadastrar</a>
  <a href="conceatualizar.php" class="btn btn-warning" type="button">Atualizar</a>
</div>

                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12">
                        <div class="white-box analytics-info">
                        <center> <h3 class="box-title">Cor</h3> </center>
                            
                            <div class="container text-center">
                            <div class="d-grid gap-2 col-6 mx-auto">
  <a href="corcadastrar.php" class="btn btn-warning" type="button">Cadastrar</a>
  <a href="coratualizar.php" class="btn btn-warning" type="button">Atualizar</a>
</div>
                            
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->

                <!-- ============================================================== -->
                <!-- Ano - Combustível e alterar -->
                <!-- ============================================================== -->
                <div class="row justify-content-center">
                    <div class="col-lg-4 col-md-12">
                        <div class="white-box analytics-info">
                           <center> <h3 class="box-title">Ano</h3> </center>
                           
                            <div class="d-grid gap-2 col-6 mx-auto">
  <a  href="anocadastrar.php" class="btn btn-warning" type="button">Cadastrar</a>
  <a href="anoatualizar.php" class="btn btn-warning" type="button">Atualizar</a>
</div>

                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12">
                        <div class="white-box analytics-info">
                        <center> <h3 class="box-title">Combustível</h3> </center>
                           
                            <div class="d-grid gap-2 col-6 mx-auto">
  <a href="combustivelcadastrar.php" class="btn btn-warning" type="button">Cadastrar</a>
  <a href="combustivelatualizar.php" class="btn btn-warning" type="button">Atualizar</a>
</div>

                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12">
                        <div class="white-box analytics-info">
                        <center> <h3 class="box-title">Modelo</h3> </center>
                            
                            <div class="container text-center">
                            <div class="d-grid gap-2 col-6 mx-auto">
  <a href="modelocadastrar.php" class="btn btn-warning" type="button">Cadastrar</a>
  <a href="modeloatualizar.php" class="btn btn-warning" type="button">Atualizar</a>
</div>
                            
                        </div>
                    </div>
                </div>
</div>
    
    </div>
   
    <script src="plugins/bower_components/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="js/app-style-switcher.js"></script>
    <script src="plugins/bower_components/jquery-sparkline/jquery.sparkline.min.js"></script>
    <!--Wave Effects -->
    <script src="js/waves.js"></script>
    <!--Menu sidebar -->
    <script src="js/sidebarmenu.js"></script>
    <!--Custom JavaScript -->
    <script src="js/custom.js"></script>
    <!--This page JavaScript -->
    <!--chartis chart-->
    <script src="plugins/bower_components/chartist/dist/chartist.min.js"></script>
    <script src="plugins/bower_components/chartist-plugin-tooltips/dist/chartist-plugin-tooltip.min.js"></script>
    <script src="js/pages/dashboards/dashboard1.js"></script>
</body>

</html>
