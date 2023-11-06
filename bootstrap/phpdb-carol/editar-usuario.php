<h1>Editar de Usuario</h1>


<?php 
     
    //chamando a tabela e direcionando o ID do user para editar

    $sql = "SELECT * FROM user WHERE id=" . $_REQUEST["id"];
    $res = $conn->query($sql);
    $row = $res->fetch_object();

?>

 // chamando a função salvar pelo metodo POST

<form action="?page=salvar" method="POST">
    <input type="hidden" name="acao" value="editar">
    <input type="hidden" name="id" value="<?php print $row->id ?>">
    <div class="mb-3">
        <label>Nome</label>
        <input type="text" name="nome" value="<?php print $row->nome ?>" class="form-control">
    </div>
    <div class="mb-3">
        <label>Endereço</label>
        <input type="text" name="ende" class="form-control" value="<?php print $row->ende ?>">
    </div>
    <div class="mb-3">
        <label>Email</label>
        <input type="email" name="email" class="form-control" value="<?php print $row->email ?>">
    </div>
    <div class="mb-3">
        <button type="submit" class="btn btn-primary">Enviar</button>
    </div>
</form>