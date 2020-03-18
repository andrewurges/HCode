<?php

$nome = "André";
$sobrenome = "Wurges";
$nomeCompleto = $nome . " " . $sobrenome;

echo $nomeCompleto;
echo "<br/>";

unset($nomeCompleto); //Elimita a variável da memória

if (isset($nomeCompleto)) { //Testa se existe na memória
    echo $nomeCompleto;
}

?>