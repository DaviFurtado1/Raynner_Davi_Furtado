<?php
$numero = $_POST['numero'];
$codigo = $_POST['codigo'];
$quantidade = $_POST['quantidade'];
$valor = $_POST['valor'];

$linha = date('d/m/y H:i:s') . " | " . $numero . " | " . $codigo . " | " . $quantidade . " | " . $valor . " | " . $total . PHP_EOL; 

$total = ('quantidade * valor')

    file_put_contents('Valor_total.txt' , $resultado , FILE_APPEND);

    header('location: Item.html');

    exit;




?>