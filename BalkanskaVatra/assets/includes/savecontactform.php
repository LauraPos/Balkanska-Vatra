<?php
include 'connection.php';

$sql = "INSERT INTO contact (name, email, subject, message) 
        VALUES (:name, :email, :subject, :message)";

$stmt = $conn->prepare($sql);
$stmt->bindParam(":name", $_POST['name']);
$stmt->bindParam(":email", $_POST['email']);
$stmt->bindParam(":subject", $_POST['subject']);
$stmt->bindParam(":message", $_POST['message']);
$stmt->execute();

// redirect naar home na insert
header("Location: ../../index.php?contact=success#contact");
exit;
?>