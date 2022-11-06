<?php session_start();
$_SESSION['sucesso'] = '';
$_SESSION['erro'] = '';
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
                            <a class="nav-link ativo" aria-current="page" href="slSobre.php">Sobre</a>
                        </li>
                    </ul>
                    <a href="login.php"><button class="btn btn-primary">Entrar</button></a>
                </div>
            </div>
        </nav>
    </header>
    <!-- fim do heaader -->

    <div id="sobreImg"></div>
    <div class="container mt-5 mb-4">
        <div class="row featurette ">
            <div class="col-md-7  align-self-center ">

                <h3 class="featurette-heading fw-normal lh-1 underline--magical d-inline especialLetra">Sobre o site</h3>

                <p class="lead mt-3">Some great placeholder content for the first featurette here. Imagine some exciting
                    prose here.</p>
            </div>
            <div class="col-md-5 justify-content-end d-flex ">
                <img src="img/pessoas/about.png" alt="" class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="400" height="400">
            </div>
            <div class="justify-content-end d-flex"><span class="creditos"><a href="https://storyset.com/business" target="_blank">Business illustrations by Storyset</a></span></div>

        </div>

        <hr class="featurette-divider">

        <div class="row featurette justify-content-end d-flex">
            <div class="col-md-5 justify-content-start d-flex ">
                <img src="img/pessoas/sobre.png" alt="" class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid" width="400" height="400">
            </div>

            <div class="col-md-7 order-md-2  align-self-center ">
                <h3 class="featurette-heading fw-normal lh-1  underline--magical d-inline especialLetra">Sobre nós</h3>
                <br>
                <p class="lead mt-3">Another featurette? Of course. More placeholder content here to give you an idea of
                    how
                    this layout would work with some actual real-world content in place.</p>
            </div>
        </div>
        <div>
            <span class="creditos "><a href="https://storyset.com/web" target="_blank">Web illustrations by
                    Storyset</a></span>
        </div>
    </div>

    <!-- FOOTER -->

    <?php require_once('footer.php'); ?>

    <!-- LINKS FIM -->

    <?php require_once('linkFinal.php'); ?>

</body>

</html>