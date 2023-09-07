<?php

$num = array();
$pares;
$impar;
$positivos;
$negativos;

for($i = 0; $i < 10; $i++){
    echo "Informe um numero\n";
    $num[$i] = readline();

}

for($i = 0; $i < 10; $i++){

    if($num[$i] % 2 == 0){
        $pares++;
    }else{
        $impar++; 
    }

    if($num[$i] < 0){
    $negativos++;
    }else{
        $positivos++;
    }
}

echo "Temos $pares numeros pares\n";
echo "Temos $impar numeros impar\n";
echo "Temos $positivos numeros positivos\n";
echo "Temos $negativos nuemros negativos\n";


?>