<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Emprestimo</title>
</head>
<body>
<?php 

$valorCasa = $_POST ['valorCasa'];
$salarioComprador = $_POST ['salarioComprador'];
$anosPagar = $_POST ['anosPagar'];
$prestacao;

$prestacao = $valorCasa / ($anosPagar * 12);

if($prestacao > ($salarioComprador * 0.3)){

echo "Emprestimo Negado! <br> Valor das prestações ficou R$" . number_format($prestacao, 2, '.', ',');

}
else{
    echo "Emprestimo Aprovado! <br> Valor das prestações ficou R$" . number_format($prestacao, 2, '.', ',');
}


?>
</body>
</html>