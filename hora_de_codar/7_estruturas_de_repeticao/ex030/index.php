<?php
$arr = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20];

for ($c = 0; $c < count($arr); $c++) {
    $numero = $arr[$c];

    if ($numero % 2 == 0) {
        echo "Número: $numero <br>";
    }
}
