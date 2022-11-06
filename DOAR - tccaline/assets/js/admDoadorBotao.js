$(document).ready(function () {
    $('button#salvar').hide();
    $('#admUpdateDoador input').attr('disabled', 'disabled');
    $('#admUpdateDoador select').attr('disabled', 'disabled');

    $("button#editar").click(function () {
        $('#admUpdateDoador input').removeAttr('disabled');
        $('#admUpdateDoador select').removeAttr('disabled');
        $(" button#editar").hide();
        $('button#salvar').show();
    });
    $("button#cancelar").click(function () {
        $('#admUpdateDoador input').attr('disabled', 'disabled');
        $('#admUpdateDoador select').attr('disabled', 'disabled');
        $(" button#editar").show();
        $('button#salvar').hide();
    });
});