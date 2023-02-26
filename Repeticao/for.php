<?php
# a estrutura for, se dá da seguinte forma: CONDIÇÃO, ICREMENTO,/DECREMENTO.

$j = 0;
$nome = "Darlison Silva";

for($i = 0; $i  < 10; $i++){
    echo "Testando for $i <br>";

    if($i == 4){
        echo "$nome <br>";
    }
}

// eu também posso adicionar break

echo "<br>";

echo "EXERCÍCIO <br>";

$ar = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20];

for ($i = 0; $i < count($ar); $i++){
    if($ar[$i] %2 == 0){
        echo "Número: $ar[$i] <br>"; 
    }
}

