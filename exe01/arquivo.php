<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exe01</title>
</head>
<body>

<?php 

$num = $_POST['num'];
$num2 = $_POST['num2'];

if($num > $num2){
echo "O primeiro valor é maior";
}

else if($num < $num2){
echo "O segundo valor é maior";
}

else{   
echo "Não existe valor maior,os dois são iguais";
}

?>
    
</body>
</html>

