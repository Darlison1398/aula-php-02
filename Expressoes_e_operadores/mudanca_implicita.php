<?php


 echo 5 / 2;
 echo '<br>';

 if (is_float(5/2)){
    echo 'true';
 }else{
    echo 'false';
 }

 echo '<br>';

 echo 2 . 3;
 echo '<br>';

 if (is_float(2 . 3)){
    echo 'true';
 }else{
    echo 'false';
 }

 echo '<br>';

 if (is_string(2 . 3)){
    echo 'true';
 }else{
    echo 'false';
 }

 echo '<br>';

 $nome = 'Darlison';
 $sobreNome = 'Silva';

 $nomeCompleto = $nome . " " . $sobreNome;

 echo $nomeCompleto;