<?php
$host='localhost';
$db='agenda';
$user='root';
$pass='';


try{

//TENTA CONECTAR

    $conn = new PDO("mysql:host=$host; dbname=$db", $user, $pass);

//Ativa os erros

$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


}catch(PDOException $e){

//PDOEXCEPTION => ERRO => $e

    $error = $e->getMessage();

    echo "Erro: $error";


}