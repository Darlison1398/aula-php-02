<?php
 
 $a = 5;
 $b = 3;

 $c = "5";

 if ($a == $b){
    echo $a . " " . $b . "<br>";
    echo "São diferentes <br>";
 }else{
    
    echo $a . " " . $b . "<br>";
    echo "São diferentes <br>";
 }

 echo "<br>";

 if ($a === $c){
    
    echo $a . " " . $c . "<br>";
    echo "São Iguais <br>";
 }else{
    
    echo $a . " " . $c . "<br>";
    echo "São diferentes porque uma é Inteiro e a outra é do tipo String <br>";
 }

