<?php session_start(); ?>

<!DOCTYPE html>

<html lang="pt-br" class="light-style customizer-hide h-100" dir="ltr" data-theme="theme-default" data-assets-path="../assets/" data-template="vertical-menu-template-free">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

    <meta name="description" content="" />

    <?php require_once('linkInicio.php'); ?>
</head>

<body class="d-flex align-items-center h-100">
    <!-- Content -->

    <div class="container justify-content-center d-flex align-items-center">
        <div class="authentication-wrapper authentication-basic  col-11 col-md-6 col-lg-5 ">
            <div class="authentication-inner py-4">
                <!-- Forgot Password -->
                <div class="card">
                    <div class="card-body">
                        <!-- Logo -->
                        <div class="app-brand justify-content-center">

                        </div>
                        <!-- /Logo -->
                        <h4 class="mb-2">Atualizar a senha </h4>
                        <p class="mb-4">Digite a nova senha</p>
                        <form id="formAuthentication" class="mb-3" method="POST">

                            <div class="mb-4 form-password-toggle">
                                <div class="d-flex justify-content-between">
                                    <label class="form-label" for="password">Senha</label>
                                </div>
                                <div class="input-group input-group-merge">
                                    <input type="password" id="password" class="form-control" name="password" placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;" aria-describedby="password" required />
                                    <span class="input-group-text cursor-pointer"><i class="bx bx-hide"></i></span>

                                </div>
                            </div>

                            <div class="mb-3">
                                <button class="btn btn-primary d-grid w-100" type="submit">Salvar</button>
                            </div>

                        </form>
                        <div class="text-center">
                            <a href="login.php" class="d-flex align-items-center justify-content-center">
                                <i class="bx bx-chevron-left scaleX-n1-rtl bx-sm"></i>
                                Voltar ao login
                            </a>
                        </div>
                    </div>
                </div>
                <!-- /Forgot Password -->
            </div>
        </div>
    </div>

    <!-- / Content -->


    <?php

    $chave = filter_input(INPUT_GET, 'chave', FILTER_DEFAULT);

    $tipo = filter_input(INPUT_GET, 'valor', FILTER_DEFAULT);

    if (empty($chave) || empty($tipo)) {
        header('location: esqueceuASenha.php');
        die();
    }


    if ($_POST) {
        $senha = $_POST['password'];
        $senhaCrip = password_hash($senha, PASSWORD_DEFAULT);
        include_once('conexao/Conexao.php');

        if ($tipo = 1 || $tipo == '1') {
            $sql = "SELECT `doador_Id` FROM `tbl_doador` WHERE doador_RecuperarSenha = '$chave'";

            $rs =  mysqli_query($con, $sql) or die("Erro no select login");

            if ($inf = mysqli_fetch_array($rs)) {
                $nulo = "NULL";

                $id = $inf['doador_Id'];
                $sql2 = "UPDATE `tbl_doador` SET `doador_Senha`='$senhaCrip',`doador_RecuperarSenha` = $nulo WHERE doador_Id = $id limit 1";
                $rs2 =  mysqli_query($con, $sql2) or die("Erro no select login");
                if ($rs2) {
                    $_SESSION['sucesso'] = 15;
                    header('location: login.php');
                    die();
                } else {
                    $_SESSION['erro'] = 22;
                    header('location: esqueceuASenha.php');
                    die();
                }
            } else {
                $_SESSION['erro'] = 22;
                header('location: esqueceuASenha.php');
                die();
            }


            // organizacao
        } else if ($tipo = 2 || $tipo == '2') {
            // $sql3 = "SELECT  `org_Id`,  `login_Organizacao` FROM `tbl_organizacao` WHERE `login_Organizacao` = '$email' and `org_ativo`=1 limit 1";

            // $rs3 = mysqli_query($con, $sql3) or die("Erro no select login");

            // if ($inf3 = mysqli_fetch_array($rs3)) {
            //     echo "ok";
            // } else {
            //     $_SESSION['erro'] = 22;
            //     header('location: esqueceuASenha.php');
            //     die();
            // }
        }
    }
    ?>
    <?php require_once('linkFinal.php') ?>
    <?php include_once('php/mensagemErro.php'); ?>
    <?php include_once('php/mensagemSucesso.php'); ?>
</body>

</html>