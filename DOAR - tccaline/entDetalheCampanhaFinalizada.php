<?php session_start();

if ($_GET) {
    $id = $_GET['id'];
    include_once('conexao/Conexao.php');
    $sql = "SELECT * FROM `tbl_campanha` WHERE camp_Id = $id and camp_Status = 'finalizada'";
    $dados = mysqli_query($con, $sql);
    if ($dado = mysqli_fetch_array($dados)) {
        $campId = $dado['camp_Id'];
        $nom = $dado['camp_Nome'];
        $des = $dado['camp_Descricao'];
        $dtIni = $dado['camp_DataInicioCampanha'];
        $dtFim = $dado['camp_DataFinalCampanha'];
        $agra = $dado['camp_Agradecimento'];
        $fk = $dado['fk_Org_Campanha'];
        $_SESSION['idCampMomento'] = $id;
        $_SESSION['imagemCampanha'] = $dado['camp_Imagem'];
    }
}

?>

<!DOCTYPE html>

<html lang="pt-br" class="light-style layout-menu-fixed" dir="ltr" data-theme="theme-default" data-assets-path="../assets/" data-template="vertical-menu-template-free">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

    <meta name="description" content="" />

    <?php require_once('linkInicio.php'); ?>

    <!-- css adicional -->
    <link rel="stylesheet" href="assets/css/teste.css">

</head>

