<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>km</title>
</head>
<body>
<?php

$km = $_POST ['km'];
$dias = $_POST ['dias'];
$carro = $_POST ['carro'];
$valor;

if (($carro == "popular") && ($km <= 1000)) {
    $valorCarro = 90;
    $valor = ($valorCarro * $dias) + ($km * 0.20);
    echo "R$$valor";
}

if (($carro == "popular") && ($km > 1000)) {
    $valorCarro = 90;
    $valor = ($valorCarro * $dias) + ($km * 0.10);
    echo "R$$valor";
}

if (($carro == "luxo") && ($km <= 2000)) {
    $valorLuxo = 150;
    $valor =($valorCarro * $dias) + ($km  * 0.30);
    echo "R$$valor";
}

if (($carro == "luxo") && ($km > 2000)) {
    $valorLuxo = 150;
    $valor = ($valorCarro * $dias) + ($km  * 0.25);
    echo "R$$valor";
}
?>

</body>
</html>
