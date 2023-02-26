<?php

 // ele pula um loop para a próxima parte.
 // Diferentemente do break, o continue pula apenas uma instrução.

 $a =  10;

 while($a > 0){
    echo "Executando o loop $a <br>";

    if ($a == 5 || $a  == 7){
        echo "Pulou a execução $a <br>";

        $a--;
        continue;
    }

    $a--;
 }


 echo "<br>";
 echo "<br>";
 // EXERCÍCIO 

 echo "EXERCÍCIO <br>";
 echo "<br>";

