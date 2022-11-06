<?php
if ($_GET) {
    $id = $_GET['id'];
    include_once('conexao/Conexao.php');

    $sql = "SELECT * FROM `tbl_organizacao`,`tbl_responsavel` WHERE `org_Id`=$id AND `fk_Org_Responsavel` =$id ";

    $rs = mysqli_query($con, $sql) or die("Erro ao selecionar a campanha");

    $dados = mysqli_fetch_array($rs);

    $orgCNPJ = $dados['org_CNPJ'];

    $orgNomeFantasia = $dados['org_NomeFantasia'];
    $orgCep = $dados['org_CEP'];
    $orgEstado = $dados['org_Estado'];
    $orgCidade = $dados['org_Cidade'];
    $orgBairro = $dados['org_Bairro'];
    $orgRua = $dados['org_Rua'];
    $orgNumero = $dados['org_Numero'];
    $orgComplemento = $dados['org_Complemento'];
    $orgSite = $dados['org_Site'];
    $orgTelefone1 = $dados['org_Telefone1'];
    $orgTelefone2 = $dados['org_Telefone2'];
    $orgCelular = $dados['org_Celular'];
    $orgSobre = $dados['org_Sobre'];
    $orgEmail = $dados['login_Organizacao'];
    $orgImagem = $dados['org_ImagemLogo'];
    $ordSobre = $dados['org_Sobre'];

    // responsavel
    $respNome = $dados['resp_Nome'];
} else {
    header('location: slCampanhas.php');
}

?>


<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- link de inicio -->
    <?php require_once('linkInicio.php'); ?>

    <!-- CSS ADCIONAL -->
    <link rel="stylesheet" href="assets/css/teste.css">

</head>

<body class="bg-white">
    <!-- header -->
    <header>
        <nav class="navbar navbar-expand-md fixed-top menu-navegacao ">
            <div class="container">
                <a class="navbar-brand" href="index.php"><img src="img/svgIcon/logoDoar.svg" width="30px">Do Ar</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon align-itens-center justify-content-center d-flex"><img src="img/svgIcon/menu.png" width="35px"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-end " id="navbarNavDropdown">
                    <ul class="navbar-nav ">
                        <li class="nav-item">
                            <a class="nav-link " href="index.php">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="slCampanhas.php">Campanhas</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="slEntCards.php">Organizações</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link " href="slSobre.php">Sobre</a>
                        </li>
                    </ul>
                    <a href="login.php"><button class="btn btn-primary">Entrar</button></a>
                </div>
            </div>
        </nav>
    </header>
    <!-- fim do header -->

    <div class="header-img-inst">
    </div>
    <main class="container">
        <div class="row">
            <!-- imagem perfil  da inst -->
            <div class="col-11 col-sm-12 m-auto card-org">
                <div class="col-12 card-org-img d-flex justify-content-center ml-auto bg-white p-1">
                    <img src="img/imagemUsuario/orgPerfil/<?php echo $orgImagem; ?>">
                </div>
                <div class="cont-dados-inst">
                    <!-- nome e email -->
                    <div class="nome-inst mb-4">
                        <h2 class="outline"><?php echo $orgNomeFantasia; ?></h2>
                        <span><?php echo $orgEmail; ?></span>
                    </div>
                    <!-- colapso -->
                    <div class="inst-dados-body ">
                        <p class="text-center">
                            <button type="button" class="btn rounded-pill btn-icon btn-primary" data-bs-toggle="collapse" data-bs-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample" id="VerMais">
                                <img src="img/svgicon/mais.png" alt="" id="IconeAtivo">
                            </button>
                        </p>
                        <div class="collapse p-0" id="collapseExample">
                            <div class="m-auto col-10 p-0 mb-3">
                                <legend>Dados da Organização</legend>
                                <div class="bloco-borda col-12 d-flex flex-wrap">
                                    <div class=" col-12 col-md-6 ">
                                        <div class="col-12">
                                            <label for="nome" class="form-label mt-5 d-block">Nome Fantasia</label>
                                            <p class="  d-inline" id="nome"><?php echo $orgNomeFantasia; ?></p>
                                        </div>
                                        <div class="col-12">
                                            <label for="celular" class="form-label mt-5 d-block">celular</label>
                                            <p class=" d-inline" id="celular"><?php echo $orgCelular; ?></p>
                                        </div>
                                        <div class="col-12">
                                            <label class="form-label d-block mt-5" for="rua">Rua</label>
                                            <p id="rua" class=" d-inline"><?php echo  $orgRua . " nº" . $orgNumero; ?></p>
                                        </div>
                                        <div class="col-12">
                                            <label class="form-label d-block mt-5" for="bairro">Bairro</label>
                                            <p class="  d-inline" id="bairro"><?php echo  $orgBairro; ?></p>
                                        </div>
                                        <div class="col-12">
                                            <label class="form-label d-block mt-5" for="complemento">Complemento</label>
                                            <p id="complemento" class="  d-inline"><?php echo  $orgComplemento; ?></p>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-6">
                                        <div class="col-12">
                                            <label for="site" class="form-label mt-5  d-block">Site</label>
                                            <p class="  d-inline" id="site"><?php echo $orgSite; ?></p>
                                        </div>
                                        <div class="col-12">
                                            <label for="telefone1" class="form-label mt-5  d-block">telefone</label>
                                            <p class=" d-inline" id="telefone1"><?php echo $orgTelefone1 . ' / ' . $orgTelefone2; ?></p>
                                        </div>
                                        <div class="col-12">
                                            <label class="form-label d-block mt-5" for="cidade">Cidade</label>
                                            <p id="cidade" class="  d-inline"><?php echo $orgCidade . "-" . $orgEstado; ?></p>
                                        </div>
                                        <div class="col-12">
                                            <label class="form-label d-block mt-5" for="cep">Cep</label>
                                            <p id="cep" class="  d-inline"><?php echo $orgCep; ?></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="descricao col-10 m-auto">
                            <div class="row">
                                <legend>Descrição</legend>
                                <div class="bloco-borda  mb-5 d-flex ">
                                    <p><?php echo $orgSobre;
                                        ?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>


    <!-- FOOTER -->

    <?php require_once('footer.php'); ?>

    <!-- LINKS FIM -->

    <?php require_once('linkFinal.php'); ?>

    <script src="assets/js/entBotaoVerMais.js"></script>

</body>

</html>