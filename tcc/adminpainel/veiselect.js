$("#tipo").on("change", function(){
   let selecao = $("#tipo").val();
   if(selecao != ""){
    acessorios()
    $('#marca').empty()
    $("#marca").append("<option value='' disabled selected>Escolha a marca</option>");
    $('#modelo').empty()
    $("#modelo").append("<option value='' disabled selected>Escolha o modelo</option>");
    $.get("modulo.php?tipo="+selecao,function(data){
        var objeto = JSON.parse(data);
        for(let i = 0; i < objeto.ids.length; i++){
            $("#marca").append("<option value='"+ objeto.ids[i] +"'>"+ objeto.nomes[i] +"</option>");
        }
    })
   }  
})

$("#marca").on("change", function(){
    let selecao = $("#marca").val();
    if(selecao !=""){
        $('#modelo').empty()
        $("#modelo").append("<option value='' disabled selected>Escolha o modelo</option>");
        $.get("modulo.php?marca="+selecao,function(data){
            var objeto = JSON.parse(data);
            for(let i = 0; i < objeto.ids.length; i++){
                $("#modelo").append("<option value='"+ objeto.ids[i] +"'>"+ objeto.nomes[i] +"</option>");
            }
        })
    }
})

function acessorios() {
    let tipoVei = $('#tipo').val();
    // get the locations from the get request
    $.get("modulo.php?acessorios=acessorios&tipovei="+tipoVei, function (data) {
        var objeto = JSON.parse(data);
        var ids = new Object();
        for(let i = 0; i < objeto.ids.length; i++){
            ids[objeto.nomes[i]] = objeto.ids[i]
        }
        let inputField = document.getElementById("input");
        let ulField = document.getElementById("suggestions");
        inputField.addEventListener("input", changeAutoComplete);
  
      function changeAutoComplete({ target }) {
        ulField.style.display = "block";
        let data = target.value;
        ulField.innerHTML = ``;
        if (data.length) {
          let autoCompleteValues = autoComplete(data);
          autoCompleteValues.forEach((value) => {
            addItem(value);
          });
        }
      }
  
      function autoComplete(inputValue) {
        let destination = objeto['nomes'];
        return destination.filter((value) =>
          value.toLowerCase().includes(inputValue.toLowerCase())
        );
      }
  
      function addItem(value) {
        ulField.insertAdjacentHTML(
          "beforeend",
          `<li class="text-center text-black results" ids='${ids[value]}'>${value}</li>`
        );
      }
    });

  
  }
  
  // add  listener to results
  $(document).on("click", ".results", function () {
    $("#input").val('');
    $("#suggestions").hide();
    // append with button to remove
    var elements = document.querySelectorAll('.badgeAcessorio');
    for (var i = 0; i < elements.length; i++) {
        if (elements[i].innerHTML == $(this).text()) {
            return;
        }
    }
    $('#acessoriosSelecionados').append(`<span class="badge badge-pill badge-primary badgeAcessorio" valor="${$(this).text()}" onclick="removerDaLista('${$(this).text()}')">${$(this).text()}</span>`);
    let valor = $('#acessorioss').val();
    let valorr = ' @corta@ ' + $(this).attr('ids');
    if(valor == ""){
        val = valor +=  $(this).attr('ids');
    } else {
        val = valor +=  valorr;
    }
    $('#acessorioss').val(val)
    


  });
  
function removerDaLista(item){
    $(`.badgeAcessorio:contains(${item})`).remove();
    // add the city back to the list
    $('#suggestions').append(`<li class="text-center text-black results">${item}</li>`);

}

$('#removeAll').click(function(){
    // clear the content of div #acessoriosSelecionados
    $('#acessoriosSelecionados').empty();
    // get the cities from valor attribute and add them back to the list
    $('.badgeAcessorio').each(function(){
        $('#suggestions').append(`<li class="text-center text-black results">${$(this).attr('valor')}</li>`);
    });
});


