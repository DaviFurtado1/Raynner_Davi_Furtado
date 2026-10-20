<?php
    $n1a = $_POST ['n1a'];
    $n2a = $_POST ['n2a'];
    $oper = $_POST ['oper'];
    

    $resultado = 0;
    echo "n1a = : " . "<br>" . $n1a;
    echo "n2a = : " . "<br>" . $n2a;
    echo "oper = : " . "<br>" . $oper;

    switch ($oper) {

        case 'adição':
            $resultado = $n1a + $n2a;
            break;

        case 'subtração':
            $resultado = $n1a - $n2a;
            break;

        case 'vezes':
            $resultado = $n1a * $n2a;
            break;

        case 'dividido':
            if ($n1a == $n2a) {
                $resultado = $n1a / $n2a;
            }else{
                $resultado = "ERRO: divisão por zero";
    }

    break;

    default:
    $resultado = "Operação inválida";
    }

    echo "Resultado: " . $resultado;


?>