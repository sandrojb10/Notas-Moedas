<?php

$valor = (float)readline();
$notas = [100, 50, 20, 10, 5, 2];
$moedas = [100, 50, 25, 10, 5, 1];

echo "NOTAS:\n";
foreach ($notas as $nota) {
    $quantidade = intdiv($valor, $nota);
    echo "{$quantidade} nota(s) de R$ {$nota}.00\n";
    $valor = fmod($valor, $nota);
}
$valor *= 100;

echo "MOEDAS:\n";
foreach ($moedas as $moeda) {
    $quantidade = intdiv($valor, $moeda);
    echo "{$quantidade} moeda(s) de R$ " . number_format($moeda / 100, 2) . "\n";
    $valor %= $moeda;
}