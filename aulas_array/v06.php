<?php 

$num = array();

for ($i = 0; $i < 10; $i++){
    echo "Informe um número:\n";
    $num[$i] = readline();

    
}

$num = array_reverse($num,false);

for ($i = 0; $i < 10; $i++){
    echo "$num[$i]";
}
