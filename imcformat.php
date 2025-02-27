<?php

/* Atividade 3P Unibra - LPCS 2025.1
Objetivo: Calcular IMC
*/

function imc ($peso,$altura){
    $resultado = $peso / ($altura ** 2);
    return $resultado;
}

$resposta = imc (80,1.80);
    $formatado = number_format($resposta,2);
    echo "O Imc foi: $formatado.";

?>
