



<?php




include('conexao.php');
$n = 1;
    if($n == 1) {
        // carro existe
        // faz a consulta sql obtendo o carro como parametro, ou seja, sql procura por veiculo de id = $_GET['c'];
        $tipo = 19;
        $sql = "SELECT * FROM tbl_veiculo, tbl_cor, tbl_combustivel, tbl_ano where Vei_Id=$tipo";
        $res = mysqli_query($con, $sql);
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
        if($res){
            // carro existe
            $dado = mysqli_fetch_array($res);
            $status = $dado['Vei_Status'];
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
                $sql = "SELECT * FROM tbl_fotoveiculo where tblVeiculo_Fot_Id=$tipo";
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
            } else {
                // redireciona para uma página qualquer
            }
        }
        
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <linkrel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@mdi/font@6.9.96/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="css/index.css">

</head>
<body class="main-layout">



    <div class="container">
        <div class="row justify-content-between">
            <div class="col-7 card">
                <!-- Car photos -->
                <!-- Swiper -->
                <div
                    style="--swiper-navigation-color: #fff; --swiper-pagination-color: #fff"
                    class="swiper mySwiper2"
                    >
                    <div class="swiper-wrapper">
                        <?php
                            for($photos = 0; $photos < count($resultado['fotos']); $photos++){
                                $foto = $resultado['fotos'][$photos];
                                echo '
                                    <div class="swiper-slide">
                                        <img src="img/'.$foto.'" />
                                    </div>
                                ';
                            }
                        ?>
                        
                    </div>
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                    </div>
                    <div thumbsSlider="" class="swiper mySwiper">
                    <div class="swiper-wrapper">
                        <?php
                            for($photos = 0; $photos < count($resultado['fotos']); $photos++){
                                $foto = $resultado['fotos'][$photos];
                                echo '
                                    <div class="swiper-slide">
                                    <img src="img/'.$foto.'" />
                                    </div>
                                ';
                            }
                        ?>
                    </div>
                    </div>
            </div>
            <div class="col-5 card card2">
                <!-- Car informations -->
                <h1><?php echo $resultado['modelo'][0] ?></h1>
                <div class="row">
                    <?php
                        if($resultado['tipo'][0] == "Caminhao"){
                            echo '<p class="model"><i class="mdi mdi-car"></i>&nbsp;'.$resultado["tipo"][0].'</p>';
                        }
                    ?>
                    
                </div>
                <div class="informations">
                    <div class="row">
                        <div class="col-3">
                            <p class="title">Ano</p>
                            <p class="sub"><?php echo $resultado['ano'][0] ?></p>
                        </div>
                        <div class="col-3">
                            <p class="title">KM</p>
                            <p class="sub"><?php echo $resultado['km'][0] ?></p>
                        </div>
                        <div class="col-3">
                            <p class="title">Combustível</p>
                            <p class="sub"><?php echo $resultado['combustivel'][0] ?></p>
                        </div>
                        <div class="col-3">
                            <p class="title">Cor</p>
                            <p class="sub"><?php echo $resultado['cor'][0] ?></p>
                        </div>
                    </div>
                </div>
                <p class="valor">R$<?php echo $resultado['valor'][0] ?></p>
                <br>
                <h2>Concessionária</h2>
                <p class="model"><i class="mdi mdi-store"></i>Via Veículos</p>
                <p class="local">Rua Joao Alencar, 33 - Centro, Guaratinguetá-SP</p>
                <p class="local"><i class="mdi mdi-phone"></i>&nbsp;00 00000-0000</p>
                <p class="local"><i class="mdi mdi-whatsapp"></i>&nbsp;00 00000-0000</p>

                <div class="row contatos justify-content-start">
                    <a class="btn mt-3" href="http://wa.me/5512992539073" target="_blank" rel="noopener noreferrer"><i class="mdi mdi-whatsapp"></i>&nbsp;Chamar no Whatsapp</a>
                </div>
            </div>
        </div>
        <div class="row justify-content-between">
            <div class="col-7 card">
                <div class="acessorios card3">
                    <h2 class="h2">Acessórios</h2>
                    <?php
                        $acessorios = $resultado['acessorios'][0];
                        if(str_contains($acessorios, "@corta@")){
                            $acessorios = explode("@corta@", $acessorios);
                            for($i =0; $i < count($acessorios); $i++){
                                $sql = "SELECT Aces_Nome from tbl_acessorios where Aces_Id=$acessorios[$i]";
                                $res_ = mysqli_query($con, $sql);
                                while($dado_ = mysqli_fetch_array($res_)){
                                    $dado_ = $dado_[0];
                                    echo "<p class='info'><i class='mdi mdi-check-bold'></i>&nbsp; $dado_</p>";
                                }
                            }
                        } else {
                            $sql = "SELECT Aces_Nome from tbl_acessorios where Aces_Id=$acessorios";
                            $res_ = mysqli_query($con, $sql);
                            while($dado_ = mysqli_fetch_array($res_)){
                                $dado_ = $dado_[0];
                                echo "<p class='info'><i class='mdi mdi-check-bold'></i>&nbsp; $dado_</p>";
                            }
                        }
                    ?>
                    
                </div>
            </div>
            <div class="col-5">
               
            </div>
        </div>
        
    </div>
















<script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script> 
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
<script src="js/index.js"></script>
</body>
</body>
</html>