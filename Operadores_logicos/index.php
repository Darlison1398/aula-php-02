<?php

// Operador AND: &&
// Operador OR: ||
// Operador NOT: !

echo "OPERADOR AND <br>";

if( 5 > 10){
    echo "Entrou no if 1 <br>";
}


if(50 > 10){
    echo "Entrou no if 2 <br>";
}


if(50 > 10 && 50 < 60){
    echo "Entrou no if 2 <br>";
}

$a = 5;
$b = 10;
$c = 12;
$d = 15;

if ($a < $d && $b < $c){
    echo "Operação lógica e verdadeira. if 3 <br>";
}

if ($a + $b < $d && $c >= $b){
    echo "Operação do if 4 é lógica <br>";
}