<body>
    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-content-navbar">
        <div class="layout-container">

            <!-- importando Menu -->

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
                    <!-- Campanhas -->
                    <li class="menu-item  menu-item active">
                        <a href="javascript:void(0)" class="menu-link menu-toggle">
                            <i class="menu-icon tf-icons bx bx-box"></i>
                            <div data-i18n="User interface">Campanhas</div>
                        </a>
                        <ul class="menu-sub">
                            <li class="menu-item">
                                <a href="entCadastrarCampanha.php" class="menu-link">
                                    <div data-i18n="Accordion">Nova</div>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="entCampanhas.php" class="menu-link">
                                    <div data-i18n="Accordion">Em andamento:</div>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="entCampanhasFinalizadas.php" class="menu-link">
                                    <div data-i18n="Accordion">Finalizadas</div>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <!-- / Campanhas -->
                    <!-- doações -->
                    <li class="menu-item">
                        <a href="#" class="menu-link">
                            <div data-i18n="Analytics">Doações</div>
                        </a>
                    </li>
                    <!-- /doações -->

                    <!-- sair -->
                    <li class="menu-item">
                        <a href="loginEnt.php" class="menu-link">
                            <div data-i18n="Analytics">Sair</div>
                        </a>
                    </li>
                    <!--/ sair -->
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
                    <div class="navbar-nav-right d-flex align-items-center" id="navbar-collapse">
                        <ul class="navbar-nav flex-row align-items-center ms-auto">
                            <!-- Place this tag where you want the button to render. -->
                            <!-- User -->
                            <li class="nav-item navbar-dropdown dropdown-user dropdown">
                                <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);" data-bs-toggle="dropdown">
                                    <div class="avatar avatar-online">
                                        <img src="img/imagemUsuario/orgPerfil/<?php echo $_SESSION['imagem']; ?>" class="w-px-40 h-px-40 rounded-circle" />
                                    </div>
                                </a>
                                <ul class="dropdown-menu dropdown-menu-end">
                                    <li>
                                        <a class="dropdown-item" href="#">
                                            <div class="d-flex">
                                                <div class="flex-shrink-0 me-3">
                                                    <div class="avatar avatar-online">
                                                        <img src="img/imagemUsuario/orgPerfil/<?php echo $_SESSION['imagem']; ?>" class="w-px-40 h-px-40 rounded-circle" />
                                                    </div>
                                                </div>
                                                <div class="flex-grow-1">
                                                    <span class="fw-semibold d-block"><?php echo $_SESSION['nome']; ?></span>
                                                    <small class="text-muted"><?php echo $_SESSION['email']; ?></small>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <div class="dropdown-divider"></div>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="entEditarPerfil.php">
                                            <span class="align-middle">Meu Perfil</span>
                                        </a>
                                    </li>
                                    <div class="dropdown-divider"></div>
                            </li>
                            <li>
                                <a class="dropdown-item" href="loginEnt.php">
                                    <img src="img/icone/logout2.png" alt="" class="tf-icons bx icone-menu ">
                                    <span class="align-middle">Sair</span>
                                </a>
                            </li>
                        </ul>
                        </li>
                        <!--/ User -->
                        </ul>
                    </div>
                </nav>

                <!-- / Navbar -->
                <!-- /importando Menu -->

                <!-- Content wrapper -->
                <div class="content-wrapper">
                    <!-- Content -->

                    <div class="container-xxl flex-grow-1 container-p-y">
                        <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Campanha /</span> dados da campanha</h4>

                        <div class="row">
                            <div class="col-md-12">
                                <div class="card mb-4">
                                    <!-- CAMPANHA -->
                                    <div class="card-body">
                                        <!-- CARD HEADER -->
                                        <div class="d-flex align-items-start align-items-sm-center gap-4">
                                            <!-- IMAGEM CAMPANHA -->
                                            <img src="img/imagemUsuario/imgCampanha/<?php echo  $_SESSION['imagemCampanha']; ?>" alt="user-avatar" class="d-block rounded" height="100" width="100" id="uploadedAvatar" />
                                            <!-- /IMAGEM CAMPANHA -->
                                            <div class="secundario col ">
                                                <h3>Nome campanha</h3>

                                            </div>
                                        </div>
                                        <!-- /CARD HEADER -->
                                    </div>
                                    <hr class="my-0" />
                                    <div class="card-body">

                                        <div class="row">
                                            <!-- NOME -->
                                            <div class="mb-3 col-md-6">
                                                <label for="firstName" class="form-label">Nome</label>
                                                <p class="linha"><?php echo $nom; ?></p>

                                            </div>
                                            <!-- /NOME -->
                                            <!-- DATA INICIO -->
                                            <div class="mb-3 col-6 col-sm-3">
                                                <label for="dataInicio" class="form-label">Inicio</label>
                                                <p class="linha"><?php echo date('d/m/Y', strtotime($dtIni)); ?></p>

                                            </div>
                                            <!-- /DATA INICIO-->
                                            <!-- DATA FIM -->
                                            <div class="mb-3 col-6 col-sm-3">
                                                <label class="form-label" for="dataFim">Fim</label>
                                                <p class="linha"><?php echo date('d/m/Y', strtotime($dtFim)); ?></p>
                                            </div>
                                            <!-- /DATA FIM -->
                                            <!-- DESCRICAO -->
                                            <div class="col-12">
                                                <label for="descricao" class="form-label">Descrição:</label>
                                                <div class="form-control p-5">
                                                    <span><?php echo $des; ?></span>
                                                </div>
                                            </div>
                                            <!-- /DESCRICAO -->

                                            <hr class="mt-5 mb-5">
                                            <!-- /imagem -->
                                            <!-- agradecimentos -->
                                            <form id="updateCampanha" method="POST" action="php/updateagradecimento.php">
                                                <div class="mb-3 col ">
                                                    <input type="hidden" name="id" value="<?php echo $campId; ?>">
                                                    <label for="Agradecimentos" class="form-label">Agradecimentos</label>
                                                    <textarea class="form-control" id="Agradecimentos" name="agradecimentos" cols="30" rows="10" disabled><?php echo $agra; ?></textarea>
                                                </div>
                                                <button type="submit" class="btn btn-primary me-2" id="salvar">Salvar</button>
                                            </form>

                                            <!-- agradecimentos -->
                                            <!-- imagem card -->
                                            <div class="col-12 justify-content-between d-flex flex-wrap mt-5 mb-3" id="mostrarImagem">

                                                <?php
                                                
                                                $sql2 = "SELECT `img_Id`, `img_Imagem`, `fk_Camp_Imagem` FROM `tbl_imagem` WHERE `fk_Camp_Imagem` = $campId  limit 3";

                                                $res = mysqli_query($con, $sql2);

                                                while ($rep = mysqli_fetch_array($res)) {
                                                    echo '
                                                            <div class="imagem-final m-auto mb-4 bg-tranparent">
                                                                 <img src="img/imagemUsuario/imgCampanha/' . $rep['img_Imagem'] . '" class="img-fluid " alt="">
                                                            </div>';
                                                }
                                         
                                                ?>

                                            </div>
                                            <!-- /imagem card -->
                                            <!-- imagens -->
                                            <form action="">
                                                <div class=" row align-items-start align-items-sm-center " id="editarImagem">

                                                    <div class="mb-3 col-12 col-md-4">
                                                        <label for="formFile" class="form-label">Carregar Imagem </label>
                                                        <input class="form-control" type="file" id="formFile" />
                                                    </div>
                                                    <div class="mb-3 col-12 col-md-4">
                                                        <label for="formFile" class="form-label">Carregar Imagem </label>
                                                        <input class="form-control" type="file" id="formFile" />
                                                    </div>
                                                    <div class="mb-3 col-12 col-md-4">
                                                        <label for="formFile" class="form-label">Carregar Imagem </label>
                                                        <input class="form-control" type="file" id="formFile" />
                                                    </div>
                                                </div>
                                                <button type="button" class="btn btn-primary me-2" id="salvar">Salvar</button>
                                            </form>

                                            <!-- TABELA DE ITENS -->
                                            <div class="mb-4 mt-5">
                                                <div class="table-responsive text-nowrap">
                                                    <table class="table table-striped">
                                                        <thead>
                                                            <tr>
                                                                <th>Itens</th>
                                                                <th>Quantidade arrecadada</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody class="table-border-bottom-0">
                                                            <!-- LINHA-->
                                                            <tr>
                                                                <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>Angular Project</strong></td>
                                                                <td>Albert Cook</td>
                                                            </tr>
                                                            <!-- /LINHA -->

                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                            <!-- /TABELA DE ITENS -->

                                            <!-- BOTOES -->
                                            <div class="mt-2 mb-3">
                                                <button type="button" class="btn btn-primary me-2" id="editar">Editar</button>
                                                <button type="button" class="btn btn-secondary me-2" id="cancelar">Cancelar</button>

                                            </div>
                                            <!-- BOTOES -->
                                        </div>
                                        </form>
                                    </div>
                                    <!-- /CAMPANHA -->
                                </div>

                            </div>
                        </div>
                    </div>
                    <!-- / Content -->

                    <!-- FOOTER -->
                    <?php require_once('footer.php'); ?>
                    <?php include_once('php/mensagemErro.php'); ?>
                    <?php include_once('php/mensagemSucesso.php'); ?>
                    <!-- /FOOTER -->

                    <div class="content-backdrop fade"></div>
                </div>
                <!-- Content wrapper -->
            </div>
            <!-- / Layout page -->
        </div>

        <!-- Overlay -->
        <div class="layout-overlay layout-menu-toggle"></div>
    </div>
    <!-- / Layout wrapper -->

    <!-- link final -->
    <?php require_once('linkFinal.php'); ?>
    <script>
        $(document).ready(function() {
            $('button#cancelar').hide();
            $('button#salvar').hide();
            $('#editarImagem').hide();
            $(" button#editar").click(function() {
                $('#updateCampanha input').removeAttr('disabled');
                $('#updateCampanha textarea').removeAttr('disabled');
                $(" button#editar").hide();
                $('button#cancelar').show();
                $('button#salvar').show();
                $('#editarImagem').show();
                $("div#mostrarImagem div").hide();
            });
            $(" button#cancelar").click(function() {
                $('#updateCampanha input').attr('disabled', 'disabled');
                $('#updateCampanha textarea').attr('disabled', 'disabled');
                $(" button#editar").show();
                $('button#cancelar').hide();
                $('button#salvar').hide();
                $('#editarImagem').hide();
                $("div#mostrarImagem div").show();
            });
        });
    </script>


</body>

</html>