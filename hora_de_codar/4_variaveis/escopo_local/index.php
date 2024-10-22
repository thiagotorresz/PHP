<?php
$n = 13;
echo "Global $n/ 1";
echo "<br>";

function teste()
{
    $n = 15;

    echo "Teste $n";
    echo "<br>";
}
function testando()
{
    $n = 651;

    echo "Testando $n";
    echo "<br>";
}
$n = 100;
teste();
testando();
echo "Global $n/ 2";