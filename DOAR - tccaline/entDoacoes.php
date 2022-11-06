<?php session_start(); ?>

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

            <!-- importando Menu -->

            <?php require_once('usuMenu.php'); ?>
            <!-- /importando Menu -->

            <!-- Content wrapper -->
            <div class="content-wrapper">
                <!-- Content -->

                <div class="container-xxl flex-grow-1 container-p-y">
                    <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Campanha /</span> Contribuir
                    </h4>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card mb-4">

                                <!-- TABELA DE ITENS -->
                                <div class="mb-4 mt-3">
                                    <div class="row table-responsive text-nowrap p-0 m-0">
                                        <table class="table table-striped table-hover  col-10" id="example">
                                            <h4 class="text-center mt-5 mb-5">Doacões Pendentes</h4>
                                            <thead>
                                                <tr>
                                                    <th>Campanha</th>
                                                    <th>Item</th>
                                                    <th>Quantidade</th>
                                                    <th>Actions</th>
                                                </tr>
                                            </thead>
                                            <tbody class="table-border-bottom-0">
                                                <?php

                                                include_once('conexao/Conexao.php');

                                                $idUsuario = $_SESSION['id'];
                                                $ativa = 'pendente';

                                                $sql = "SELECT * FROM `tbl_itens_doador` WHERE fk_Doador_id= $idUsuario AND status_doacao = '$ativa'";

                                                $rs = mysqli_query($con, $sql) or die("Erro ao selecionar a campanha");

                                                while ($dados = mysqli_fetch_array($rs)) {

                                                    $idItem = $dados['fk_Itens_id'];
                                                    $quantidadeDoada = $dados['cont_Quantidade'];
                                                    $statusDoacao = $dados['status_doacao'];
                                                    $idDoacao = $dados['id_Itens_Doador'];

                                                    $sql2 = "SELECT * FROM `tbl_itens` WHERE iten_Id = $idItem";

                                                    $rs2 = mysqli_query($con, $sql2) or die("Erro ao selecionar a campanha");
                                                    $dados2 = mysqli_fetch_array($rs2);
                                                    $itemNome = $dados2['iten_Nome'];
                                                    $idCampanha = $dados2['fk_Camp_Item'];

                                                    $sql3 = "SELECT `camp_Nome` FROM `tbl_campanha` WHERE camp_Id = $idCampanha ";
                                                    $rs3 = mysqli_query($con, $sql3) or die("Erro ao selecionar a campanha");
                                                    $dados3 = mysqli_fetch_array($rs3);
                                                    $campNome = $dados3['camp_Nome'];

                                                    echo '
                                                        <tr>
                                                            <td><i class="fab fa-angular fa-lg text-danger me-3"></i>' . $campNome . '</strong></td>
                                                            <td>' . $itemNome . '</td>
                                                            <td>' . $quantidadeDoada . '</td>
                                                            <td>
                                                                <div class="dropdown">
                                                                    <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                                                                        <i class="bx bx-dots-vertical-rounded"></i>
                                                                    </button>
                                                                    <div class="dropdown-menu">
                                                                        <a class="dropdown-item" href="javascript:void(0);"><i class="bx bx-edit-alt me-1"></i> Editar contribuição</a>
                                                                        <a class="dropdown-item" href="php/cancelarDoacao.php?id=' . $idDoacao . '"><i class="bx bx-trash me-1"></i> Cancelar contribuição</a>
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
                        </div>
                        <!-- / Content -->
                        <!-- footer -->
                        <?php require_once('footer.php'); ?>
                        <!-- /footer -->
                    </div>
                    <!-- Content wrapper -->
                </div>
                <!-- / Layout page -->
            </div>
        </div>
        <!-- / Layout wrapper -->
    </div>
    <!-- links final -->
    <?php require_once('linkFinal.php'); ?>

    <!-- mensagem erro e sucesso -->
    <?php include_once('php/mensagemErro.php'); ?>
    <?php include_once('php/mensagemSucesso.php'); ?>

    <!-- script do data table -->
    <script src="assets/js/tabela.js"></script>
    <script src="assets/js/tabela2.js"></script>
    <script src="assets/js/traduzirTabela.js"></script>

</body>

</html>