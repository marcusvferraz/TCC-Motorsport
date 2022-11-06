
  function Formata(){
    $('#cnpj').mask('00.000.000/0000-00', {reverse: true});
    $cep.replace('/','');



  }

  function tirarmask(){
    $cep.replace('/','');

  }

  function limpa_formulário_cep() {
    //Limpa valores do formulário de cep.
    document.getElementById('rua').value=("");
    document.getElementById('bairro').value=("");
    document.getElementById('cidade').value=("");
    document.getElementById('uf').value=("");
}

function meu_callback(conteudo) {
if (!("erro" in conteudo)) {
    //Atualiza os campos com os valores.
    document.getElementById('rua').value=(conteudo.logradouro);
    document.getElementById('bairro').value=(conteudo.bairro);
    document.getElementById('cidade').value=(conteudo.localidade);
    document.getElementById('uf').value=(conteudo.uf);
} //end if.
else {
    //CEP não Encontrado.
    limpa_formulário_cep();
    Swal.fire({
      icon: 'error',
      title: 'CEP Não Encontrado',
      text: 'Corrija seu CEP',
      'confirmButtonColor':'#3085d6'
    })
    
}
}

function pesqcep(valor) {
  if(valor.length !== 9) {
    return;
  }

//Nova variável "cep" somente com dígitos.
var cep = valor.replace(/\D/g, '');

//Verifica se campo cep possui valor informado.
if (cep != "") {

    //Expressão regular para validar o CEP.
    var validacep = /^[0-9]{8}$/;

    //Valida o formato do CEP.
    if(validacep.test(cep)) {

        //Preenche os campos com "..." enquanto consulta webservice.
        document.getElementById('rua').value="...";
        document.getElementById('bairro').value="...";
        document.getElementById('cidade').value="...";
        document.getElementById('uf').value="...";
        

        //Cria um elemento javascript.
        var script = document.createElement('script');

        //Sincroniza com o callback.
        script.src = 'https://viacep.com.br/ws/'+ cep + '/json/?callback=meu_callback';

        //Insere script no documento e carrega o conteúdo.
        document.body.appendChild(script);

    } //end if.
    else {
        //cep é inválido.
        limpa_formulário_cep();
         
        Swal.fire({
          icon: 'error',
          title: 'CEP Não Encontrado',
          text: 'Corrija seu CEP',
          'confirmButtonColor':'#3085d6'
        })  
    }
} //end if.
else {
    //cep sem valor, limpa formulário.
    limpa_formulário_cep();
}
};
function Formatacep(){
$('#cep').mask('00000-000'), {reverse: true};



}