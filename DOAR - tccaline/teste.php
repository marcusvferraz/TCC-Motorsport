<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- link de inicio -->
    <?php require_once('linkInicio.php'); ?>

    <!-- CSS ADCIONAL -->
    <link rel="stylesheet" href="assets/css/adcional.css">


</head>

<body class="bg-white">



    <div class="container mt-5">




        <div class="row table-responsive text-nowrap p-0 m-0">
            <table class="table table-striped table-hover  col-10" id="example">
                <thead>
                    <tr>
                        <th>Campanha</th>
                        <th>data</th>

                        <th>status</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody class="table-border-bottom-0">
                    <tr>
                        <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>Angular Project</strong></td>
                        <td>Albert Cook</td>
                        <td><span class="badge bg-label-primary me-1">Active</span></td>
                        <td>
                            <div class="dropdown">
                                <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                                    <i class="bx bx-dots-vertical-rounded"></i>
                                </button>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="javascript:void(0);"><i class="bx bx-edit-alt me-1"></i> Editar contribuição</a>
                                    <a class="dropdown-item" href="javascript:void(0);"><i class="bx bx-trash me-1"></i> Cancelar contribuição</a>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td><i class="fab fa-react fa-lg text-info me-3"></i> <strong>React Project</strong></td>
                        <td>Barry Hunter</td>

                        <td><span class="badge bg-label-success me-1">Completed</span></td>
                        <td>
                            <div class="dropdown">
                                <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                                    <i class="bx bx-dots-vertical-rounded"></i>
                                </button>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="javascript:void(0);"><i class="bx bx-edit-alt me-1"></i> Editar contribuição</a>
                                    <a class="dropdown-item" href="javascript:void(0);"><i class="bx bx-trash me-1"></i> Cancelar contribuição</a>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td><i class="fab fa-vuejs fa-lg text-success me-3"></i> <strong>VueJs Project</strong></td>
                        <td>Trevor Baker</td>


                        <td><span class="badge bg-label-info me-1">Scheduled</span></td>
                        <td>
                            <div class="dropdown">
                                <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                                    <i class="bx bx-dots-vertical-rounded"></i>
                                </button>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="javascript:void(0);"><i class="bx bx-edit-alt me-1"></i> Editar contribuição</a>
                                    <a class="dropdown-item" href="javascript:void(0);"><i class="bx bx-trash me-1"></i> Cancelar contribuição</a>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <i class="fab fa-bootstrap fa-lg text-primary me-3"></i> <strong>Bootstrap Project</strong>
                        </td>
                        <td>Jerry Milton</td>

                        <td><span class="badge bg-label-warning me-1">Pending</span></td>
                        <td>
                            <div class="dropdown">
                                <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                                    <i class="bx bx-dots-vertical-rounded"></i>
                                </button>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="javascript:void(0);"><i class="bx bx-edit-alt me-1"></i> Editar contribuição</a>
                                    <a class="dropdown-item" href="javascript:void(0);"><i class="bx bx-trash me-1"></i> Cancelar contribuição</a>
                                </div>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <!--/ Hoverable Table rows -->







    <!-- FOOTER -->

    <?php require_once('footer.php'); ?>

    <!-- LINKS FIM -->

    <?php require_once('linkFinal.php'); ?>


    <script>
        $(document).ready(function() {
            $('#example').DataTable({
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
    </script>
    <script src="tabela.js"></script>
    <script src="tabela2.js"></script>

</body>

</html>