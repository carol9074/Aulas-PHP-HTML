<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Area</title>
</head>
<body>
<?php 

$largura = $_POST ['largura'];
$comprimento = $_POST ['comprimento'];
$area;

$area = $largura * $comprimento;

if($area < 100){
echo "Terreno popular";

}

if($area > 100 && $area < 500){
echo "Terreno master";

}

else if($area > 500){
echo "Terreno vip";

}

?>
</body>
</html>