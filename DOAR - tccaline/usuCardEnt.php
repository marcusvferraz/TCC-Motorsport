<!DOCTYPE html>

<html lang="pt-br" class="light-style layout-menu-fixed" dir="ltr" data-theme="theme-default" data-assets-path="../assets/" data-template="vertical-menu-template-free">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

    <meta name="description" content="" />

    <?php require_once('linkInicio.php'); ?>

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
                <div class="container-xxl flex-grow-1 container-p-y mb-4">
                    <!-- CARD -->
                    <div class="card p-4 ">

                        <!-- BUSCAR -->
                        <div class=" row">
                            <label for="html5-search-input" class="form-label">buscar</label>
                            <div class="col-12">
                                <form action="" method="POST" class="d-flex ">
                                    <input class="form-control" type="search" placeholder="Digite..." id="html5-search-input" name="pesquisar" />
                                    <button type="submit" class="btn btn-primary"><img src="img/svgIcon/buscar.png" class="icone-filtro"></button>
                                </form>
                            </div>
                        </div>

                        <!-- /BUSCAR -->
                    </div>
                    <!-- /CARD -->
                    <div class="card bg-transparent mt-3 m-0 p-0" id="invisivel">
                        <div class="row  mt-5 ">
                            <?php
                            $ativo = 1;
                            include_once('conexao/Conexao.php');
                            if ($_POST) {
                                $ps = $_POST['pesquisar'];

                                $sql = "SELECT  `org_Id`,  `org_NomeFantasia`,`org_Telefone1`, `org_Telefone2`, `org_Celular`,`org_ImagemLogo` FROM `tbl_organizacao` where org_ativo = $ativo   and org_NomeFantasia like '%$ps%'";
                            } else {

                                $sql = "SELECT  `org_Id`,  `org_NomeFantasia`,`org_Telefone1`, `org_Telefone2`, `org_Celular`,`org_ImagemLogo` FROM `tbl_organizacao` where org_ativo = $ativo ";
                            }
                            $rs = mysqli_query($con, $sql) or die("Erro ao selecionar a campanha");

                            while ($dados = mysqli_fetch_array($rs)) {
                                $id = $dados['org_Id'];

                                echo '
                                    <div class=" mb-3 m-2 card-inst-simples">
                                            <div class="header justify-content-center align-items-center d-flex">
                                                <div class="imagem-logo">
                                                    <img src="img/imagemUsuario/orgPerfil/' . $dados['org_ImagemLogo'] . '"  width="100%" class="imagem-logo">
                                                </div>
                                            </div>
                                            <div class="body ">
                                                <span class="titulo">' . $dados['org_NomeFantasia'] . '</span>
                                                <span class=" telefone">' . $dados['org_Telefone1'] . '</span>
                                                <div class="justify-content-center d-flex">
                                                    <a href="slEntDetalhes.php?id=' . $id . '">
                                                        <button type="button" class="btn btn-sm btn-primary">Ver Mais</button>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                ';
                            }
                            ?>

                        </div>
                    </div>
                </div>
                <!-- / Content -->
                <!-- footer -->
                <?php require_once('footer.php'); ?>
                <!-- /footer -->

                <!-- Content wrapper -->
            </div>
        </div>
        <!-- / Layout page -->
    </div>
    <!-- / Layout wrapper -->
    <?php require_once('linkFinal.php'); ?>

    <!-- cdn jquery mask -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js" integrity="sha512-pHVGpX7F/27yZ0ISY+VVjyULApbDlD0/X0rgGbTqCE7WFW5MezNTWG/dnhtbBuICzsd0WQPgpE4REBLv+UqChw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <!-- minhas mascaras -->
    <script src="assets/js/mascara.js"></script>

</body>

</html>