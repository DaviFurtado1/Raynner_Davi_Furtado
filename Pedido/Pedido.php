<?php
$número = $_POST['número'];
$data = $_POST['data'];
$tabela = $_POST['tabela'];
$endereco = $_POST['endereco'];
$cep = $_POST['cep'];
$cidade = $_POST['cidade'];
$estado = $_POST['estado'];
$telefone = $_POST['telefone'];
$data_entrega = $_POST['data_entrega'];

$linha = date('d/m/y H:i:s') . " | " . $número . " | " . $data . " | " . $tabela . " | " . $endereco . " | " . $cep . " | " . $cidade . " | " . $estado . " | " . $telefone . " | " . $data_entrega . PHP_EOL; 

file_put_contents('pedido.txt' , $linha , FILE_APPEND);

header('location: Pedido.html');

exit;