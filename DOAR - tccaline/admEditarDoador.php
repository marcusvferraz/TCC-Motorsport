<?php session_start();

if ($_GET) {
    $id = $_GET['id'];

    include_once('conexao/Conexao.php');
    $sql = "SELECT * FROM `tbl_doador` WHERE doador_Id = $id";
    $dados = mysqli_query($con, $sql);
    $dado = mysqli_fetch_array($dados);

    $doadorNome = $dado['doador_Nome'];
    $doadorEmail = $dado['doador_Email'];
    $doadorCelular = $dado['doador_Celular'];
    $doadorSenha = $dado['doador_Senha'];
    $doadorAno = $dado['doador_Nasc'];

    if ($doadorCelular == 0 || $doadorCelular == '') {
        $doadorCelular = "";
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

    <!-- CSS ADCIONAL -->
    <link rel="stylesheet" href="assets/css/teste.css">

</head>

<body>
    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-content-navbar">
        <div class="layout-container">

            <!-- Menu -->
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
                    <li class="menu-item active">
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
                    <li class="menu-item">
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
                        <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">ADM /</span> Editar Doador
                        </h4>
                        <div class="row">
                            <div class="col-md-12">
                                <!-- card cadastro -->
                                <div class="card mb-4">
                                    <h5 class="card-header">Perfil</h5>
                                    <!-- conta -->
                                    <div class="card-body">
                                        <!-- imagem -->
                                        <div class="d-flex align-items-start align-items-sm-center gap-4">
                                            <img src="img/svgIcon/usuarioGrande.png" alt="user-avatar" class="d-block rounded" height="100" width="100" id="uploadedAvatar" />
                                        </div>
                                        <!-- /imagem -->
                                    </div>
                                    <hr class="my-0" />
                                    <div class="card-body">
                                        <form id="admUpdateDoador" method="POST" action="php/admAtualizarDoador.php">
                                            <input type="hidden" name="id" value="<?php echo $id; ?>">
                                            <div class="row">
                                                <!-- id -->
                                                <div class="mb-3 col-md-1">
                                                    <label for="firstName" class="form-label">Id</label>
                                                    <input class="form-control" type="text" id="id" name="id" value="<?php echo $id; ?>" readonly />
                                                </div>
                                                <!-- nome -->
                                                <div class="mb-3 col-md-7">
                                                    <label for="firstName" class="form-label">Nome</label>
                                                    <input class="form-control" type="text" id="firstName" name="nome" value="<?php echo $doadorNome; ?>" />
                                                </div>
                                                <!-- celular -->
                                                <div class="mb-3  col-md-4 ">
                                                    <label class="form-label" for="celular">Celular</label>
                                                    <div class="input-group input-group-merge">
                                                        <input type="text" id="celular" name="celular" class="celular form-control " value="<?php echo $doadorCelular; ?>" />
                                                    </div>
                                                </div>
                                                <div class="mb-3 col-12 col-md-4">
                                                    <label for="email" class="form-label">E-mail</label>
                                                    <input class="form-control" type="text" id="email" name="email" value="<?php echo $doadorEmail; ?>" />
                                                </div>
                                                <div class="mb-3 col-12 col-md-4">
                                                    <label for="nasc" class="form-label">Ano de Nascimento</label>
                                                    <input class="form-control" type="text" id="nasc" name="nasc" value="<?php echo $doadorAno; ?>" />
                                                </div>
                                                <div class="mb-3 col-12 col-md-4">
                                                    <label for="status" class="form-label">Status</label>
                                                    <select class="form-select" type="text" id="status" name="status">
                                                        <option value="1">Ativa</option>
                                                        <option value="0">Desativada</option>
                                                    </select>
                                                </div>

                                            </div>
                                            <!-- botoes -->
                                            <div class="mt-2" id="usuUpdate">
                                                <button type="submit" class="btn btn-primary me-2" id="salvar">Salvar</button>
                                            </div>
                                        </form>
                                        <button type="button" id="editar" class="btn btn-primary">Editar</button>
                                    </div>
                                </div>
                            </div>
                            <!-- card cadastro -->
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

    <script src="assets/js/admDoadorBotao.js"></script>

    <!-- cdn jquery mask -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js" integrity="sha512-pHVGpX7F/27yZ0ISY+VVjyULApbDlD0/X0rgGbTqCE7WFW5MezNTWG/dnhtbBuICzsd0WQPgpE4REBLv+UqChw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <!-- minhas mascaras -->
    <script src="assets/js/mascara.js"></script>

</body>

</html>