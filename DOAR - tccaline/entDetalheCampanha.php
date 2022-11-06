<?php session_start();

if ($_GET) {
    $id = $_GET['id'];
    include_once('conexao/Conexao.php');
    $sql = "SELECT * FROM `tbl_campanha` WHERE camp_Id = $id";
    $dados = mysqli_query($con, $sql);
    if ($dado = mysqli_fetch_array($dados)) {
        $nom = $dado['camp_Nome'];
        $des = $dado['camp_Descricao'];
        $dtIni = $dado['camp_DataInicioCampanha'];
        $dtFim = $dado['camp_DataFinalCampanha'];
        $causa = $dado['camp_TipoCausa'];
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

    <!-- css adcional -->
    <link rel="stylesheet" href="assets/css/teste.css">

</head>

<body>
    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-content-navbar">
        <div class="layout-container">

            <!--  Menu -->

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
                <!-- /Menu -->

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
                                        <form action="php/updateaCampImagem.php" method="POST" enctype="multipart/form-data">
                                            <!-- CARD HEADER -->
                                            <div class="d-flex align-items-start align-items-sm-center gap-4">
                                                <img src="img/imagemUsuario/imgCampanha/<?php echo $_SESSION['imagemCampanha']; ?>" alt="user-avatar" class="d-block rounded" height="100" width="100" id="file-ip-1-preview" />
                                                <div class="button-wrapper">
                                                    <label for="upload" class="btn btn-primary me-2 mb-4" tabindex="0">
                                                        <span class="d-none d-sm-block">Carregar foto</span>
                                                        <i class="bx bx-upload d-block d-sm-none"></i>
                                                        <input type="file" id="upload" name="arquivo" class="account-file-input" hidden accept="image/png, image/jpeg" onchange="showPreview(event);" required />
                                                    </label>
                                                    <p class="text-muted mb-0"> </p>

                                                    <button class="btn btn-primary" id="enviaFoto" type="submit">Salvar</button>
                                                </div>
                                            </div>
                                            <!-- /CARD HEADER -->
                                        </form>
                                    </div>
                                    <hr class="my-0" />
                                    <div class="card-body">
                                        <form id="updateCampanha" method="POST" action="php/updateCampanha.php">
                                            <div class="row">
                                                <!-- id -->
                                                <input type="hidden" name="id" value="<?php echo $id; ?>">
                                                <!-- NOME -->
                                                <div class="mb-3 col-md-6">
                                                    <label for="firstName" class="form-label">Nome</label>
                                                    <input type="text" name="NomeCampanha" id="nomeCampanha" class="form-control" disabled value="<?php echo $nom; ?>">

                                                </div>
                                                <!-- /NOME -->
                                                <!-- CAUSA  -->
                                                <div class="mb-3 col-6 col-sm-2">
                                                    <label for="causa" class="form-label">Causa social</label>
                                                    <input type=" text" name="causaSocial" id="causa" class="form-control" value="<?php echo $causa; ?> " disabled>
                                                </div>
                                                <!-- /CAUSA -->
                                                <!-- DATA INICIO -->
                                                <div class="mb-3 col-6 col-sm-2">
                                                    <label for="dataInicio" class="form-label">Inicio</label>
                                                    <input type=" date" name="dataInicio" id="dataInicio" class="form-control" readonly value="<?php echo date('d/m/Y', strtotime($dtIni)); ?>">

                                                </div>
                                                <!-- /DATA INICIO-->
                                                <!-- DATA FIM -->
                                                <div class="mb-3 col-6 col-sm-2">
                                                    <label class="form-label" for="dataFim">Fim</label>
                                                    <input type="date" name="dataFim" id="dataFim" class="form-control date-input" disabled value="<?php echo date('Y-m-d', strtotime($dtFim)); ?>">
                                                </div>
                                                <!-- /DATA FIM -->
                                                <!-- DESCRICAO -->
                                                <div class="col-12">
                                                    <label for="descricao" class="form-label">Descrição:</label>
                                                    <textarea name="descricao" id="descricao" cols="30" rows="10" class="form-control" disabled><?php echo $des; ?></textarea>
                                                </div>
                                                <!-- /DESCRICAO -->
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
                                                    <button type="submit" class="btn btn-primary me-2" id="salvar">Salvar</button>
                                                    <a href="itemTeste.php?fk=<?php echo $id; ?>">
                                                        <button type="button" class="btn btn-info me-2">Adicionar Itens</button>
                                                    </a>
                                                    <a href="entCampanhaFinalizada.php?id=<?php echo $id; ?>">
                                                        <button type="button" class="btn btn-info me-2" id="finalizar">Finalizar</button>
                                                    </a>

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
    <?php include_once('php/mensagemErro.php'); ?>
    <?php include_once('php/mensagemSucesso.php'); ?>

    <script src="assets/js/entDetalheCampanha.js"></script>
    <script src="assets/js/imagemPreview.js"></script>

</body>

</html>