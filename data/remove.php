<?php

require_once './process.php';

if(!empty($id)){

    $query = "DELETE FROM $table WHERE id = :id";

    $stmt= $conn->prepare($query);

    $stmt->bindParam(":id", $id);

    try{

 $stmt->execute();
 $_SESSION["msg"] = "Contato excluído com sucesso.";
 }catch(PDOException $e){

    $error = $e->getMessage();
    echo "Error: $error";
 }
}

header("Location:" . "../index.php");