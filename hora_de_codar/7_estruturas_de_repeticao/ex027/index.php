<?php
$arr = [
    'Olá',
    15,
    'Felipe',
    true,
    13.2,
    'Array',
    'PHP',
    [],
    'Teste',
    'Haha'
];

$n = 0;
$x = count($arr);

while ($n < $x) {
    if (is_string($arr[$n])) {
        echo $arr[$n] . "<br>";
    }

    $n++;
}

echo "Fim do Loop!";
