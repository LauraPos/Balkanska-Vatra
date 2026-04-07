<?php
include 'connection.php'; 

// haal username en password uit het formulier
$username = $_POST['username'];
$password = $_POST['password'];

// query om te checken of de gebruiker bestaat
$sql = "SELECT * FROM users WHERE username = :username AND password = :password";
$stmt = $conn->prepare($sql);
$stmt->bindParam(":username", $username);
$stmt->bindParam(":password", $password);
$stmt->execute();

$user = $stmt->fetch(PDO::FETCH_ASSOC);

if ($user) {
    // succesvol inloggen
    header("Location: ../dashboard.php"); // pagina waar je naartoe wilt sturen
    exit;
} else {
    // foutmelding bij verkeerde login
    header("Location: ../login.php?error=1"); // login pagina met foutmelding
    exit;
}
?>