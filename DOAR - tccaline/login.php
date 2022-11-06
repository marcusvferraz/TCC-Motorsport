<?php session_start(); ?>
<!DOCTYPE html>

<html lang="pt-br" class="light-style customizer-hide" dir="ltr" data-theme="theme-default" data-assets-path="../assets/" data-template="vertical-menu-template-free">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

    <title>Do Ar</title>

    <meta name="description" content="" />

    <!-- link de inicio -->
    <?php require_once('linkInicio.php'); ?>

</head>

<body class="vh-100 align-items-center d-flex">
    <!-- Content -->

    <div class="container-xxl container">
        <div class="row justify-content-center  ">
            <div class="authentication-wrapper authentication-basic  col-11 col-md-6 col-lg-5 ">
                <div class="authentication-inner">
                    <!-- Register -->
                    <div class="card">
                        <div class="card-body">
                            <h4 class="mb-4"><a href="index.php"><img src="img/svgIcon/logoDoar.svg" width="30px"></a> Login</h4>

                            <form id="formAuthentication" class="mb-3" action="php/processaLogin.php" method="POST">
                                <div class="mb-3 ">
                                    <label for="logarComo" class="form-label">entrar como</label>
                                    <select name="logar" id="logarComo" class="form-select" required>
                                        <option value="1">Doador</option>
                                        <option value="2">Organização</option>
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label for="cel" class="form-label">Email</label>
                                    <input type="email" class="form-control" id="email" name="emailLogin" required autofocus />
                                </div>
                                <div class="mb-4 form-password-toggle">
                                    <div class="d-flex justify-content-between">
                                        <label class="form-label" for="password">Senha</label>
                                        <a href="esqueceuASenha.php">
                                            <small>Esqueceu a senha?</small>
                                        </a>
                                    </div>
                                    <div class="input-group input-group-merge">
                                        <input type="password" id="password" class="form-control" name="password" placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;" aria-describedby="password" required />
                                        <span class="input-group-text cursor-pointer"><i class="bx bx-hide"></i></span>
                                        <span id="oculto"></span>
                                    </div>
                                </div>

                                <div class="mb-3">
                                    <button class="btn btn-primary d-grid w-100" type="submit">Entrar</button>
                                </div>
                            </form>

                            <p class="text-center">
                                <span>Cadastre-se como </span>
                                <a href="cadUsuario.php">
                                    <span> Usuario</span>
                                </a>
                                ou
                                <a href="cadEntidade.php">
                                    <span> Organização</span>
                                </a>
                            </p>
                        </div>
                    </div>
                    <!-- /Register -->
                </div>
            </div>
        </div>
    </div>
    <!-- / Content -->

    <!-- links fim -->

    <?php require_once('linkFinal.php'); ?>
    <?php include_once('php/mensagemErro.php'); ?>
    <?php include_once('php/mensagemSucesso.php'); ?>

</body>

</html>