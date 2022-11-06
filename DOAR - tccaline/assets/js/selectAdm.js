$(document).ready(function () {

    //desativa input
    $('#form-Org select').attr('disabled', 'disabled');

    // organizacao---------------------------------------------------

    // editar 
    $('button#habilitar-org').click(function () {
        $('#form-Org select').removeAttr('disabled');
    })
    // cancelar
    $(' #cancelar-org').click(function () {
        $('#form-Org select').attr('disabled', 'disabled');
    });


});