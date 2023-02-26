<?php

$idade = 16;
$idade2 = 18;
$idade3 = 20;

$maioriDADE = 18;

if ($idade >= $maioriDADE){
    echo "Maior de idade <br>";
}else{
    echo "Menor de idade <br>";
}

if ($idade2 >= $maioriDADE){
    echo "Maior de iadade, tem que votar <br>";
}else{
    echo "Menor de idade, voto não obrigatório <br>";
}

if ($idade3 >= $maioriDADE){
    echo "Voto obrigatório pq vc é maior de idade <br>";
}else{
    echo "Voto não obrigatório pq vc não é maior de idade. <br>";
}