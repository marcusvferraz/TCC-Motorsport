<?php session_start(); ?>

<!DOCTYPE html>

<html lang="pt-br" class="light-style layout-menu-fixed" dir="ltr" data-theme="theme-default" data-assets-path="../assets/" data-template="vertical-menu-template-free">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

    <meta name="description" content="" />

    <?php require_once('linkInicio.php'); ?>
    <?php require_once('php/selectOrg.php'); ?>

    <!-- css adicional -->
    <link rel="stylesheet" href="assets/css/add2.css">

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
                <!-- /menu -->


                <!-- Content wrapper -->
                <div class="content-wrapper">
                    <!-- Content -->

                    <div class="container-xxl flex-grow-1 container-p-y">
                        <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Configuração de Conta /</span> Conta
                        </h4>
                        <div class="row">
                            <div class="col-md-12">

                                <div class="card mb-4">
                                    <h5 class="card-header">Dados da Organização</h5>
                                    <!-- conta -->
                                    <div class="card-body">
                                        <!-- imagem -->
                                        <form id="form-Imagem" method="POST" enctype="multipart/form-data" action="php/updateImagemContaOrg.php">
                                            <div class="d-flex align-items-start align-items-sm-center gap-4">
                                                <img src="img/imagemUsuario/orgPerfil/<?php echo $_SESSION['imagem']; ?> " alt="user-avatar" class="d-block rounded" height="100" width="100" id="file-ip-1-preview" />
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
                                        </form>
                                        <!-- /imagem -->

                                        <hr class="my-0 mt-3 mb-3" />
                                        <div class="card-body  p-0">
                                            <form id="form-Org" method="POST" action="php/updateDadosContaOrg.php">
                                                <div class="row">
                                                    <!-- id -->
                                                    <input type="hidden" name="id" value="<?php $_SESSION['id'];   ?>">
                                                    <!-- razaoSocial -->
                                                    <div class="mb-3 col-12 col-sm-6 col-md-4">
                                                        <label for="razaoSocial" class="form-label">Razão Social</label>
                                                        <input class="form-control" type="text" id="razaoSocial" name="razaoSocial" value="<?php echo $orgRazaoSocial; ?>" required />
                                                    </div>
                                                    <!-- CNPJ -->
                                                    <div class="mb-3 col-12 col-sm-6 col-md-4">
                                                        <label for="cnpj" class="form-label">CNPJ</label>
                                                        <input class="form-control" type="text" id="cnpj" name="cnpj" value="<?php echo $orgCNPJ; ?>" required />
                                                    </div>
                                                    <!-- TITULO ESTABELECIMENTO (é o nome fantasia) -->
                                                    <div class="mb-3 col-12 col-sm-6 col-md-4">
                                                        <label for="tituloEstabelecimento" class="form-label">Nome
                                                            fantasia</label>
                                                        <input class="form-control" type="text" id="tituloEstabelecimento" name="nomeFantasia" value="<?php echo $orgNomeFantasia; ?>" required />
                                                    </div>
                                                    <!-- cep -->
                                                    <div class="mb-3 col-12 col-sm-6 col-md-4 col-xl-2">
                                                        <label for="cep" class="form-label">cep</label>
                                                        <input class="form-control" type="text" id="cep" name="cep" value="<?php echo $orgCep ?>" />
                                                    </div>
                                                    <!-- estado -->
                                                    <div class="mb-3 col-3 col-md-2 col-lg-2 col-xl-1">
                                                        <label for="cep" class="form-label">estado</label>
                                                        <input class="form-control" type="text" id="uf" name="estado" value="<?php echo $orgEstado; ?>" required />
                                                    </div>
                                                    <!-- cidade -->
                                                    <div class="mb-3 col-12 col-sm-9 col-md-6 col-xl-4">
                                                        <label for="cidade" class="form-label">cidade</label>
                                                        <input class="form-control" type="text" id="cidade" name="cidade" value="<?php echo $orgCidade; ?>" required />
                                                        <span id="avisoUf"></span>
                                                    </div>

                                                    <!-- bairro -->
                                                    <div class="mb-3 col-12 col-sm-6 col-md-5 col-xl-5">
                                                        <label for="bairro" class="form-label">bairro</label>
                                                        <input class="form-control" type="text" id="bairro" name="bairro" value="<?php echo $orgBairro; ?>" required />
                                                    </div>
                                                    <!-- rua -->
                                                    <div class="mb-3 col-9 col-sm-6 col-md-5 col-xl-4">
                                                        <label for="rua" class="form-label">rua</label>
                                                        <input class="form-control" type="text" id="rua" name="rua" value="<?php echo $orgRua; ?>" required />
                                                    </div>
                                                    <!-- numero -->
                                                    <div class="mb-3 col-md-2 col-3 col-xxl-1">
                                                        <label for="numero" class="form-label">numero</label>
                                                        <input class="form-control" type="text" id="numero" name="numero" value="<?php echo $orgnumero; ?>" required />
                                                    </div>
                                                    <!-- complemento -->
                                                    <div class="mb-3 col col-sm-9 col-md-6 col-xl-6">
                                                        <label for="complemento" class="form-label">complemento</label>
                                                        <input class="form-control" type="text" id="complemento" name="complemento" value="<?php echo $orgComplemento; ?>" />
                                                    </div>
                                                    <!-- site -->
                                                    <div class="mb-3 col-sm-6 col-md-6 col-xl-3">
                                                        <label for="site" class="form-label">site</label>
                                                        <input class="form-control" type="text" id="site" name="site" value="<?php echo $orgSite; ?>" />
                                                    </div>
                                                    <!-- celular -->
                                                    <div class="mb-3 col-sm-6 col-md-4 col-xl-3">
                                                        <label for="celular" class="form-label ">celular</label>
                                                        <input class="form-control celular" type="text" id="celular" name="celular" value="<?php echo $orgCelular; ?>" />
                                                    </div>
                                                    <!-- telefone1 -->
                                                    <div class="mb-3 col-sm-6 col-md-4 col-xl-3">
                                                        <label for="telefone1" class="form-label ">telefone</label>
                                                        <input class="form-control telefone" type="text" id="telefone1" name="telefone1" value="<?php echo $orgTelefone1; ?>" required />
                                                    </div>
                                                    <!-- telefone2 -->
                                                    <div class="mb-3 col-sm-4 col-xl-3">
                                                        <label for="telefone2" class="form-label">telefone</label>
                                                        <input class="form-control telefone" type="text" id="telefone2" name="telefone2" value="<?php echo $orgTelefone2; ?>" />
                                                    </div>
                                                    <!-- sobre -->
                                                    <div class="mb-3 col">
                                                        <label for="sobre" class="form-label">sobre</label>
                                                        <textarea class="form-control" id="sobre" name="sobre" cols="30" rows="10"><?php echo $orgSobre; ?></textarea>
                                                    </div>

                                                    <!-- botoes -->
                                                    <div class="mt-2" id="botoesOrg">
                                                        <button type="submit" class="btn btn-primary me-2" id="cadastrarEnt">Salvar</button>
                                                    </div>
                                                </div>
                                        </div>
                                        </form>
                                        <button class="btn btn-primary" id="habilitar-org">Editar</button>
                                    </div>
                                </div>
                            </div>
                            <!-- /Account -->

                        </div>
                        <!-- responsável -->
                        <div class="card mb-4">
                            <h5 class="card-header">Responsável</h5>
                            <div class="card-body">
                                <form action="php/updateResponsavel.php" id="form-responsavel" method="POST">
                                    <div class="row">
                                        <!-- nome -->
                                        <div class="mb-3 col-sm-6  col-md-3">
                                            <label for="nomeResponsavel" class="form-label">nome do Responsável</label>
                                            <input class="form-control" type="text" id="nomeResponsavel" name="nomeResponsavel" value="<?php echo $respNome; ?>" />
                                        </div>
                                        <!-- cpf -->
                                        <div class="mb-3 col-sm-6  col-md-3">
                                            <label for="cpfResponsavel" class="form-label">cpf</label>
                                            <span class="form-control" id="cpfResp"><?php echo $respCPFMascara; ?></span>
                                        </div>
                                        <!-- Email -->
                                        <div class="mb-3 col-sm-6  col-md-3">
                                            <label for="emailResponsavel" class="form-label">Email </label>
                                            <input class="form-control" type="text" id="emailResponsavel" name="emailResponsavel" value="<?php echo $respEmail; ?>" />
                                        </div>
                                        <!-- celular -->
                                        <div class="mb-3  col-sm-6  col-md-3">
                                            <label for="celularResponsavel" class="form-label">Celular</label>
                                            <input class="form-control celular" type="text" id="celularResponsavel" name="celularResponsavel" value="<?php echo $respCelular; ?>" />
                                        </div>
                                        <!-- botoes -->
                                        <div class="mt-2" id="botoesResponsavel">
                                            <button type="submit" class="btn btn-primary me-2">Salvar</button>
                                            <button type="button" class="btn btn-info" id="trocarResp">Trocar Responsável</button>
                                        </div>
                                    </div>
                                </form>
                                <button class="btn btn-primary" id="habilitar-responsavel">Editar</button>
                                <form action="php/orgUpdateResponsavelCpf.php" id="TrocaResponsavel" method="POST">
                                    <div class="row">
                                        <input type="hidden" name="id" value="<?php echo $id; ?>">
                                        <!-- nome -->
                                        <div class="mb-3 col-sm-6  col-md-3">
                                            <label for="nomeResponsavel" class="form-label">nome do Responsável</label>
                                            <input class="form-control" type="text" id="nomeResponsavel" name="nomeResponsavel" />
                                        </div>
                                        <!-- cpf -->
                                        <div class="mb-3 col-sm-6  col-md-3" id="caixaCpf">
                                            <label for="cpfResponsavel" class="form-label">cpf</label>
                                            <input type="text" name="cpf" class="form-control">
                                        </div>
                                        <!-- Email -->
                                        <div class="mb-3 col-sm-6  col-md-3">
                                            <label for="emailResponsavel" class="form-label">Email </label>
                                            <input class="form-control" type="text" id="emailResponsavel" name="emailResponsavel" />
                                        </div>
                                        <!-- celular -->
                                        <div class="mb-3  col-sm-6  col-md-3">
                                            <label for="celularResponsavel" class="form-label">Celular</label>
                                            <input class="form-control celular" type="text" id="celularResponsavel" name="celularResponsavel" />
                                        </div>
                                        <!-- botoes -->
                                        <div class="mt-2" id="botoesResponsavel">
                                            <button type="submit" class="btn btn-primary me-2">Salvar</button>

                                        </div>
                                    </div>
                                </form>

                            </div>
                        </div>
                        <!-- /responsável -->

                        <!-- Dados de Login -->
                        <div class="card mb-4">
                            <h5 class="card-header">Dados de Login</h5>
                            <div class="card-body">
                                <form action="php/updateLoginOrg.php" id="form-dadosLogin" method="POST">
                                    <div class="row">
                                        <!-- email login -->
                                        <div class="mb-3  col-sm-6  col-md-3">
                                            <label for="emailLogin" class="form-label">email Login</label>
                                            <input class="form-control" type="text" id="emailLogin" name="emailLogin" value="<?php echo $_SESSION['email']; ?>" />
                                        </div>
                                        <!-- senha -->
                                        <div class="mb-3  col-sm-6  col-md-3">
                                            <label for="senha" class="form-label">senha atual</label>
                                            <input class="form-control" type="text" id="senha" name="senha" />
                                        </div>
                                        <!-- senha -->
                                        <div class="mb-3  col-sm-6  col-md-3">
                                            <label for="senha" class="form-label">nova senha</label>
                                            <input class="form-control" type="text" id="senha" name="senha" />
                                        </div>
                                        <!-- senhaConfirmar -->
                                        <div class="mb-3  col-sm-6  col-md-3">
                                            <label for="senha" class="form-label">Confirmar senha</label>
                                            <input class="form-control" type="text" id="senhaConfirmar" name="senhaConfirmar" />
                                        </div>
                                        <!-- botoes -->
                                        <div class="mt-2" id="botoesLogin">
                                            <button type="submit" class="btn btn-primary me-2">Salvar</button>
                                        </div>
                                    </div>
                                </form>
                                <button class="btn btn-primary" id="habilitar-login">Editar</button>
                            </div>
                        </div>
                        <!-- /Dados de Login -->

                        <!-- desativar conta -->
                        <div class="card">
                            <h5 class="card-header">Desativar Conta</h5>
                            <div class="card-body">
                                <div class="mb-3 col-12 mb-0">
                                    <div class="alert alert-warning">
                                        <h6 class="alert-heading fw-bold mb-1">Tem certeza que deseja desativar sua
                                            conta?</h6>
                                        <p class="mb-0">Após desativá-la, ela não poderá ser recuperada.</p>
                                    </div>
                                </div>
                                <form id="formAccountDeactivation" method="POST" action="php/DesativarContaOrg.php">
                                    <div class="form-check mb-3">
                                        <input class="form-check-input" type="checkbox" name="accountActivation" id="desativarConta" />
                                        <label class="form-check-label" for="accountActivation" required>Confirmar
                                            Desativação</label>
                                    </div>
                                    <button class="btn btn-danger deactivate-account" id="submitDesativa">Desativar
                                        Conta</button>
                                </form>
                            </div>
                        </div>
                        <!-- /dasativar conta -->
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
        <!-- Overlay -->
    </div>
    <!-- / Layout wrapper -->

    <?php require_once('linkFinal.php'); ?>
    <?php include_once('php/mensagemErro.php'); ?>
    <?php include_once('php/mensagemSucesso.php'); ?>

    <!-- cdn jquery mask -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js" integrity="sha512-pHVGpX7F/27yZ0ISY+VVjyULApbDlD0/X0rgGbTqCE7WFW5MezNTWG/dnhtbBuICzsd0WQPgpE4REBLv+UqChw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <!-- minhas mascaras -->
    <script src="assets/js/mascara.js"></script>

    <!-- jquery validate plugin -->
    <script src="assets/js/cadastroEntidade.js"></script>
    <script src="assets/js/jqueryValidate/jquery.validate.min.js"></script>
    <script src="assets/js/jqueryValidate/localization/messages_pt_BR.js"></script>

    <!-- aplica o jquery validate, meu arquivo -->
    <script src="assets/js/updateEnt.js"></script>
    <script src="assets/js/desativaConta.js"></script>

    <!-- desbloqueia botoes -->
    <script src="assets/js/entEditarPerfil.js"></script>

    <script src="assets/js/entEditarResp.js"></script>

    <!-- quando seleciona a imagem ela é mostrada na div -->
    <script src="assets/js/imagemPreview.js"></script>

    <!-- js cep -->
    <script src="assets/js/cep.js"></script>
    <!-- confere se a cidade e eo estado estão ok -->
    <script src="assets/js/cepGuaraVerifica.js"></script>

</body>

</html>