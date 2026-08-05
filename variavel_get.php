<?php 

$n1 = $_GET["n1"] ?? ''; 
$n2 = $_GET["n2"] ?? ''; 

$resultado = ($n1 + $n2);

echo ("$n1 + $n2 = " . $resultado);

//Para testar:
//http://localhost/victor.com.br/variavel_get.php?n1=3&n2=2