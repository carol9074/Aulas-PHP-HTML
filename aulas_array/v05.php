<?php

$num;
$mes = [
   1 => "janeiro",
   2 => "fevereiro", 
   3 => "março",
   4 => "abril", 
   5 => "maio", 
   6 => "junho",
   7 => "julho",
   8 => "agosto", 
   9 => "setembro",
   10 => "outubro",
   11 => "novembro",
   12 => "dezembro"];


    echo "Informe um número:";
    $num = readline();

if(isset($mes [$num] )){
$res = $mes[$num];
echo "O mes corresponde ao número sitado é $res";
}else{
    echo "Número inválido";
}

?>
