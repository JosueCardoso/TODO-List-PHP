<?php

$sName = "localhost";
$uName = "root";
$pass = "";
$db_name = "to_do_list";

try{
    $conn = new PDO("mysql:host=$sName;dbname=$db_name",$uName, $pass);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}catch(PDOEXCeption $e){
    echo "Não possível abrir conexão com o banco. Erro: ". $e->getMessage();
}