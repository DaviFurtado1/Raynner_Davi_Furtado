<?php
$CNPJ = $_POST['CNPJ'];
$endereco = $_POST['endereco'];
$empresa = $_POST['empresa'];
$telefone = $_POST['telefone'];
$codigo = $_POST['codigo'];
$descricao = $_POST['descricao'];
$quantidade = $_POST['quantidade'];
$forma = $_POST['forma'];
$unidade = $_POST['unidade'];


$linha = date('d/m/y H:i:s') . " | " . $CNPJ . " | " . $endereco . " | " . $empresa . " | " . $telefone . " | " . $codigo . " | " . $descricao . " | " . $quantidade . " | " . $forma . " | " . $unidade . PHP_EOL;

file_put_contents('Nota Fiscal.txt' , $linha , FILE_APPEND);

header('location: Cadastro de itens.html');

exit;
?>