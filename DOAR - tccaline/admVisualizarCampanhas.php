<?php
session_start();

include_once('conexao/Conexao.php');

$ativa = 'ativa';
$finalizada = 'finalizada';

$sql = "SELECT * FROM `tbl_campanha` WHERE camp_Status = '$ativa'";

$rs = mysqli_query($con, $sql) or die("Erro ao selecionar os usuario");

$sql3 = "SELECT * FROM `tbl_campanha` WHERE camp_Status = '$finalizada'";

$rs3 = mysqli_query($con, $sql3) or die("Erro ao selecionar os usuario");

?>

<!DOCTYPE html>

<html lang="pt-br" class="light-style layout-menu-fixed" dir="ltr" data-theme="theme-default" data-assets-path="../assets/" data-template="vertical-menu-template-free">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

    <meta name="description" content="" />

    <?php require_once('linkInicio.php'); ?>

    <!-- CSS ADCIONAL -->
    <link rel="stylesheet" href="assets/css/teste.css">

</head>

<body>
    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-content-navbar">
        <div class="layout-container">

            <!-- menu -->
            <aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
                <!-- logotipo -->
                <div class="app-brand demo">
                    <a href="index.html" class="app-brand-link">
                        <span class="app-brand-text demo menu-text fw-bolder ms-2">Logo</span>
                    </a>
                    <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
                        <i class="bx bx-chevron-left bx-sm align-middle"></i>
                    </a>
                </div>
                <!--/ logotipo -->
                <div class="menu-inner-shadow"></div>
                <ul class="menu-inner py-1">
                    <!-- menu escrita -->
                    <li class="menu-header small text-uppercase">
                        <span class="menu-header-text">Menu</span>
                    </li>
                    <!--/ menu escrita -->
                    <!-- Home -->
                    <li class="menu-item ">
                        <a href="admVisualizarDoadores.php" class="menu-link">
                            <div data-i18n="Analytics">Visualizar Usuarios</div>
                        </a>
                    </li>
                    <!--/ Home -->
                    <!-- Campanhas -->
                    <li class="menu-item">
                        <a href="admVisualizarEntidades.php" class="menu-link ">
                            <div data-i18n="Analytics">Visualizar Organizações</div>
                        </a>
                    </li>
                    <!-- / Campanhas -->
                    <!-- instituicoes -->
                    <li class="menu-item active">
                        <a href="admVisualizarCampanhas.php" class="menu-link">
                            <div data-i18n="Analytics">Visualizar Campanhas</div>
                        </a>
                    </li>
                    <!-- /instituicoes -->

                    <!-- sair -->
                    <li class="menu-item">
                        <a href="login.php" class="menu-link">
                            <div data-i18n="Analytics">Sair</div>
                        </a>
                    </li>
                    <!--/ sair -->
                    <!-- /botao ajude a plataforma -->
                </ul>

            </aside>
            <!-- / Menu -->

            <!-- Layout container -->
            <div class="layout-page">
                <!-- Navbar -->
                <nav class="layout-navbar container-xxl navbar navbar-expand-xl navbar-detached align-items-center bg-navbar-theme" id="layout-navbar">
                    <div class="layout-menu-toggle navbar-nav align-items-xl-center me-3 me-xl-0 d-xl-none">
                        <a class="nav-item nav-link px-0 me-xl-4" href="javascript:void(0)">
                            <i class="bx bx-menu bx-sm"></i>
                        </a>
                    </div>

                </nav>
                <!-- / Navbar -->
                <!-- /menu -->

                <!-- Content wrapper -->
                <div class="content-wrapper">
                    <!-- Content -->
                    <div class="container-xxl flex-grow-1 container-p-y">
                        <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">ADM /</span> Visualizar Campanhas
                        </h4>
                        <div class="row">
                            <div class="col-md-12">
                                <!-- DOADORES ATIVOS -->
                                <div class="card mb-5">
                                    <!-- TABELA DE ITENS -->
                                    <div class="mb-4 mt-3">
                                        <div class="row table-responsive text-nowrap p-0 m-0">

                                            <table class="table table-striped table-hover  col-10 mb-4" id="example">
                                                <h3 class="mt-3 text-center">Campanhas Ativas</h3>
                                                <hr class="mb-5 mt-5">
                                                <thead>
                                                    <tr>
                                                        <th>Id</th>
                                                        <th>Campanha </th>
                                                        <th>Organização</th>
                                                        <th>Status</th>
                                                        <th>Ações</th>
                                                    </tr>
                                                </thead>
                                                <tbody class="table-border-bottom-0 ">

                                                    <?php

                                                    while ($dados = mysqli_fetch_array($rs)) {

                                                        $campFk = $dados['fk_Org_Campanha'];
                                                        $campId = $dados['camp_Id'];
                                                        $campNome = $dados['camp_Nome'];
                                                        $campStatus = $dados['camp_Status'];

                                                        $sql2 = "SELECT `org_Id`,`org_NomeFantasia` FROM `tbl_organizacao` WHERE `org_Id` = $campFk";

                                                        $rs2 = mysqli_query($con, $sql2) or die("Erro ao selecionar os usuario");

                                                        $dados2 = mysqli_fetch_array($rs2);
                                                        $orgId = $dados2['org_Id'];
                                                        $orgNome = $dados2['org_NomeFantasia'];

                                                        echo '
                                                            <tr> 
                                                                <td><strong>' . $campId . '</strong></td>
                                                                <td>' . $campNome . '</td>
                                                                <td>' . $orgNome . '</td>
                                                                <td> <span class="badge rounded-pill  bg-success">' . $campStatus . '</span></td>
                                                                <td>
                                                                <div class="dropdown">
                                                                    <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                                                                        <i class="bx bx-dots-vertical-rounded"></i>
                                                                    </button>
                                                                    <div class="dropdown-menu">
                                                                        <a class="dropdown-item" href="admEditarCampanha.php?id='.$campId.'"><i class="bx bx-edit-alt me-1"></i> Editar Campanha</a>
                                                                        <a class="dropdown-item" href="php/admFinalizaCampanha.php?id=' . $campId . '"><i class="bx bx-trash me-1"></i>Finalizar 
                                                                        Campanha</a>
                                                                        <a class="dropdown-item" href="php/admDesativarCampanha.php?id=' . $campId . '"><i class="bx bx-trash me-1"></i>Desativar 
                                                                        Campanha</a>
                                                                    </div>
                                                                </div>
                                                                </td>
                                                            </tr>
                                                           
                                                        ';
                                                    }

                                                    ?>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <!-- /FIM DOS DOADORES ATIVOS -->

                                <!-- DOADORES DESATIVADOS -->
                                <div class="card mb-4">
                                    <!-- TABELA DE ITENS -->
                                    <div class="mb-4 mt-3">
                                        <div class="row table-responsive text-nowrap p-0 m-0">

                                            <table class="table table-striped table-hover  col-10 mb-4" id="example2">
                                                <h3 class="mt-3 text-center">Campanhas Encerradas</h3>
                                                <hr class="mb-5 mt-5">
                                                <thead>
                                                    <tr>
                                                        <th>Id</th>
                                                        <th>Campanha </th>
                                                        <th>Organização</th>
                                                        <th>Status</th>
                                                    </tr>
                                                </thead>
                                                <tbody class="table-border-bottom-0">

                                                    <?php

                                                    while ($dados3 = mysqli_fetch_array($rs3)) {

                                                        $campFk = $dados3['fk_Org_Campanha'];
                                                        $campId = $dados3['camp_Id'];
                                                        $campNome = $dados3['camp_Nome'];
                                                        $campStatus = $dados3['camp_Status'];

                                                        $sql4 = "SELECT `org_Id`,`org_NomeFantasia` FROM `tbl_organizacao` WHERE `org_Id` = $campFk";

                                                        $rs4 = mysqli_query($con, $sql4) or die("Erro ao selecionar os usuario");

                                                        $dados4 = mysqli_fetch_array($rs4);
                                                        $orgId = $dados4['org_Id'];
                                                        $orgNome = $dados4['org_NomeFantasia'];

                                                        echo ' 
                                                            <tr> 
                                                                <td><strong>' . $campId . '</strong></td>
                                                                <td>' . $campNome . '</td>
                                                                <td>' . $orgNome . '</td>
                                                                <td> <span class="badge rounded-pill  bg-warning">' . $campStatus . '</span></td>
                                                            </tr>
                                                           
                                                        ';
                                                    }

                                                    ?>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <!--/ DOADORES DESATIVADOS -->
                            </div>
                            <!-- / Content -->
                        </div>
                        <!-- Content wrapper -->
                    </div>
                    <!-- footer -->
                    <?php require_once('footer.php'); ?>
                    <!-- /footer -->
                    <!-- / Layout page -->
                </div>
            </div>
        </div>
        <!-- / Layout wrapper -->
        <!-- links final -->
        <?php require_once('linkFinal.php'); ?>

        <!-- mensagem erro e sucesso -->
        <?php include_once('php/mensagemErro.php'); ?>
        <?php include_once('php/mensagemSucesso.php'); ?>

        <!-- script do data table -->
        <script src="assets/js/tabela.js"></script>
        <script src="assets/js/tabela2.js"></script>
        <script src="assets/js/traduzirTabela.js"></script>
        <script src="assets/js/traduzirTabela2.js"></script>

        <script>
            $(document).ready(function() {
                $('#example2').DataTable();
                $('#example').DataTable();
            });
        </script>

</body>

</html>