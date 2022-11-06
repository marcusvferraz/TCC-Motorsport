$('form#logOrg').validate({
    rules: {
        emailLogin: {
            required: true,
            email: true,
        },
        password: {
            required: true,
            minlenght: 8,
            maxlenght: 16
        },
    }

})