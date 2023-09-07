<?php

$masculino = 0;
$maiores;
$nome = array();
$idade = array();
$cidade = array();
$sexo = array();

for ($i = 0; $i < 3; $i++) {

    echo "Informe seu nome:";
    $nome[$i] = readline();

    echo "Informe sua idade:";
    $idade[$i] = readline();

    echo "Informe seu sexo:";
    $sexo[$i] = readline();

    echo "Informe sua cidade:";
    $cidade[$i] = readline();
}

for ($i = 0; $i < 3; $i++) {

    if ($sexo[$i] == "masculino") {
        $masculino = $masculino + 1;
    } else {
        $feminino = $feminino + 1;
    }
    if ($idade[$i] > 18) {
        $maiores++;
    } else {
        $idade;
    }

    echo "$nome[$i] tem $idade[$i] anos\n";
}
echo "Temos $masculino homens cadastrados.\n ";
echo "Tem $maiores maiores de 18 anos.\n"

?>