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
    <link rel="stylesheet" href="assets/css/adicional.css">
    <link rel="stylesheet" href="assets/css/add2.css">

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
                            <a class="nav-link  ativo" aria-current="page" href="index.php">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="slCampanhas.php">Campanhas</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="slEntCards.php">Organizações</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="slSobre.php">Sobre</a>
                        </li>
                    </ul>
                    <a href="login.php"><button class="btn btn-primary">Entrar</button></a>

                </div>
            </div>
        </nav>
    </header>
    <!-- fim do heaader -->

    <!-- IMAGEM -->
    <div class="img-principal bg-primary">
        <div>
            <div class="row m-0 p-0">
                <div id="texto-principal" class="col-12 col-md-6  justify-content-center d-flex align-items-center">
                    <div class="texto-principal ">
                        <h2 class="display-1 ">Do Ar
                            <hr>
                        </h2>
                        <p class="display-6">Conheça as campanhas sociais de Guaratinguetá!</p>
                    </div>
                </div>
                <div id="imagem-principal-celular" class="col-12 col-md-6 p-0 justify-content-center d-flex align-items-center">
                    <img src="img/background/celularOk.png" id="Hide">
                </div>
            </div>
        </div>
    </div>
    <!-- /IMAGEM -->

    <!-- NOSSOS SERVIÇOS -->
    <div class="jumbotron m-0">
        <div class="container">
            <div class="justify-content-center d-flex">
                <h2 class=" especialLetra underline--magical d-inline mt-5">Nossos Serviços</h2>
            </div>
            <div class="container px-4 py-5" id="icon-grid">
                <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4 g-4 py-5">
                    <div class="col d-flex align-items-start">
                        <div class="container-icones  justify-content-center d-flex align-items-center col-2">
                            <img src="img/svgIcon/check.png" class="icone-filtro img-botran">
                        </div>
                        <div class=" col-10">
                            <h4 class="fw-bold mb-0">Featured title</h4>
                            <p>Paragraph of text beneath the heading to explain the heading.</p>
                        </div>
                    </div>
                    <div class="col d-flex align-items-start">
                        <div class="container-icones  justify-content-center d-flex align-items-center col-2">
                            <img src="img/svgIcon/check.png" class="icone-filtro">
                        </div>
                        <div class=" col-10">
                            <h4 class="fw-bold mb-0">Featured title</h4>
                            <p>Paragraph of text beneath the heading to explain the heading.</p>
                        </div>
                    </div>
                    <div class="col d-flex align-items-start">
                        <div class="container-icones  justify-content-center d-flex align-items-center col-2">
                            <img src="img/svgIcon/check.png" class="icone-filtro">
                        </div>
                        <div class=" col-10">
                            <h4 class="fw-bold mb-0">Featured title</h4>
                            <p>Paragraph of text beneath the heading to explain the heading.</p>
                        </div>
                    </div>
                    <div class="col d-flex align-items-start">
                        <div class="container-icones  justify-content-center d-flex align-items-center col-2">
                            <img src="img/svgIcon/check.png" class="icone-filtro">
                        </div>
                        <div class=" col-10">
                            <h4 class="fw-bold mb-0">Featured title</h4>
                            <p>Paragraph of text beneath the heading to explain the heading.</p>
                        </div>
                    </div>
                    <div class="col d-flex align-items-start">
                        <div class="container-icones  justify-content-center d-flex align-items-center col-2">
                            <img src="img/svgIcon/check.png" class="icone-filtro">
                        </div>
                        <div class=" col-10">
                            <h4 class="fw-bold mb-0">Featured title</h4>
                            <p>Paragraph of text beneath the heading to explain the heading.</p>
                        </div>
                    </div>
                    <div class="col d-flex align-items-start">
                        <div class="container-icones  justify-content-center d-flex align-items-center col-2">
                            <img src="img/svgIcon/check.png" class="icone-filtro">
                        </div>
                        <div class=" col-10">
                            <h4 class="fw-bold mb-0">Featured title</h4>
                            <p>Paragraph of text beneath the heading to explain the heading.</p>
                        </div>
                    </div>
                    <div class="col d-flex align-items-start">
                        <div class="container-icones  justify-content-center d-flex align-items-center col-2">
                            <img src="img/svgIcon/check.png" class="icone-filtro">
                        </div>
                        <div class=" col-10">
                            <h4 class="fw-bold mb-0">Featured title</h4>
                            <p>Paragraph of text beneath the heading to explain the heading.</p>
                        </div>
                    </div>
                    <div class="col d-flex align-items-start">
                        <div class="container-icones  justify-content-center d-flex align-items-center col-2">
                            <img src="img/svgIcon/check.png" class="icone-filtro">
                        </div>
                        <div class=" col-10">
                            <h4 class="fw-bold mb-0">Featured title</h4>
                            <p>Paragraph of text beneath the heading to explain the heading.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /NOSSOS SERVIÇOS -->
    <!-- FAÇA PARTE -->
    <div class="faca-parte bg-primary d-flex justify-content-center align-items-center">
        <h3>Conheça a plataforma <a href="login.php"><button class="btn bt-white">Cadastre-se</button></a></h3>
    </div>
    <!-- /FAÇA PARTE -->
    <!-- PERGUNTAS -->

    <div class="container p-5 ps-0 pe-0 ">
        <!-- Accordion -->
        <div class=" flex-grow-1 ">
            <!-- Accordion -->
            <h5 class="mt-4">Perguntas frequentes</h5>
            <div class="row">
                <div class="col-md-6 mb-4 mb-md-0">
                    <small class="text-light fw-semibold">Sobre a plataforma</small>
                    <div class="accordion mt-3" id="accordionExample">
                        <div class="card accordion-item active">
                            <h2 class="accordion-header" id="heading1">
                                <button type="button" class="accordion-button" data-bs-toggle="collapse" data-bs-target="#accordion1" aria-expanded="true" aria-controls="accordion1">
                                    Accordion Item 1
                                </button>
                            </h2>

                            <div id="accordion1" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    Lemon drops chocolate cake gummies carrot cake chupa chups muffin topping. Sesame snaps icing
                                    marzipan gummi bears macaroon dragée danish caramels powder. Bear claw dragée pastry topping
                                    soufflé. Wafer gummi bears marshmallow pastry pie.
                                </div>
                            </div>
                        </div>
                        <div class="card accordion-item">
                            <h2 class="accordion-header" id="headingTwo">
                                <button type="button" class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#accordionTwo" aria-expanded="false" aria-controls="accordionTwo">
                                    Accordion Item 2
                                </button>
                            </h2>
                            <div id="accordionTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    Dessert ice cream donut oat cake jelly-o pie sugar plum cheesecake. Bear claw dragée oat cake
                                    dragée ice cream halvah tootsie roll. Danish cake oat cake pie macaroon tart donut gummies.
                                    Jelly beans candy canes carrot cake. Fruitcake chocolate chupa chups.
                                </div>
                            </div>
                        </div>
                        <div class="card accordion-item">
                            <h2 class="accordion-header" id="headingThree">
                                <button type="button" class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#accordionThree" aria-expanded="false" aria-controls="accordionThree">
                                    Accordion Item 3
                                </button>
                            </h2>
                            <div id="accordionThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    Oat cake toffee chocolate bar jujubes. Marshmallow brownie lemon drops cheesecake. Bonbon
                                    gingerbread marshmallow sweet jelly beans muffin. Sweet roll bear claw candy canes oat cake
                                    dragée caramels. Ice cream wafer danish cookie caramels muffin.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 mb-4 mb-md-0">
                    <small class="text-light fw-semibold">Basic Accordion</small>
                    <div class="accordion mt-3" id="accordionExample">
                        <div class="card accordion-item active">
                            <h2 class="accordion-header" id="headingOne">
                                <button type="button" class="accordion-button" data-bs-toggle="collapse" data-bs-target="#accordionOne" aria-expanded="true" aria-controls="accordionOne">
                                    Accordion Item 1
                                </button>
                            </h2>

                            <div id="accordionOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    Lemon drops chocolate cake gummies carrot cake chupa chups muffin topping. Sesame snaps icing
                                    marzipan gummi bears macaroon dragée danish caramels powder. Bear claw dragée pastry topping
                                    soufflé. Wafer gummi bears marshmallow pastry pie.
                                </div>
                            </div>
                        </div>
                        <div class="card accordion-item">
                            <h2 class="accordion-header" id="headingTwo">
                                <button type="button" class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#accordionTwo" aria-expanded="false" aria-controls="accordionTwo">
                                    Accordion Item 2
                                </button>
                            </h2>
                            <div id="accordionTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    Dessert ice cream donut oat cake jelly-o pie sugar plum cheesecake. Bear claw dragée oat cake
                                    dragée ice cream halvah tootsie roll. Danish cake oat cake pie macaroon tart donut gummies.
                                    Jelly beans candy canes carrot cake. Fruitcake chocolate chupa chups.
                                </div>
                            </div>
                        </div>
                        <div class="card accordion-item">
                            <h2 class="accordion-header" id="headingThree">
                                <button type="button" class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#accordionThree" aria-expanded="false" aria-controls="accordionThree">
                                    Accordion Item 3
                                </button>
                            </h2>
                            <div id="accordionThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    Oat cake toffee chocolate bar jujubes. Marshmallow brownie lemon drops cheesecake. Bonbon
                                    gingerbread marshmallow sweet jelly beans muffin. Sweet roll bear claw candy canes oat cake
                                    dragée caramels. Ice cream wafer danish cookie caramels muffin.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--/ Accordion -->

    <!-- FOOTER -->

    <?php require_once('footer.php'); ?>

    <!-- LINKS FIM -->

    <?php require_once('linkFinal.php'); ?>


</body>

</html>