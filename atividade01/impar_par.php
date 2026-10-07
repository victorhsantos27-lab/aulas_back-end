<?php
if (isset($_POST['numero'])) {
    $numero = $_POST['numero'];
    echo ParOuImpar($numero); 
} 
function ParOuImpar($numero) {
    if ($numero % 2 == 0) {
        return "O número $numero é par.";
    } else {
        return "O número $numero é ímpar.";
    }
}