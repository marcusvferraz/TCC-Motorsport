$(document).ready(function () {
    // oculta botoes 
    $('#botoesLogin').hide();
    $('#botoesResponsavel').hide();
    $('#botoesOrg').hide();

    //desativa input
    $('#form-Org input').attr('disabled', 'disabled');
    $('#form-Org textarea').attr('disabled', 'disabled');
    $('#form-dadosLogin input').attr('disabled', 'disabled');
    $('#form-responsavel input').attr('disabled', 'disabled');

    // organizacao---------------------------------------------------

    // editar 
    $('button#habilitar-org').click(function () {
        $('#form-Org input').removeAttr('disabled');
        $('#form-Org textarea').removeAttr('disabled');
        $('#botoesOrg').show();
        $('button#habilitar-org').hide();
    })
    // cancelar
    $(' #cancelar-org').click(function () {
        $('#botoesOrg').hide();
        $('button#habilitar-org').show();
        $('#form-Org input').attr('disabled', 'disabled');
        $('#form-Org textarea').attr('disabled', 'disabled');
    });

    // responsável-----------------------------------------------------------

    // editar
    $('button#habilitar-responsavel').click(function () {
        $('#botoesResponsavel').show();
        $('#form-responsavel input').removeAttr('disabled');
        $('button#habilitar-responsavel').hide();
        $('#cpfResponsavel').attr('disabled', 'disabled');
    })
    // cancelar
    $('button #cancelar-responsavel').click(function () {
        $('#botoesResponsavel').hide();
        $('button#habilitar-responsavel').show();
        $('#form-responsavel input').attr('disabled', 'disabled');

    });

    // login------------------------------------------------------------------------------

    // editar
    $('button#habilitar-login').click(function () {
        $('#botoesLogin').show();
        $('#form-dadosLogin input').removeAttr('disabled');
        $('button#habilitar-login').hide();
    })
    // cancelar
    $('button #cancelar-login').click(function () {
        $('#botoesLogin').hide();
        $('button#habilitar-login').show();
        $('#form-dadosLogin input').attr('disabled', 'disabled');

    });
});