<?php 
    $n1 = 13.98;
    $s1 = "Thiago";
    $n2 = 67;
    

    if(is_numeric($n1) == true){
        $m = $n1 * 2;
        echo "$n1 X 2 = $m <br>";
        if($m > 100){
            echo "Entrou no IF maior que 100 <br>";
        }else{
            echo "Entrou no ELSE menor quer 100 <br>";
        }
    }else{
        echo "O valor informado não é um número <br>";
    }
    echo "<br>";
    if(is_numeric($s1) == true){
        $m = $s1 * 2;
        echo "$s1 X 2 = $m <br>";
        if($m > 100){
            echo "Entrou no IF maior que 100 <br>";
        }else{
            echo "Entrou no ELSE menor quer 100 <br>";
        }
    }else{
        echo "O valor informado não é um número <br>";
    }
    echo "<br>";
    if(is_numeric($n2) == true){
        $m = $n2 * 2;
        echo "$n2 X 2 = $m <br>";
        if($m > 100){
            echo "Entrou no IF maior que 100 <br>";
        }else{
            echo "Entrou no ELSE menor quer 100 <br>";
        }
    }else{
        echo "O valor informado não é um número <br>";
    }
?>