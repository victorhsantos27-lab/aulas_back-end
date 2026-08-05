<?php
/*Faça um código em que calcule a tabuada do número indicado em uma variável com o nome de $tabuada,
 aplique o laço de repetição for para calcular a tabuada do número indicado, e exiba o resultado na tela.*/

 $tabuada = $_GET['tabuada'] ?? '';
for ($i = 1; $i <= 10; $i++) {
    $resultado = $tabuada * $i;
    echo "$tabuada x $i = $resultado<br>";
}
?>