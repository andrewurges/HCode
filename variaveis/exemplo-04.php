<?php

//Retornando parâmetros na URL
$param1 = (int)$_GET["a"]; //localhost/variaveis/exemplo-04.php?a=123
$param2 = (int)$_GET["b"]; //localhost/variaveis/exemplo-04.php?a=123&b=456
echo $param1 . " " . $param2;

//Retorna o IP do computador
$ip = $_SERVER["REMOTE_ADDR"];
echo $ip;

//Retorna a rota da página atual 
$script = $_SERVER["SCRIPT_NAME"];
echo $script;

?>