<?php 
    $str = "Thiago";
    $int = 13;
    $bool = true;
    $float = 8.7;

    if(is_int($str)){
        echo "A variável [$str] É um número inteiro <br>";
    } else{
        echo "A variável [$str] NÃO é um número inteiro <br>";
    }

    if(is_int($int)){
        echo "A variável [$int] É um número inteiro <br>";
    } else{
        echo "A variável [$int] NÃO é um número inteiro <br>";
    }

    if(is_int($bool)){
        echo "A variável [$bool] É um número inteiro <br>";
    } else{
        echo "A variável [$bool] NÃO é um número inteiro <br>";
    }

    if(is_int($float)){
        echo "A variável [$float] É um número inteiro <br>";
    } else{
        echo "A variável [$float] NÃO é um número inteiro <br>";
    }
?>