<?php
$nome = $_POST['nome'];
$endereco = $_POST['endereco'];
$CPF = $_POST['CPF'];
$telefone = $_POST['telefone'];
$CNPJ = $_POST['CNPJ'];


$linha = date('d/m/y H:i:s') . " | " . $nome . " | " . $endereco . " | " . $CPF . " | " . $telefone . " | " . $CNPJ . PHP_EOL;

file_put_contents('Cadastro de cliente.txt' , $linha , FILE_APPEND);

header('location: Nota Fiscal.html');

exit;
?>