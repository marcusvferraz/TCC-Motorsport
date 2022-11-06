// jquery vaidate, validando os campos do formulario de cadastro da entidade

$('#form-Org').validate({
    rules: {
        arquivo: {
            required: true,
        },
        razaoSocial: {
            required: true,
        },
        emailOrg: {
            email: true,
            required: true,
        },
        nomeFantasia: {
            required: true,
        },
        cnpj: {
            required: true,
        },
        telefone: {
            required: true,
        },
        estado: {
            required: true,
        },
        cidade: {
            required: true,
        },
        bairro: {
            required: true,
        },
        rua: {
            required: true,
        },
        numero: {
            required: true,
            maxLenght: 9,
        },
    }
    // submitHandler: function (form) {
    //     alert('mansagem');
    // }
})