<?php
 session_start();

require_once './connection.php';

$table = 'contacts';

$id;
if(!empty($_GET)){

    $id = $_GET['id'];
  

}


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

 $stmt->execute();
    
 }

?>