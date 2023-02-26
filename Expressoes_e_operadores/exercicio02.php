<?php

 $operacao = '5' * 12;

 echo $operacao ."<br>";

 echo gettype($operacao);
 echo "<br>";
 
 // gettype no array
 echo gettype([]);
 echo "<br>";

 // gettype no float
 echo gettype(12.5);
 echo "<br>";

 // gettype na String
 echo gettype("teste");