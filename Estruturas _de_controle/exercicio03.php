<?php

 $velocidade = 30;

 if ($velocidade < 40){
    echo "Motorista está de vagar. <br>";
 }elseif($velocidade == 50){
    echo "Motorista deve tomar cuidado <br>";
 }elseif($velocidade > 50){
    echo "Motorista está multado.";
 }