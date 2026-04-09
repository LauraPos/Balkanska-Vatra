<?php
include 'connection.php';

$id = $_POST['id'];

$stmt = $conn->prepare("DELETE FROM gerechten WHERE id = :id");
$stmt->bindParam(':id', $id);
$stmt->execute();

header("Location: ../../admin.php");
exit;
?>