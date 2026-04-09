<?php
include 'connection.php';

$id = $_POST['id'];
$action = $_POST['action'];

if ($action === 'accept') {
    $stmt = $conn->prepare("UPDATE reserveren SET status = 'accepted' WHERE id = :id");
    $stmt->bindParam(':id', $id);
    $stmt->execute();
} elseif ($action === 'decline') {
    $stmt = $conn->prepare("DELETE FROM reserveren WHERE id = :id");
    $stmt->bindParam(':id', $id);
    $stmt->execute();
}

header("Location: ../../admin.php");
exit;
?>