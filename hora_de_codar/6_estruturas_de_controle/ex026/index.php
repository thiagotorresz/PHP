<?php 
    $velocidade = 60;
    $vmax = 40;

    if($velocidade < $vmax){
        echo "Parabéns, o motorista está dentro da velocidade permitida!";
    } else if($velocidade == $vmax){
        echo "Cuidado, o motorista está na velocidade máxima permitida!";
    } else if($velocidade > $vmax){
        echo "PARE, o motorista foi multado por excesso de velocidade.";
    }
?>