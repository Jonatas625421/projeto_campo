<?php

$conexao = mysqli_connect("localhost", "root", "", "projeto_campo");

if (!$conexao) {
    echo "Error: Unable to connect to MySQL." . PHP_EOL;
    echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
    echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
    exit;
}

mysqli_set_charset($conexao,'utf8');

$sql = sprintf("select * from users where email='%s' and password='%s'", $_POST['email'], $_POST['password']);

$data = mysqli_query($conexao,$sql) or die("Erro");
$row = mysqli_fetch_array($data);

if(is_null($row)){
	header('location:login.php?login=false');
}

die('logou');
