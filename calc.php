<?php
    $n1 = $_POST['numero1'];
    $n2 = $_POST['numero2'];
    $Op = $_POST['opcao'];

    switch ($Op) {
        case 1:
            $resultado = $n1 + $n2;
            echo "O resultado da opção escolhida é: $resultado";
            break;
        case 2:
            $resultado = $n1 - $n2;
            echo "O resultado da opção escolhida é: $resultado";
            break;
        case 3:
            $resultado = $n1 * $n2;
            echo "O resultado da opção escolhida é: $resultado";
            break;
        case 4:
            $resultado = $n1 / $n2;
            echo "O resultado da opção escolhida é: $resultado";
            break;

        default:
            echo "Opção inválida";
            break;
        }
?>