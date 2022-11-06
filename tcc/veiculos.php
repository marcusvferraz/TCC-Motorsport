<!DOCTYPE html>

<html lang="pt_br">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <!-- mobile  -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="viewport" content="initial-scale=1, maximum-scale=1">
  <!-- site  -->
  <title>Motorsport</title>
  <meta name="keywords" content="">
  <meta name="description" content="">
  <meta name="author" content="">
  <!-- bootstrap css -->
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <!-- style css -->
  <link rel="stylesheet" href="css/styleveh.css">
  <!-- Responsive-->
  <link rel="stylesheet" href="css/responsive.css">
  <!-- fevicon -->
  <link rel="icon" href="images/fevicon.png" type="image/gif" />
  <!-- Scrollbar Custom CSS -->
  <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
  <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
</head>
<!-- body -->

<body class="main-layout">
  <!-- loader  -->

  <!-- end loader -->
  <!-- header -->
  <header>
    <!-- header inner -->
    <div class="header">
      <div class="container-fluid">
        <div class="row">
          <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col logo_section">
            <div class="full">
              <div class="center-desk">
                <div class="logo">
                  <a href="index.html"><img src="images/logo.png" alt="#" /></a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-xl-9 col-lg-9 col-md-9 col-sm-9">
            <nav class="navigation navbar navbar-expand-md navbar-dark ">
              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample04" aria-controls="navbarsExample04"
                aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarsExample04">
                <ul class="navbar-nav mr-auto">
                  <li class="nav-item ">
                    <a class="nav-link" href="index.html">Inicio</a>
                  </li>
                  <li class="nav-item active">
                    <a class="nav-link" href="veiculos.php">Veiculos</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="marcas.php">Marcas</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="sobre.html">Sobre</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="contato.php">Contato</a>
                  </li>
                </li>
              </div>
            </nav>
          </div>
        </div>
      </div>
    </div>
  </header>
  <!-- end header inner -->
  <!-- end header -->
  <!-- banner -->
  <section class="banner_main">
    <div id="banner1" class="carousel slide" data-ride="carousel">
      </div>
  </section>
  <!-- end banner -->
  
  <!-- three_box -->
  <br>
  <div class="three_box">
    <center>
      <h1>Veiculos</h1> 
    </center>
    <!---Inicio dos cards para gerar as telas dos 
    <!---card-->
    <div class="container">
  <div class="row">
    <?php
      include('conexao.php');
      $sql = "SELECT * FROM tbl_veiculo, tbl_cor, tbl_combustivel, tbl_ano where Vei_Status = 1 ";
      $res = mysqli_query($con, $sql);
      
      $ids = array(
        "ids" => []
      );

      if($res){
        while($dados = mysqli_fetch_array($res)) {
          
          $idd = $dados['Vei_Id'];
          array_push($ids['ids'], $idd);
        }
        for($index = 0; $index < count($ids['ids']); $index++){
          $id = $ids['ids'][$index];
          $resultado = array(
            "id"=>[],
            "fotos"=> [],
            "placa"=>[],
            "desc"=>[],
            "valor"=>[],
            "km"=>[],
            "obs"=>[],
            "acessorios"=> [],
            "modelo" => [],
            "tipo"=> [],
            "cor"=> [],
            "combustivel"=> [],
            "ano"=> []
          );
          $sqlll = "SELECT * FROM tbl_veiculo, tbl_cor, tbl_combustivel, tbl_ano where Vei_Id = $id ";
          $resss = mysqli_query($con, $sqlll);
          $dado = mysqli_fetch_array($resss);
          $status = 1;
          if($status != 0 || $status != "0"){
              // carro não está arquivado
              array_push($resultado['id'], $dado['Vei_Id']);
              array_push($resultado['placa'], $dado['Vei_Placa']);
              array_push($resultado['desc'], $dado['Vei_Descricao']);
              array_push($resultado['valor'], $dado['Vei_Preco']);
              array_push($resultado['km'], $dado['Vei_KM']);
              array_push($resultado['obs'], $dado['Vei_Observacao']);
              array_push($resultado['acessorios'], $dado['acessorios']);
              array_push($resultado['cor'], $dado['Cor_Nome']);
              array_push($resultado['combustivel'], $dado['Com_Nome']);
              array_push($resultado['ano'], $dado['Ano_Ano']);
              $modelo_id = $dado['tbl_Modelo_fk_tbl_Marca_tbl_Modelo'];
              $sqll = "SELECT * from tbl_modelo where Mod_Id=$modelo_id";
              $res = mysqli_query($con, $sqll);
              while($ress = mysqli_fetch_array($res)){
                  array_push($resultado['modelo'], $ress['Mod_Nome']);
                  $marca = $ress['fk_tbl_Marca_tbl_Modelo'];
                  $sqll = "SELECT tbl_Tipo_Veiculo_tipo_id from tbl_marca where Mar_Id=$marca";
                  $res1 = mysqli_query($con, $sqll);
                  
                  while($marca_id = mysqli_fetch_array($res1)){
                      $marca_id_ = $marca_id['tbl_Tipo_Veiculo_tipo_id'];
                      
                  }
                  
              }

              $tipo1 = "SELECT * from tbl_tipo_veiculo where Tipo_id=$marca_id_";
                $res2 = mysqli_query($con, $tipo1);
                while($tipo2 = mysqli_fetch_array($res2)){
                    array_push($resultado['tipo'], $tipo2['Tipo_Nome']);

                }

                // array_push($resultado['veiculo'], $dado['tbl_Modelo_fk_tbl_Marca_tbl_Modelo']);
                
                // pega as fotos
                $sql = "SELECT * FROM tbl_fotoveiculo where tblVeiculo_Fot_Id=$id";
                $res_ = mysqli_query($con, $sql);
                if($res_){
                    // veiculo tem foto
                    while($dados = mysqli_fetch_array($res_)){
                        array_push($resultado['fotos'], $dados['Fot_Imagem']);
                    }
                } else {
                    // foto tem de ser uma padrão no image do sistema
                    $caminho_foto_no_image = "";
                    array_push($resultado['fotos'], $caminho_foto_no_image);
                }
              echo "<div class='col'>
                        <!---->
                        <div class='card' style='width: 18rem;'>
                    

                    <div class='card-body'>
                      <div
                    style='--swiper-navigation-color: #fff; --swiper-pagination-color: #fff'
                    class='swiper mySwiper2'
                    >
                    <div class='swiper-wrapper'><?php
                          
                                echo '
                                    <div class='swiper-slide'>
                                        <img src='data:image;base64,".base64_encode($foto)."' />
                                    </div>
                                ';
                            }
                        ?>
                        
                    </div>
                    <div class='swiper-button-next'></div>
                    <div class='swiper-button-prev'></div>
                    </div>
                    <div thumbsSlider='' class='swiper mySwiper'>
                    <div class='swiper-wrapper'>
                            }
                        ?>
                    </div>
                    </div>
                      <p class='card-text'>". $resultado['modelo'][0] ."</p>
                      <h5 class='card-title'>3.0 HSE 4X4 V6 24V TURBO DIESEL 4P AUTOMÁTICO</h5>
                    </div>
                    <ul class='list-group list-group-flush'>
                      <li class='list-group-item'>   </li>
                      <li class='list-group-item'> <h6></h6></li> 

                    </ul>
                    <!----<div class='card-body'>
                      <a href='#' class='card-link'>Card link</a>
                      <a href='#' class='card-link'>Another link</a>
                    </div> --->
                  </div>
                        <!---->
              </div>";
              flush();
          } else {
              // redireciona para uma página qualquer
          }
        }
      
        }
        // carro existe
      
        
    
    ?>
    
    
    <!--fim-card-->
  <!--  footer -->
  
  <br>
  <footer>
    <div class="footer">
      <div class="container">
        <div class="row">

          <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
            <h3>Sobre</h3>
            <ul class="conta">
              <li>Projeto de ‘vitrine’ para concessionaria em andamento!</li>
            </ul>
          </div>

          <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
            <img class="logo1" src="images/logo.png" alt="#" />
            <ul class="social_icon">
              <li><a href="https://api.whatsapp.com/send?1=pt_BR&phone=5512997213697"><i class="fa fa-whatsapp" aria-hidden="true"></i></a></li>
              <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
              <li><a href="https://www.instagram.com/motorsporttcc/"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
            </ul>
          </div>
          <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
            <h3>Sobre Nós</h3>
            <ul class="about_us">
              <li>Somos três programadores juniors, desenvolvendo nosso primeiro projeto para TCC, que está sendo feito com
muita força de vontade e planejamento! Espero que gostem do nosso trabalho!</li>
            </ul>
          </div>
          <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
            <form class="bottom_form">
              <h3>Fale conosco</h3>
              <input class="enter" placeholder="Digite seu email" type="text" name="txemail">
              <input class="enter" placeholder="Digite sua mensagem" type="text" name="txmensagem">
              <button class="sub_btn">Enviar</button>
            </form>
          </div>
        </div>
      </div>
      <div class="copyright">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <p>© 2022 Projeto pensado e desenvolvido por<a href="https://www.instagram.com/motorsporttcc/"> Motorsporttcc</a></p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </footer>
  <!-- end footer -->
  <!-- Javascript files-->
  <script src="js/jquery.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.bundle.min.js"></script>
  <script src="js/jquery-3.0.0.min.js"></script>
  <!-- sidebar -->
  <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
  <script src="js/custom.js"></script>
</body>

</html>