$(document).ready(function () {
    $('#example2').DataTable({
        language: {
            lengthMenu: 'Mostrar _MENU_ linhas por página',
            zeroRecords: 'Não encontrado',
            info: ' Página _PAGE_ de _PAGES_',
            infoEmpty: 'Não encontrado',
            infoFiltered: '(total de registros: _MAX_ )',
            search: 'Buscar',
            next: 'Próxima',
            paginate: {
                first: 'Primeira',
                last: 'Última',
                next: 'Próxima',
                previous: 'Anterior',
            },
            loadingRecords: 'Aguarde...',
        },
    })

});