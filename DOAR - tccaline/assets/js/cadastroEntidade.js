$('document').ready(function () {


    $('form#cadEnt input#password').focus(function () {
        $('form#cadEnt span#mensagem').html('A senha deve ter entre 8 e 16 caracteres');
    });
    $('form#cadEnt input#password').blur(function () {
        $('form#cadEnt span#mensagem').html('');
    });
    $('form#cadEnt input#password2').blur(function () {
        let senha1 = $('form#cadEnt input#password').val();
        let senha2 = $('form#cadEnt input#password2').val();
        if (senha1 !== senha2) {
            $('form#cadEnt span#mensagem').html('Senhas diferentes');
            $('form#cadEnt span#mensagem').css('color', 'red');
        }

    });
    $('form#cadEnt #cadastrarEnt').submit(function (event) {
        let senha1 = $('form#cadEnt input#password').val();
        let senha2 = $('form#cadEnt input#password2').val();
        if (senha1 !== senha2) {
            $('form#cadEnt span#mensagem').html('Senhas diferentes');
            $('form#cadEnt span#mensagem').css('color', 'red');
            event.preventDefault()
        }

    });
})