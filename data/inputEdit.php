<?php

require_once './process.php';



 if(!empty($id)){

 $nameUpdated = $_POST['name'];
 $phoneUpdated = $_POST['phone'];
 $observationsUpdated = $_POST['observations'];


 $query = "UPDATE $table SET name = :name, phone= :phone, observations = :observations WHERE id = :id";

 $stmt= $conn->prepare($query);

 $stmt->bindParam(":name", $nameUpdated);
 $stmt->bindParam(":phone", $phoneUpdated);
 $stmt->bindParam(":observations", $observationsUpdated);
 $stmt->bindParam(":id", $id);


    
 }
 try{

    $stmt->execute();
    $_SESSION['msg'] = "Contato editado com sucesso!";
    
    }catch(PDOException $e){
    
        $error = $e->getMessage();
        echo "Error: $error";
    
    }
    header("Location:" . "../index.php");
    
    $conn = null;
?>
