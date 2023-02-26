<?php

$texto = 'Essa variável é uma String';
$numero = 24;
$quebrado = 12.5;
$array = ['Variáveis', '5 tipos', 5, true];

$valor1 = 10;
$valor2 = 20;
$soma =  $valor1 + $valor2;


echo $texto;
echo '<br>';
echo $numero;
echo '<br>';
echo $quebrado;
echo '<br>';
print_r($array);
echo '<br>';
echo "A soma dos valores das variáveis inseridas, é  $soma";
echo '<br>';
echo $valor2 - $valor1;