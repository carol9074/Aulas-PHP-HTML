<?php


//dados do nosso banco de dados!
define('HOST', 'localhost');
define('USER', 'root');
define('PASS', '');
define('BASE', 'dbusuario');


//Realizando conexão com o banco atraves do mysqli 
$conn = new mysqli(HOST, USER, PASS, BASE);

?>