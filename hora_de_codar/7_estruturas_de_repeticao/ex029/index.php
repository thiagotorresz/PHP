<?php
$arr = [10, 20, 30, 40, 50, 60, 70, 80, 90, 100];

$c = 0;

while ($c < 10) {
    if ($arr[$c] == 30 || $arr[$c] == 40) {
        echo "Pulou! <br>";

        $c++;

        continue;
    } else {
        echo $arr[$c] . "<br>";

        $c++;
    }
}


echo "Fim do Loop!";