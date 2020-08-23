<?php 
    $n = $_POST["n"];
    $ultimo = 1;
    $penultimo = 0;
        
    echo "0<br/>1<br/>"; 

    for($contadora=1 ; $contadora<=$n-2 ; $contadora++)
    {
        $novo = $ultimo + $penultimo;
        echo $novo."<br/>";
        
        $penultimo = $ultimo;
        $ultimo = $novo;
    } 
?>
 