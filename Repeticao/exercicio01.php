<?php

$array = [5, "Darlison", true, false, "opa", 12.4, "Teste", true, [], "palavra", 5, 5., "Alô"];

$x = count($array);

$y = 0;

while($y < $x){

    if(is_string($array[$y])){
        echo $array[$y] . "<br>";
    }

    $y++;
}

echo "<br>";

echo "EXERCICIO 02";

$a = 4;

while ($a <= 30){
    echo $a ."<br>";

    if ($a == 24){
        break;
    }

    $a+= 2;
}

echo "<br>";



