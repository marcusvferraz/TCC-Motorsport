<?php session_start();

if ($_GET) {
    include_once('conexao/Conexao.php');

    $id = $_GET['id'];

    $sql = "SELECT * FROM `tbl_organizacao`,`tbl_responsavel` WHERE `org_Id`=$id AND `fk_Org_Responsavel` = $id ";

    $rs = mysqli_query($con, $sql) or die("Erro ao selecionar a campanha");

    $dados = mysqli_fetch_array($rs);

    $orgCNPJ = $dados['org_CNPJ'];
    $orgRazaoSocial = $dados['org_RazaoSocial'];
    $orgNomeFantasia = $dados['org_NomeFantasia'];
    $orgCep = $dados['org_CEP'];
    $orgEstado = $dados['org_Estado'];
    $orgCidade = $dados['org_Cidade'];
    $orgBairro = $dados['org_Bairro'];
    $orgRua = $dados['org_Rua'];
    $orgnumero = $dados['org_Numero'];
    $orgComplemento = $dados['org_Complemento'];
    $orgSite = $dados['org_Site'];
    $orgTelefone1 = $dados['org_Telefone1'];
    $orgTelefone2 = $dados['org_Telefone2'];
    $orgCelular = $dados['org_Celular'];
    $orgSobre = $dados['org_Sobre'];
    $dataCadastro = $dados['org_DataCadastroSite'];
    $orgEmail = $dados['login_Organizacao'];
    $orgStatus = $dados['org_ativo'];
    $orgImagem = $dados['org_ImagemLogo'];

    // responsavel
    $respId = $dados['resp_Id'];
    $respCpf = $dados['resp_CPF'];
    $respNome = $dados['resp_Nome'];
    $respEmail = $dados['resp_Email'];
    $respCelular = $dados['resp_Celular'];
}

$respCPFMascara = cpfMask($respCpf);

