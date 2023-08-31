<?php

session_start();

include_once 'connection.php';

$table = 'contacts';

$id;

if(!empty($_GET)){

    $id = $_GET['id'];

}

if(!empty($id)){

$query = "SELECT * FROM $table WHERE id = :id";

$stmt = $conn->prepare($query);

$stmt->bindParam(":id", $id);

$stmt->execute();

$contact = $stmt->fetch();

}else{

    //Retorna todos os contatos
    $contacts = [];
    
    $query = "SELECT * FROM $table";
    
    $stmt = $conn->prepare($query);
    
    $stmt->execute();
    
    $contacts = $stmt->fetchAll();

}