<?php
include 'assets/includes/connection.php';

    $sql = "INSERT INTO contact (email, subject, message) 
            VALUES (:email, :subject, :message)";

    $stmt = $conn->prepare($sql);
    $stmt->bindParam(":email", $_POST['email']);
    $stmt->bindParam(":subject", $_POST['subject']);
    $stmt->bindParam(":message", $_POST['message']);
    $stmt->execute();

?>