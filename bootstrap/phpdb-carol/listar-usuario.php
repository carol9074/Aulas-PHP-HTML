<h1>Lista de Usuarios</h1>

<?php

$sql = "SELECT * FROM user";
$res = $conn->query($sql);

$qtd = $res->num_rows;

//verifica se existem registros retornados pela consulta
if ($qtd > 0) {

    print "<table class='table table-hover table-striped table-bordered'>";
    print "<tr>";
    print "<td>ID</td>";
    print "<td>Nome</td>";
    print "<td>Endereço</td>";
    print "<td>Email</td>";
    print "</tr>";

//imprimi os dados encontrado na tabela
    while ($row = $res->fetch_object()) {
        print "<tr>";
        print "<td>" . $row->id . "</td>";
        print "<td>" . $row->nome . "</td>";
        print "<td>" . $row->ende . "</td>";
        print "<td>" . $row->email . "</td>";
        print "<td>
            <button onclick=\"location.href='?page=editar&id=$row->id';\" class='btn btn-success'>Editar</button>
            <button onclick=\"if(confirm('tem certeza que deseja excluir o usuario?')){
                location.href='?page=salvar&acao=excluir&id=" . $row->id . ";'
            }else{false;}\" class='btn btn-danger'>Deletar</button>
            </td>";
        print "</tr>";
    }

    print "</table>";
} else {
    print "<h1>NENHUM USUARIO ENCONTRADO!</h1>";
}



?>