<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Peso</title>
</head>
<body>

<?php 
$peso = $_POST ['peso'];
$altura = $_POST ['altura'];
$imc;

$imc = $peso / ($altura * $altura);

if($imc <18.5){
    echo "A baixo do peso!";
}

if($imc >= 18.5 && $imc < 25){
    echo "Peso ideal!";
}

if($imc >= 25 && $imc < 30){
    echo "Sobrepeso!";
}

if($imc >= 30 && $imc < 40){
    echo "Obesidade!";
}

else if($imc > 40 ){
    echo "Obesidade móbida!";
}
?>

</body>
</html>