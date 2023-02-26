<?php
 
 $x = 10;

 $y =& $x;

 echo $x;
 echo '<br>';
 echo $y;
 echo '<br>';

 $sy = 30;

 echo 'Atribuição após a referência.<br>';
 echo $x;
 echo '<br>';
 echo $y;

