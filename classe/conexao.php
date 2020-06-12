<?php
// definições de host, database, usuário e senha
$host= "localhost";
$usuario = "root";
$senha = "";
$bd = "test_php";

$mysqli = new mysqli($host, $usuario, $senha, $bd);
//pagina de erro
if($mysqli->connect_errno)
    echo "falha na conexao: (".$mysqli->connect_errno.")".$mysqli->connect_errnor;
?>