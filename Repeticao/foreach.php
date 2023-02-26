<?php

# Ele é orientado a um array;

$nomes = ["Darlison", "Jozelia", "Marcos", "Carla Cristina"];
$a = 24;

foreach($nomes as $nome){
    echo "O nome do índice atual é $nome <br>";

    if ($nome == "Darlison"){
        echo "Opa $a <br>";
    }
}