function cpfMask($cpf)
{
    $cpf = str_pad(($cpf), 11, '0', STR_PAD_LEFT);
    return $cpf ? "***." . substr($cpf, 3, 3) . "." . substr($cpf, 6, 3) . "-**" : substr($cpf, 0, 3) . "." . substr($cpf, 3, 3) . "." . substr($cpf, 6, 3) . "-" . substr($cpf, 9, 2);
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
    <link rel="stylesheet" href="assets/css/add2.css">

</head>

<body>
    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-content-navbar">
        <div class="layout-container">

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
                    <li class="menu-item active">
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
                                        <form id="form-Imagem" method="POST" enctype="multipart/form-data" action="php/admAtualizarImagemOrg.php">
                                            <div class="d-flex align-items-start align-items-sm-center gap-4">
                                                <input type="hidden" name="id" value="<?php echo $id; ?>">
                                                <img src="img/imagemUsuario/orgPerfil/<?php echo $orgImagem; ?> " alt="user-avatar" class="d-block rounded" height="100" width="100" id="file-ip-1-preview" />
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
                                            <form id="form-Org" method="POST" action="php/admEditarDadosOrg.php">
                                                <div class="row">
                                                    <!-- id -->
                                                    <div class="mb-3 col-1">
                                                        <label for="id" class="form-label">id</label>
                                                        <input type="text" name="id" value="<?php echo $id;   ?>" readonly class=" form-control">
                                                    </div>
                                                    <!-- email login -->
                                                    <div class="mb-3  col-sm-6  col-md-4">
                                                        <label for="emailLogin" class="form-label">email Login</label>
                                                        <input class="form-control" type="text" id="emailLogin" name="email" value="<?php echo $orgEmail; ?>" />
                                                    </div>
                                                    <!-- status -->
                                                    <div class="mb-3  col-sm-6  col-md-4">
                                                        <label for="emailLogin" class="form-label">status</label>
                                                        <select name="status" id="select" class="form-select">
                                                            <option value="1">Ativo</option>
                                                            <option value="0">Desativado</option>
                                                        </select>
                                                    </div>
                                                    <!-- data de cadastro -->
                                                    <div class="mb-3  col-sm-6  col-md-3">
                                                        <label for="emailLogin" class="form-label">Data de cadastro no site</label>
                                                        <input class="form-control" type="date" id="dataCadastro" name="dataCadastro" value="<?php echo $dataCadastro;  ?>" readonly />
                                                    </div>
                                                    <!-- razaoSocial -->
                                                    <div class="mb-3 col-12 col-sm-6 col-md-4">
                                                        <label for="razaoSocial" class="form-label">Razão Social</label>
                                                        <input class="form-control" type="text" id="razaoSocial" name="razaoSocial" value="<?php echo $orgRazaoSocial; ?>" required readonly />
                                                    </div>
                                                    <!-- CNPJ -->
                                                    <div class="mb-3 col-12 col-sm-6 col-md-3">
                                                        <label for="cnpj" class="form-label">CNPJ</label>
                                                        <input class="form-control" type="text" id="cnpj" name="cnpj" value="<?php echo $orgCNPJ; ?>" required readonly />
                                                    </div>
                                                    <!-- TITULO ESTABELECIMENTO (é o nome fantasia) -->
                                                    <div class="mb-3 col-12 col-sm-6 col-md-5">
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
                                                    <div class="mb-3 col col-sm-9 col-md-6 col-xl-7">
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
                                                        <button type="button" id="cancelar-org" class="btn btn-outline-secondary">Cancelar</button>

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
                                <form action="php/admUpdateResponsavel.php" id="form-responsavel" method="POST">
                                    <div class="row">
                                        <input type="hidden" name="id" value="<?php echo $id; ?>">
                                        <!-- nome -->
                                        <div class="mb-3 col-sm-6  col-md-3">
                                            <label for="nomeResponsavel" class="form-label">nome do Responsável</label>
                                            <input class="form-control" type="text" id="nomeResponsavel" name="nomeResponsavel" value="<?php echo $respNome; ?>" />
                                        </div>
                                        <!-- cpf -->
                                        <div class="mb-3 col-sm-6  col-md-3" id="caixaCpf">
                                            <label for="cpfResponsavel" class="form-label">cpf</label>
                                         
                                            <span class="form-control " id="cpfResp"><?php echo $respCPFMascara; ?></span>
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
                                <form action="php/admUpdateResponsavelCpf.php" id="TrocaResponsavel" method="POST">
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
                                            <input type="text" name="cpf"  class="form-control">
                                        </div>
                                        <!-- Email -->
                                        <div class="mb-3 col-sm-6  col-md-3">
                                            <label for="emailResponsavel" class="form-label">Email </label>
                                            <input class="form-control" type="text" id="emailResponsavel" name="emailResponsavel"  />
                                        </div>
                                        <!-- celular -->
                                        <div class="mb-3  col-sm-6  col-md-3">
                                            <label for="celularResponsavel" class="form-label">Celular</label>
                                            <input class="form-control celular" type="text" id="celularResponsavel" name="celularResponsavel"  />
                                        </div>
                                        <!-- botoes -->
                                        <div class="mt-2" id="botoesResponsavel">
                                            <button type="submit" class="btn btn-primary me-2">Salvar</button>
                                           
                                        </div>
                                    </div>
                                </form>
                                <button class="btn btn-primary" id="habilitar-responsavel">Editar</button>

                            </div>
                        </div>
                        <!-- /responsável -->

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
    <script src="assets/js/selectAdm.js"></script>
    <script src="assets/js/entEditarResp.js"></script>

    <!-- quando seleciona a imagem ela é mostrada na div -->
    <script src="assets/js/imagemPreview.js"></script>

    <!-- js cep -->
    <script src="assets/js/cep.js"></script>
    <!-- confere se a cidade e eo estado estão ok -->
    <script src="assets/js/cepGuaraVerifica.js"></script>

</body>

</html>