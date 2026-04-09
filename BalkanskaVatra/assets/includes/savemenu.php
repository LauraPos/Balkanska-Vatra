<?php
include 'connection.php';

$stmt = $conn->prepare("INSERT INTO gerechten (gang, naam, beschrijving, prijs) VALUES (:gang, :naam, :beschrijving, :prijs)");
$stmt->bindParam(':gang', $_POST['gang']);
$stmt->bindParam(':naam', $_POST['naam']);
$stmt->bindParam(':beschrijving', $_POST['beschrijving']);
$stmt->bindParam(':prijs', $_POST['prijs']);
$stmt->execute();

header("Location: ../../admin.php");
exit;
?>