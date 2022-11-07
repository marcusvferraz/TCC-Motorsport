<!DOCTYPE html>

<html lang="pt_br">
<head>
  <!-- basic -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <!-- mobile metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="viewport" content="initial-scale=1, maximum-scale=1">
  <!-- site metas -->
  <title>Motorsport</title>
  <meta name="keywords" content="">
  <meta name="description" content="">
  <meta name="author" content="">
  <!-- bootstrap css -->
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <!-- style css -->
  <link rel="stylesheet" href="css/style.css">
  <!-- Responsive-->
  <link rel="stylesheet" href="css/responsive.css">
  <!-- fevicon -->
  <link rel="icon" href="images/fevicon.png" type="image/gif" />
  <!-- Scrollbar Custom CSS -->
  <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
  <!-- Tweaks for older IEs-->
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
                  <a href="index.php"><img src="images/logo.png" alt="#" /></a>
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
                  <li class="nav-item active">
                    <a class="nav-link" href="index.php">Inicio</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="veiculos.php">Veiculos</a>
                  </li>
                 
                  <li class="nav-item">
                    <a class="nav-link" href="sobre.php">Sobre</a>
                  </li>
                  <!--------->
                  <!--------->
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
      <ol class="carousel-indicators">
        <li data-target="#banner1" data-slide-to="0" class="active"></li>
        <li data-target="#banner1" data-slide-to="1"></li>
        <li data-target="#banner1" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <div class="container">
            <div class="carousel-caption">
              <div class="row">
                <div class="col-md-6">
                  <div class="text-bg">
                    <h1>Veiculos seminovos</h1>
                    <p></p>
                    <a href="#">Ver Mais</a>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="text_img">
                    <figure><img src="images/slide2vh.png" alt="#" /></figure>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="carousel-item">
          <div class="container">
            <div class="carousel-caption">
              <div class="row">
                <div class="col-md-6">
                  <div class="text-bg">
                    <span></span>
                    <h1>Veiculos Esportivos</h1>
                    <p></p>
                    <a href="#">Ver mais</a>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="text_img">
                    <figure><img src="images/lancerx.png" alt="#" /></figure>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="carousel-item">
          <div class="container">
            <div class="carousel-caption">
              <div class="row">
                <div class="col-md-6">
                  <div class="text-bg">
                    <span></span>
                    <h1>Veiculos Importados</h1>
                    <p></p>
                    <a href="#">Ver mais</a>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="text_img">
                    <figure><img src="images/bmwa1.png" alt="#" /></figure>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
  </section>
  <!-- end banner -->
  
  <!-- three_box -->
  <div class="three_box">
    <center>
      <h1>Pesquisar em nosso estoque</h1> 
    </center>
    
<center>



<div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="box_text">

          <div class="container">
  <div class="row">
    <div class="col">
        <!----->
  <style>
.dropbtn {
  background-color: #004AAD;
  color: white;
  padding: 16px;
  font-size: 16px;
  border: none;
  cursor: pointer;
}

.dropbtn:hover, .dropbtn:focus {
  background-color: #004AAD;
}

#myInput {
  box-sizing: border-box;
  background-image: url('searchicon.png');
  background-position: 14px 12px;
  background-repeat: no-repeat;
  font-size: 16px;
  padding: 14px 20px 12px 45px;
  border: none;
  border-bottom: 1px solid #ddd;
}

#myInput:focus {outline: 3px solid #ddd;}

.dropdown {
  position: relative;
  display: inline-block;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #FFFFFF;
  min-width: 230px;
  overflow: auto;
  border: 1px solid #ddd;
  z-index: 1;
}

.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

.dropdown a:hover {background-color: #ddd;}

.show {display: block;}
</style>




<div class="dropdown">
            <button onclick="myFunction1()" class="btn btn-outline-success blue" type="submit">Ano</button>
  <div id="myDropdown1" class="dropdown-content">
    <input type="text" placeholder="Search.." id="myInput1" onkeyup="filterFunction1()">
    <a href="#about">2011</a>
    <a href="#base">2012</a>
    <a href="#blog">2013</a>
    <a href="#contact">2014</a>
    <a href="#custom">2015</a>
    <a href="#support">2016</a>
    <a href="#tools">2017</a>
    <a href="#tools">2018</a>
    <a href="#tools">2019</a>
    <a href="#tools">2020</a>
    <a href="#tools">2021</a>
    <a href="#tools">2022</a>
  </div>
</div>

<script>
function myFunction1() {
  document.getElementById("myDropdown1").classList.toggle("show");
}

function filterFunction1() {
  var input, filter, ul, li, a, i;
  input = document.getElementById("myInput1");
  filter = input.value.toUpperCase();
  div = document.getElementById("myDropdown1");
  a = div.getElementsByTagName("a");
  for (i = 0; i < a.length; i++) {
    txtValue = a[i].textContent || a[i].innerText;
    if (txtValue.toUpperCase().indexOf(filter) > -1) {
      a[i].style.display = "";
    } else {
      a[i].style.display = "none";
    }
  }
}
</script>     
  
      <!---->
    </div>
    <div class="col">
      <!---->
 <style>
.dropbtn {
  background-color: #004AAD;
  color: white;
  padding: 16px
  font-size: 16px;
  border: none;
  cursor: pointer;
}

.dropbtn:hover, .dropbtn:focus {
  background-color: #004AAD;
}

#myInput {
  box-sizing: border-box;
  background-image: url('searchicon.png');
  background-position: 14px 12px;
  background-repeat: no-repeat;
  font-size: 16px;
  padding: 14px 20px 12px 45px;
  border: none;
  border-bottom: 1px solid #ddd;
}

#myInput:focus {outline: 3px solid #ddd;}

.dropdown {
  position: relative;
  display: inline-block;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #FFFFFF;
  min-width: 230px;
  overflow: auto;
  border: 1px solid #ddd;
  z-index: 1;
}

.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

.dropdown a:hover {background-color: #ddd;}

.show {display: block;}
</style>
</head>
<body>



<div class="dropdown">
<button onclick="myFunction2()" class="btn btn-outline-success blue" type="submit">Marca</button>
  <div id="myDropdown2" class="dropdown-content">
    <input type="text" placeholder="Search.." id="myInput2" onkeyup="filterFunction2()">
    <a href="#about">car</a>
    <a href="#base">car</a>
    <a href="#blog">car</a>
    <a href="#contact">car</a>
    <a href="#custom">car</a>
    <a href="#support">2016</a>
    <a href="#tools">2017</a>
    <a href="#tools">2018</a>
    <a href="#tools">2019</a>
    <a href="#tools">2020</a>
    <a href="#tools">2021</a>
    <a href="#tools">2022</a>
  </div>
</div>

<script>
function myFunction2() {
  document.getElementById("myDropdown2").classList.toggle("show");
}

function filterFunction2() {
  var input, filter, ul, li, a, i;
  input = document.getElementById("myInput2");
  filter = input.value.toUpperCase();
  div = document.getElementById("myDropdown2");
  a = div.getElementsByTagName("a");
  for (i = 0; i < a.length; i++) {
    txtValue = a[i].textContent || a[i].innerText;
    if (txtValue.toUpperCase().indexOf(filter) > -1) {
      a[i].style.display = "";
    } else {
      a[i].style.display = "none";
    }
  }
}
</script>
      <!---->
    </div>
    <div class="col">
      <form class="d-flex" role="search">
        
        <button class="btn btn-outline-success blue" type="submit">Pesquisar</button>
      </form>
    </div>
  </div>
</div>  
</center>
    
  


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