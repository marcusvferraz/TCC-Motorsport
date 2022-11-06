var controleCampo = 1;

function adcionarCampo() {
    controleCampo++

    document.getElementById('formulario').insertAdjacentHTML('beforeend', '<div class="form-group col-12 d-flex mb-3" id="campo' + controleCampo + '"> <input type="text" name="item[]" id="item"/ class="form-control" required ><button type="button" id="' + controleCampo + '" onclick="removerCampo(' + controleCampo + ')" class="btn btn-outline-danger">Remover</button></div>');
}

function removerCampo(idCampo) {
    document.getElementById('campo' + idCampo).remove();
}