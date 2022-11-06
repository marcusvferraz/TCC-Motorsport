<?php

/* a ideia é que quando o formulario seja enviado e haja sucesso, haja um alert de sucesso!
Isso será feito utilizando uma variavel de sessao sucesso, cada numero da variavel corresponde a uma mensagem*/

/*LISTA DE SUCESSO
1- Cadastro realizado com sucesso!
2- Itens cadastrados com sucesso!
6- doacao realizada com sucesso!
7-  Agradecimento salvo com sucesso!
8- Imagem salva com sucesso!
9- Cadastro desativado com sucesso!
10-Organização desativada com sucesso!
11-Campanha desativada com sucesso!
12- campanha finalizada com sucesso!
13-Imagem atualizada com sucesso!
14 - Campanha atualizada com sucesso!
15-Senha alterada com sucesso!';
 */

if ($_SESSION['sucesso'] == null) {
    $_SESSION['sucesso'] = '';
}

$mensagem;
$disparaSucesso = false;
$sucesso = $_SESSION['sucesso'];
$disparaEspacial = false;
$disparaEspacial2 = false;
$disparaEspacial3 = false;
$disparaEspacial4 = false;


if ($sucesso) {

    switch ($sucesso) {
        case 1:
            $disparaSucesso = true;
            $mensagem = ' Cadastro realizado com sucesso!';
            $sucesso = '';
            break;
        case 2:
            $disparaEspacial = true;
            $mensagem = 'Itens cadastrados com sucesso!';
            $texto = 'Os itens foram cadastrados com sucesso! Você poderá adicionar mais itens ao editar a campanha';
            $sucesso = '';
            break;
        case 3:
            $disparaSucesso = true;
            $mensagem = ' Cadastro atualizado com sucesso!';
            $sucesso = '';
            break;
        case 4:
            $disparaEspacial2 = true;
            $mensagem = 'Cadastro realizado com sucesso!';
            $texto = '';
            $sucesso = '';
            break;
        case 5:
            $disparaEspacial3 = true;
            $mensagem = 'Cadastro atualizado com sucesso!';
            $texto = '';
            $sucesso = '';
            break;
        case 6:
            $disparaEspacial4 = true;
            $mensagem = 'Doação realizada com sucesso!';
            $texto = 'Caso deseje editar ou cancelar a doação vá a aba de Minhas Contrições!';
            $sucesso = '';
            break;
        case 7:
            $disparaSucesso = true;
            $mensagem = 'Agradecimento salvo com sucesso!';
            $sucesso = '';
            break;

        case 8:
            $disparaSucesso = true;
            $mensagem = 'Imagem salva com sucesso!';
            $sucesso = '';
            break;
        case 9:
            $disparaSucesso = true;
            $mensagem = 'Usuario desativado com sucesso!';
            $sucesso = '';
            break;
        case 10:
            $disparaSucesso = true;
            $mensagem = 'Organização desativada com sucesso!';
            $sucesso = '';
            break;
        case 11:
            $disparaSucesso = true;
            $mensagem = 'Campanha desativada com sucesso!';
            $sucesso = '';
            break;
        case 12:
            $disparaSucesso = true;
            $mensagem = 'Campanha finalizada com sucesso!';
            $sucesso = '';
            break;
        case 13:
            $disparaSucesso = true;
            $mensagem = 'imagem atualizada com sucesso!';
            $sucesso = '';
            break;
        case 14:
            $disparaSucesso = true;
            $mensagem = 'Campanha atualizada com sucesso!';
            $sucesso = '';
            break;
        case 15:
            $disparaSucesso = true;
            $mensagem = 'Senha alterada com sucesso!';
            $sucesso = '';
            break;
    }

    if ($disparaSucesso) {
        echo "<script>
                Swal.fire(
                    'Sucesso!!!',
                    '" . $mensagem . "',
                    'success'
                )
          </script>
            ";
        $disparaSucesso = false;
        $sucesso = '';
        $_SESSION['sucesso'] = $sucesso;
    }

    if ($disparaEspacial) {
        echo "<script>
                Swal.fire({
                    allowOutsideClick: false,
                    allowEscapeKey: false,
                    allowEnterKey: false,
                    icon: 'success',
                    title: '" . $mensagem . "',
                    text: '" . $texto . "',
                    confirmButtonText: 'OK',
                }).then((result) => {
                    /* Read more about isConfirmed, isDenied below */
                    if (result.isConfirmed) {
                        window.location.assign('entCampanhas.php')
                    }
                })
          </script>
            ";
        $disparaEspecial = false;
        $sucesso = '';
        $_SESSION['sucesso'] = $sucesso;
    }

    if ($disparaEspacial2) {
        echo "<script>
                Swal.fire({
                    allowOutsideClick: false,
                    allowEscapeKey: false,
                    allowEnterKey: false,
                    icon: 'success',
                    title: '" . $mensagem . "',
                    text: '" . $texto . "',
                    confirmButtonText: 'OK',
                }).then((result) => {
                    /* Read more about isConfirmed, isDenied below */
                    if (result.isConfirmed) {
                        window.location.assign('entCampanhas.php')
                    }
                })
          </script>
            ";
        $disparaEspecial2 = false;
        $sucesso = '';
        $_SESSION['sucesso'] = $sucesso;
    }

    if ($disparaEspacial3) {
        echo "<script>
                Swal.fire({
                    allowOutsideClick: false,
                    allowEscapeKey: false,
                    allowEnterKey: false,
                    icon: 'success',
                    title: '" . $mensagem . "',
                    text: '" . $texto . "',
                    confirmButtonText: 'OK',
                }).then((result) => {
                    /* Read more about isConfirmed, isDenied below */
                    if (result.isConfirmed) {
                    }
                })
          </script>
            ";
        $disparaEspecial3 = false;
        $sucesso = '';
        $_SESSION['sucesso'] = $sucesso;
    }

    if ($disparaEspacial4) {
        echo "<script>
                Swal.fire({
                    allowOutsideClick: false,
                    allowEscapeKey: false,
                    allowEnterKey: false,
                    icon: 'success',
                    title: '" . $mensagem . "',
                    text: '" . $texto . "',
                    confirmButtonText: 'OK',
                }).then((result) => {
                    /* Read more about isConfirmed, isDenied below */
                    if (result.isConfirmed) {
                    
                    }
                })
          </script>
            ";
        $disparaEspecial4 = false;
        $sucesso = '';
        $_SESSION['sucesso'] = $sucesso;
    }
}
