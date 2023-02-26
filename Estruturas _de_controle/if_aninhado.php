<?php

$nome = "Darlison";
$idade = 24;
$profissao = "Programador";

if ($nome != "Darlison"){
    echo "Nome: ". $nome . ",  está no primeiro if <br>";

    if ($idade == 24){
        echo "Idade: ". $idade . ",  está no segundo if <br>";

        if ($profissao == "Programador"){
            echo "Profissão: ". $profissao  . ",  está no terceiro if <br>";
        }
    }
}else{
    echo "as opções estão erradas.";
}