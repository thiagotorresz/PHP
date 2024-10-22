<?php 
    $c = 4;

    while($c <= 30){
        echo "$c | adicionando + 2 <br>";

        if($c == 24){
            echo "Fim do Loop";
            break;
        }

        $c += 2;
    }
?>