<?php
   
   echo "Olá, php! Hoje eu quero aprender!!!";

   $Pessoa = ['DARLISON SILVA', 24, 'DEUS É CONTIGO!'];
   echo '<br>';
   print_r($Pessoa);
   echo '<br>';

   echo $Pessoa[1];
   echo '<br>';

   if ($Pessoa[1] >= 18){
    echo 'é maior de idade!';
   }else{
    echo 'menor de idade!';
   }
?>