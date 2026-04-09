<?php
include 'connection.php';

$id = $_POST['id'];

$stmt = $conn->prepare("UPDATE gerechten SET naam = :naam, beschrijving = :beschrijving, prijs = :prijs, gang = :gang WHERE id = :id");
$stmt->bindParam(':naam', $_POST['naam']);
$stmt->bindParam(':beschrijving', $_POST['beschrijving']);
$stmt->bindParam(':prijs', $_POST['prijs']);
$stmt->bindParam(':gang', $_POST['gang']);
$stmt->bindParam(':id', $id);
$stmt->execute();

header("Location: ../../editmenu.php");
exit;
?>  1