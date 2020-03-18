<?php

//Tipos primitivos
$nome = "André";
$site = 'www.hcode.com.br';
$ano = 1991;
$salario = 5500.99;
$bloqueado = false;

//Tipos array
$frutas = array("Abacaxi", "Laranja", "Manga");
echo $frutas[2];

//Tipos objetos
$nascimento = new DateTime();

//Tipos resources e null
$arquivo = fopen("exemplo-03.php", "r");
$nulo = null;
$vazio = "";

?>