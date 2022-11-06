$('document').ready(function () {
    // pega a data atual
    const hoje = new Date()
    // guarda o ano na variavel
    const anoAtual = hoje.getFullYear()
    $('#cadUsuario #cadastrarUsuario').attr('disabled', 'disabled')
    $('#cadUsuario #anoNascimento').blur(function () {

        // pega o que foi digitado no campo 
        let nascimento = $('input#anoNascimento').val();
        // calcula a diferença em anos
        if (nascimento > anoAtual) {
            $('span#mensagemUsuario').html('O ano de nascimento não pode ser maior que o ano atual');
        } else {
            if (nascimento == null || nascimento == '' || nascimento == 0 || nascimento <= 1920) {
                $('span#mensagemUsuario').html('Inválido');
            } else {
                let calculo = anoAtual - nascimento;
                // verifica se é menor de 18 anos
                if (calculo < 18) {
                    $('span#mensagemUsuario').html('É necessário ter ao menos 18 anos para acessar ao site');
                    $('#cadUsuario #cadastrarUsuario').attr('disabled', 'disabled')
                } else {
                    $('span#mensagemUsuario').html('');
                    $('#cadUsuario #cadastrarUsuario').removeAttr('disabled')
                }
            }
        }
    })

    $('#cadUsuario').validate({
        rules: {
            password: {
                required: true,
                maxlenght: 16,
                minlenght: 8,
            },
            password2: {
                equalTo: '#password',
                required: true,
                maxlenght: 16,
                minlenght: 8,
            },
            anoNascimento: {
                required: true,
            },
            email: {
                required: true,
                email: true,
            }
        }
    })

})