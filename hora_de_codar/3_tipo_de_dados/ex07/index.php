<?php
$pessoas = [
    'nome' => 'Thiago',
    'idade' => 15,
    'país' => 'Brasil',
    'cor' => 'preto'
];

print_r($pessoas);

echo '<br>';

if($pessoas['idade'] >= 18){
    echo "Maior de idade!";
} else{
    echo "Menor de idade!";
}