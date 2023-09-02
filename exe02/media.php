<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Media_alunos</title>
</head>

<body>
    <?php

    $not1 =  $_POST['not1'];
    $not2 =  $_POST['not2'];
   

    $media = $not1 + $not2;
    
    if ($media <= 4.9) {
        echo "REPROVADO!";
    } else if ($media >= 5 && $media <= 6.9) {
        echo "RECUPERAÇÃO!";
    } else if ($media >= 7) {
        echo "APROVADO!";
    }

    ?>
</body>

</html>