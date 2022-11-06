$(document).ready(function () {

    $('#updateUsuarioDados input').attr('disabled', 'disabled');
    $('#usuUpdate').hide();

    $('#Desblock').click(function () {
        $('#updateUsuarioDados input').removeAttr('disabled');
        $('#usuUpdate').show();
        $('#Desblock').hide();
    })

    $('#dadosLogin input').attr('disabled', 'disabled');
    $('#botoesLogin').hide();

    $('#DesblockLogin').click(function () {
        $('#dadosLogin input').removeAttr('disabled');
        $('#botoesLogin').show();
        $('#DesblockLogin').hide();
    })
})