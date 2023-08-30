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

<head>
    <?php require_once './components/head.php'; ?>
    <title>Contato Adicionado</title>
</head>

<html>
<header>
    <?php require_once './components/header.php'; ?>
</header>
<h1>Contato adicionado com sucesso</h1>
<p>Clique <a href="../index.php">aqui</a> para voltar ao início.</p>

</html>