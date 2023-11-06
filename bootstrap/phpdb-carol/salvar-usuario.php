<?php

switch ($_REQUEST["acao"]) {
    case 'cadastrar':
        $nome = $_POST['nome'];
        $ende = $_POST['ende'];
        $email = $_POST['email'];


        //inserindo os parametros no banco
        $sql = "INSERT INTO user (nome, ende, email) 
        VALUES ('{$nome}', '{$ende}', '{$email}')";

        //salavando na variavel $res e depois mandando para banco

        $res = $conn->query($sql);

        if ($res == true) {
            print "<script>alert('Cadastro realizado com sucesso!');</script>";
            print "<script>location.href='?page=listar';</script>";
        } else {
            print "<script>alert('Cadastro não foi realizado!');</script>";
            print "<script>location.href='?page=listar';</script>";
        }
        break;

    case 'editar':

        //chamando a global pelo metodo POST

        $nome = $_POST['nome'];
        $ende = $_POST['ende'];
        $email = $_POST['email'];

        //fazendo atualização de dados

        $sql = "UPDATE user SET
        nome='{$nome}',
        ende='{$ende}',
        email='{$email}'
        WHERE id=" . $_REQUEST["id"];

        $res = $conn->query($sql);

        //entra na condição para vereficar de foi atualizado

        if ($res == true) {
            print "<script>alert('Editado com sucesso!');</script>";
            print "<script>location.href='?page=listar';</script>";
        } else {
            print "<script>alert('Não foi possivel editar!');</script>";
            print "<script>location.href='?page=listar';</script>";
        }
        break;

    case 'excluir':

        //chamando a tabela no banco e direcioando o ID do user para deletar

        $sql = "DELETE FROM user WHERE id=" . $_REQUEST["id"];

        $res = $conn->query($sql);

        //aqui entra na condição se realmente dejeta deletar 

        if ($res == true) {
            print "<script>alert('Deletado com sucesso!');</script>";
            print "<script>location.href='?page=listar';</script>";
        } else {
            print "<script>alert('Não foi possivel deletar!');</script>";
            print "<script>location.href='?page=listar';</script>";
        }
        break;
}
