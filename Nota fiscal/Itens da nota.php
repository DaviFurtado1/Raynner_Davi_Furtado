<?php
$descricao = $_POST['descricao'];
$codigo = $_POST['codigo'];
$nome = $_POST['nome'];
$preco = $_POST['preco'];
$forma = $_POST['forma'];
$quantidade = $_POST['quantidade'];

$total = ($preco * $quantidade);

$linha = date('d/m/Y H:i:s') . " | " . $descricao . " | " . $codigo . " | " . $nome . " | " . $preco . " | " . $forma . " | " . $quantidade . "| " . $total . PHP_EOL;



    file_put_contents('Itens da nota.txt' , $linha ,  FILE_APPEND);
    
    header('location: Cadastro_Cliente.html');

exit;

?>
