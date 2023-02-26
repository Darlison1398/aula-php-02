<?php

$arr = [];

for ($i = 0; $i <= 10; $i++){
    array_push($arr, $i);
}

print_r($arr);

echo "<br>";
echo "<br>";

#  exercício 02
echo "EXERCÍCIO 02 <br>";

$ab = [];

for ($i = 0; $i <= 20; $i++){
    array_push($ab, $i);
}

print_r($ab);

for ($i = 0; $i < count($ab); $i++){
    if($ab[$i] % 2 != 0){
        echo "Número ímpar: $ab[$i] <br>";
    }
}
