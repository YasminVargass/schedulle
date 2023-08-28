<?php

session_start();

include_once 'connection.php';
$contacts = [];

$table = 'contacts';
$query = "SELECT * FROM $table";

$stmt = $conn->prepare($query);

$stmt->execute();

$contacts = $stmt->fetchAll();