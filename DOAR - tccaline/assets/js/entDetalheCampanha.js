$(document).ready(function () {
    $('button#cancelar').hide();
    $('button#salvar').hide();
    $(" button#editar").click(function () {
        $('#updateCampanha input').removeAttr('disabled');
        $('#updateCampanha textarea').removeAttr('disabled');
        $(" button#editar").hide();
        $('button#cancelar').show();
        $('button#salvar').show();
    });
    $(" button#cancelar").click(function () {
        $('#updateCampanha input').attr('disabled', 'disabled');
        $('#updateCampanha textarea').attr('disabled', 'disabled');
        $(" button#editar").show();
        $('button#cancelar').hide();
        $('button#salvar').hide();
    });
});