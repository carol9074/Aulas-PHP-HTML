<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>$funcionario</title>
</head>
<body>
<?php 

$funcionario = $_POST ['funcionario'];
$salario = $_POST ['salario'];
$anosTrabalho = $_POST ['anosTrabalho'];
$salarioFinal;



if($anosTrabalho <= 2.9){

 $salarioFinal = $salario + ($salario * 0.03);
    echo " Seu salario teve um aumento de 3% e ficou R$ $salarioFinal";
}

if($anosTrabalho >= 3 && $anosTrabalho < 10){

    $salarioFinal = $salario + ($salario * 0.125);
    echo "Seu salario teve um aumento de 12.5% e ficou R$ $salarioFinal";
}

else if($anosTrabalho > 10){

    $salarioFinal = $salario + ($salario * 0.2);
    echo  "Seu salario teve um aumento de 20%  e ficou R$ $salarioFinal";
}

?>
</body>
</html>