<?php
    $n = $_POST['numero'];
    $expoente = $_POST['expoente'];
    echo "<br>Potência: " .pow($n, $expoente);
?>