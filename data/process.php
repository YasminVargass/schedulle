<?php

session_start();

include_once 'connection.php';

$table = 'contacts';

    
    //Retorna todos os contatos
    $contacts = [];
    
    $query = "SELECT * FROM $table";
    
    $stmt = $conn->prepare($query);
    
    $stmt->execute();
    
    $contacts = $stmt->fetchAll();