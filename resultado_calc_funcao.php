<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {    
    $n1 = $_POST['n1'];
    $n2 = $_POST['n2'];
    $n3 = $_POST['n3'];

    function media($n1, $n2, $n3)
    {  
        $media = ($n1 + $n2 + $n3) / 3;
       
       
       
        echo "<h3> Resultado da média: </h3>"; 
        echo "<n> A média das notas </n> <br>";  
        echo "---------------------<br>";
        echo "Nota 1: $n1 <br>";
        echo "Nota 2: $n2 <br>";    
        echo "Nota 3: $n3 <br>";  
        echo "---------------------<br>";
        echo "Média é $media<br>";
        echo "---------------------<br>";
    }
    if ($n1 != "" || $n2 != "" || $n3 != ""){ 
        media($n1, $n2, $n3);
    }else {
        echo "Nenhuma nota foi digitada!";
    } 
}
?>