<?php
/* a ideia é que quando o formulario seja enviado e haja algum erro previsto
seja devolvido ao usuario um alert comunicando-o o erro. Para isso utilizarei uma variavel erro,
onde cada valor corresponde a um alert.
Essa variavel vai ser devolvida por metodo GET quando o php voltar usando o header location*/

/*LISTA DE ERROS
1 - Falha ao enviar a imagem
2 - Imagem muito grande!!! Max: 2Mb
3 - Permitido somente arquivos png,jpeg e jpg
4 - Erro ao cadastrar
5 - falha ao cadastrar o responsavel
6 - falha ao cadastrar a organizacao
7- Houve um erro ao salvar a imagem!! tente novamente
8- Email ou senha incorretos
9- Email não cadastrado!
10-Erro ao tentar atualizar
11-Senhas diferentes!
12- houve um erro ao tentar atualizar (tem um location definido )
13- Nenhum item selecionado (tem um location definido)
14- Erro ao realizar a doacao
15- Erro ao cadastrar os agradecimentos!
16 - Nenhuma Imagem Selecionada!
17- Erro ao tentar atualizar!
18-Erro ao desativar o Usuario!
19-Erro ao desativar a organização!
20- Erro ao desativar a campanha!
21- Erro ao finalizar a campanha!
22-'Erro, tente novamente!
 */

if ($_SESSION['erro'] == null) {
    $_SESSION['erro'] = '';
}

$mensagem;
$dispara = false;
$erro = $_SESSION['erro'];
$texto = '';
$disparaEspacialErro1 = false;
$disparaEspacialErro2 = false;
$disparaEspacialErro3 = false;

switch ($erro) {
    case 1:
        $dispara = true;
        $mensagem = 'Falha ao enviar a imagem!';
        $erro = '';
        break;
    case 2:
        $dispara = true;
        $mensagem = 'Imagem muito grande!!! Max: 2Mb';
        $erro = '';
        break;
    case 3:
        $dispara = true;
        $mensagem = 'Permitido somente arquivos png,jpeg e jpg!';
        $erro = '';
        break;
    case 4:
        $dispara = true;
        $mensagem = 'Erro ao tentar realizar o cadastro, tente novamente mais tarde!';
        $erro = '';
        break;
    case 5:
        $dispara = true;
        $mensagem = 'falha ao cadastrar o responsavel!';
        $erro = '';
        break;
    case 6:
        $dispara = true;
        $mensagem = 'falha ao cadastrar a organizacao!';
        $erro = '';
        break;
    case 7:
        $dispara = true;
        $mensagem = 'Houve um erro ao salvar a imagem!! tente novamente!';
        $erro = '';
        break;
    case 8:
        $dispara = true;
        $mensagem = 'Email ou senha incorreto!';
        $erro = '';
        break;
    case 9:
        $dispara = true;
        $mensagem = 'Email não cadastrado!';
        $erro = '';
        break;
    case 10:
        $dispara = true;
        $mensagem = 'Erro ao tentar atualizar!';
        $erro = '';
        break;
    case 11:
        $dispara = true;
        $mensagem = 'Senhas diferentes!';
        $erro = '';
        break;
    case 12:
        $disparaEspecialErro1 = true;
        $mensagem = 'Ops...';
        $texto = 'Houve um erro ao tentar atualizar!';
        $erro = '';
        break;
    case 13:
        $dispara = true;
        $mensagem = 'Nenhum item foi selecionado!';
        $erro = '';
        break;

        break;
    case 14:
        $disparaEspecialErro3 = true;
        $mensagem = 'Ops...';
        $texto = 'Houve um erro ao realizar a doação, por favor tente novamente!';
        $erro = '';
        break;

    case 15:
        $dispara = true;
        $mensagem = 'Erro ao salvar os agradecimentos!';
        $erro = '';
        break;

    case 16:
        $dispara = true;
        $mensagem = 'Nenhuma Imagem Selecionada!!';
        $erro = '';
        break;
    case 17:
        $dispara = true;
        $mensagem = 'Erro ao tentar atualizar!';
        $erro = '';
        break;
    case 18:
        $dispara = true;
        $mensagem = 'Erro ao desativar o Usuario!';
        $erro = '';
        break;
    case 19:
        $dispara = true;
        $mensagem = 'Erro ao desativar a organização!';
        $erro = '';
        break;
    case 20:
        $dispara = true;
        $mensagem = 'Erro ao desativar a campanha!';
        $erro = '';
        break;
    case 21:
        $dispara = true;
        $mensagem = 'Erro ao finalizar a campanha!';
        $erro = '';
        break;
    case 22:
        $dispara = true;
        $mensagem = 'Erro, tente novamente!';
        $erro = '';
        break;
}

if ($dispara) {
    echo "<script>
                Swal.fire(
                    'Ops!',
                    '" . $mensagem . "',
                    'error'
                )
          </script>
            ";
    $dispara = false;
    $erro = 0;
    $_SESSION['erro'] = $erro;
}

if ($disparaEspacialErro1) {
    echo "<script>
            Swal.fire({
                allowOutsideClick: false,
                allowEscapeKey: false,
                allowEnterKey: false,
                icon: 'error',
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
    $disparaEspecialErro1 = false;
    $erro = '';
    $_SESSION['erro'] = $erro;
}



if ($disparaEspacialErro3) {
    echo "<script>
            Swal.fire({
                allowOutsideClick: false,
                allowEscapeKey: false,
                allowEnterKey: false,
                icon: 'warning',
                title: '" . $mensagem . "',
                text: '" . $texto . "',
                confirmButtonText: 'OK',
            }).then((result) => {
                /* Read more about isConfirmed, isDenied below */
                if (result.isConfirmed) {
                    window.location.assign('usuExibirCampanha.php?id=" . $_SESSION['ultimaCampanha'] . "')
                }
            })
      </script>
        ";
    $disparaEspecialErro3 = false;
    $erro = '';
    $_SESSION['erro'] = $erro;
}
