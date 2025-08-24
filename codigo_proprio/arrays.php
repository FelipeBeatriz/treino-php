<?php

$notas = [1, 5, 8, 1.4, 9.9, 5.8, 10, 8.2];
rsort($notas);
echo "As três maiores notas em sequência são: " .$notas[0] . ", " . $notas[1] . ", " . $notas[2];

$frase = "Vinicius Dias,1997,Programador";
$palavras = explode(",", $frase);

function ordenarStrings(array $array): array
{
    sort($array);
    return $array;
}

$array = array("banana", "abacaxi", "laranja", "uva");
$arrayOrdenado = ordenarStrings($array);
echo "Array ordenado: ";
print_r($arrayOrdenado);
?>