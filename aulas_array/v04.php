<?php

$num = array();
$num2 = array();

for ($i = 0; $i < 10; $i++) {

    echo "Informe um número:\n";
    $num[$i] = readline();
}

for ($i = 0; $i < 10; $i++) {

    echo "Informe outro número:\n";
    $num2[$i] = readline();
}

for ($i = 0; $i < 10; $i++) {

    $multiplicacao = $num[$i] * $num2[$i];
    echo "O resultado da multiplicação é:$multiplicacao\n";
}
