<h1>Testando o require e o include</h1><hr>

<?php

// Require: com ele, inserimos um arquivo php, ou até mesmo um HTML em outro;
// O require gera erro fatal se o arquivo não existir, parando o script;

include "teste.php";

echo "<br>";

echo "Esse é o segundo exemplo do require <br>";
echo "<br>";
require "exemplo_02.php";

echo "<br>";
echo "<br>";


?>
