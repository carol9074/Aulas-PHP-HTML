<h1>Lista de usuario</h1>

<?php


$sql = "SELECT * FROM user";
$res = $conx->query($sql);

$qdt = $res->num_rows;

if ($qtd > 0) {


    echo"<table class= table table-hover table-striped table-bordere>";
    echo"<tr>";
    echo"<tr>id</td>";
    echo"<tr>nome</td>";
    echo"<tr>email</td>";
    echo"<tr>ende</td>";
    echo"</tr>";

    while ($row = $res->fetch_object()) {

        echo "<tr>";
        echo "<td> .$row->id"."</td>";
        echo "<td> .$row->nome"."</td>";
        echo "<td> .$row->email"."</td>";
        echo "<td> .$row->ende"."</td>";
        echo "</tr>";

        echo $row->id;
        echo $row->nome;
        echo $row->email;
        echo $row->ende;
    }
}









?>