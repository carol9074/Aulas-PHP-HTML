<?php


$nome = array();
$nota = array();
//$media = array();
$maior = $nota[$i];
$menor = $nota[$i];


for ($i = 0; $i < 2; $i++) {
    echo "Informe seu nome\n";
    $nome[$i] = readline();

    echo "Informe sua nota\n";
    $nota[$i] = readline();
}

if ($nota[$i] > $maior[$i]){
    echo "$nome[$i] e sua nota é $nota[$i]";
}else{
    echo "erro";
}

for ($i = 0; $i < 2; $i++) {
    echo "$nome[$i]";
    echo "$nota[$i]";
}
