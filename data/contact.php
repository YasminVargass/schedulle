<?php
 session_start();
require_once './connection.php';

    $nameInput = $_POST['name'];    
    $phoneInput = $_POST['phone'];    
    $obsInput = $_POST['observations'];    


$stmt = $conn->prepare("INSERT INTO contacts (name, phone, observations) VALUES (:nome, :phone, :observations)");

$stmt->bindParam(":nome", $nameInput);
$stmt->bindParam(":phone", $phoneInput);
$stmt->bindParam(":observations", $obsInput);
$stmt->execute();

?>