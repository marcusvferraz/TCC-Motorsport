// o script verifica se a cidade e o estado sao igaul a guaratingueta e sp, caso contrario, ele dá um avido e desabilita o botao enviar
$(document).ready(function () {
    $('input').click(function () {
        let cidade = $('input#cidade').val();
        let estado = $('input#uf').val()

        if (estado != 'SP' && estado != 'Sp' && estado != 'sp' || cidade != 'Guaratinguetá' && cidade != 'Guaratingueta' && cidade != 'guaratinguetá' && cidade != 'guaratingueta') {
            $('span#avisoUf').html('O cadastro só é válido para a cidade de Guaratinguetá-SP');
            $('span#avisoUf').css('color', 'red');
            $('#cadastrarEnt').attr('disabled', 'disabled')

        } else {
            $('span#avisoUf').html('');
            $('#cadastrarEnt').removeAttr('disabled');
        }

    });

    $('input').blur(function () {
        let cidade = $('input#cidade').val();
        let estado = $('input#uf').val()

        if (estado != 'SP' && estado != 'Sp' && estado != 'sp' || cidade != 'Guaratinguetá' && cidade != 'Guaratingueta' && cidade != 'guaratinguetá' && cidade != 'guaratingueta') {
            $('span#avisoUf').html('O cadastro só é válido para a cidade de Guaratinguetá-SP');
            $('span#avisoUf').css('color', 'red');
            $('#cadastrarEnt').attr('disabled', 'disabled');

        } else {
            $('span#avisoUf').html('');
            $('#cadastrarEnt').removeAttr('disabled');

        }

    });


});