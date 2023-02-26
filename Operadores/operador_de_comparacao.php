<?php

// igualdade: " = "
// idêntico a: " === "
// Diferença: " != "
// Não idêntico a: " !== "
// Maior e maior ou igual a: " > e >= "
// Menor e menor ou igual a: " < e <= "

# Igualdade

if (3 == 3){
    echo "Comparação VERDADEIRA! <br>";
}else{
    echo "FALSA";
}

if (4 == 8){
    echo "VERDADEIRA!<br>";
}else{
    echo "FALSA, PORQUE OS VALORES SÃO DIFERENTES <br>";
}

$nome = "Darlison";
$sobreNome = "Silva";

if ( $nome == $sobreNome){
    echo "Verdadeira<br>";
}else{
    echo "COMPARAÇÃO FALSA <br>";
}

echo "EXERCÍCIO <br>";

$numero = 10;
$valor = 30;

if ($numero == $valor) {
    echo "VERDADEIRO <br>";
}else{
    echo "FALSO <br>";
}
