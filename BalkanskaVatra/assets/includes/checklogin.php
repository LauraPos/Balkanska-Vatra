<?php
session_start();
require 'connection.php';

$username = $_POST['username'];
$password = $_POST['password'];

$sql = "SELECT * FROM admin WHERE username = :username AND password = :password";
$stmt = $conn->prepare($sql);
$stmt->bindParam(":username", $username);
$stmt->bindParam(":password", $password);
$stmt->execute();

$user = $stmt->fetch(PDO::FETCH_ASSOC);

if ($user) {
    $_SESSION['username'] = $user['username'];
    $_SESSION['admin_logged_in'] = true;
    
    // Naar admin.php in dezelfde folder
    header("Location: ./admin.php");
    exit;
} else {
    header("Location: ./login.php?error=1");
    exit;
}
?>