<?php
session_start();
if ($_GET) {
    include_once('conexao/Conexao.php');
    $fk = $_GET['id'];

    $_SESSION['ultimaCampanha'] = $fk;

    $sql = "SELECT * FROM `tbl_Itens` WHERE `fk_Camp_Item` = $fk";
    $rs = mysqli_query($con, $sql) or die("Erro ao selecionar a campanha");
}

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
                                        <form action="php/doando.php" method="POST">
                                            <table class="table table-striped table-hover  col-10" id="example">
                                                <!--COMENTARIO SOBRE O CAMPO DE NUMEROSDE ITENS DOADOS quando for fazer o php, isso vai dentro do for, dai colocar os ids na posicao [i] para o jquery do contador funcionar direitinho -->
                                                <thead>
                                                    <tr>
                                                        <th>Item</th>
                                                        <th>Quantidade </th>
                                                    </tr>
                                                </thead>
                                                <tbody class="table-border-bottom-0">

                                                    <?php
                                                    $cont = 0;
                                                    while ($dados = mysqli_fetch_array($rs)) {
                                                        $cont++;
                                                        echo '
                                                            <tr>
                                                                <td class="d-none">
                                                                    <input class="quantity form-control   "  name="id[]" value="' . $dados['iten_Id'] . '" type="text" readonly>
                                                                </td>
                                                                <td>   
                                                                    <input class="quantity  bg-transparent border-transparent  "  name="nomeItem[]" value="' . $dados['iten_Nome'] . '" type="text" readonly id="invisivel">
                                                                </td>
                                                                <td>
                                                                    <div class="contador-container col-12  justify-content-start d-flex">
                                                                        <div class="number-input justify-content-start align-items-center d-flex">
                                                                            <input class="quantity form-control   " min="0" name="quantity[]" value="0" type="number">
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                        ';
                                                    }

                                                    ?>
                                                </tbody>
                                            </table>
                                            <input type="submit" value="doar" class="btn btn-primary" name="cadDoacao">
                                        </form>
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