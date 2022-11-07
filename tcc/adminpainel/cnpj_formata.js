//Inicia o cURL
$ch = curl_init($url);

//Pede o que retorne o resultado como string
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

//Envia cabeçalhos (Caso tenha)
if(count($header) > 0) {
    curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
}

//Envia post (Caso tenha)
if($post !== null) {
    curl_setopt($ch, CURLOPT_POSTFIELDS, $post);
}

//Ignora certificado SSL
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);

//Manda executar a requisição
$data = curl_exec($ch);

//Fecha a conexão para economizar recursos do servidor
curl_close($ch);

//Retorna o resultado da requisição

return $data;


$cnpj = “01432667000126”;

$teste = curlExec(“http://receitaws.com.br/v1/cnpj/ 87”.$cnpj);

$obj = json_decode($teste);

//busca a atividade principal
$atividade_principal = $obj->atividade_principal;
foreach ($atividade_principal as $a) {
echo "atividade: $a->text - $a->code ";
}

//busca a data da situaçao
$data_situacao = $obj->data_situacao;
echo "Data de situação: $data_situacao ";

//busca o tipo = Matriz/filial
$tipo = $obj->tipo;
echo "Tipo: $tipo ";

//busca o nome
$nome = $obj->nome;
echo "Nome: $nome ";

//busca as atividades secundárias
$atividades_secundarias = $obj->atividades_secundarias;
echo "Atividades secundárias: ";

foreach ($atividades_secundarias as $a){
echo "$a->text : $a->code ";
}

//------------------Outros parâmetros que podem ser buscados ----------------------
$obj->situacao
$obj->bairro
$obj->logradouro
$obj->numero
$obj->cep
$obj->municipio
$obj->uf
$obj->abertura
$obj->natureza_juridica
$obj->fantasia
$obj->cnpj
$obj->ultima_atualizacao
$obj->status
$obj->complemento
$obj->email
$obj->efr
$obj->motivo_situacao
$obj->situacao_especial
$obj->data_situacao_especial