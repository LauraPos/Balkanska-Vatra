<?php
include 'connection.php';

$sql = "INSERT INTO reserveren (name, email, date, time, guests, notes)
        VALUES (:name, :email, :date, :time, :guests, :notes)";

$stmt = $conn->prepare($sql);
$stmt->bindParam(":name", $_POST['name']);
$stmt->bindParam(":email", $_POST['email']);
$stmt->bindParam(":date", $_POST['date']);
$stmt->bindParam(":time", $_POST['time']);
$stmt->bindParam(":guests", $_POST['guests']);
$stmt->bindParam(":notes", $_POST['notes']);
$stmt->execute();

header("Location: ../../index.php?reservation=success#reservations");
?>
