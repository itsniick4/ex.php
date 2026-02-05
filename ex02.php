<?php
$valor1 = 10;
$valor2 = "z";

if (is_numeric($valor1) && is_numeric($valor2)) {
    $soma = $valor1 + $valor2;
    echo "A soma é: " ;
    echo $soma;
} else {
    echo "Erro: Os valores fornecidos não são numéricos.";
}
?>