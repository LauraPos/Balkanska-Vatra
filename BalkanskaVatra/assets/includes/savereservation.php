<?php
include './connection.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $name   = trim($_POST['name']   ?? '');
    $email  = trim($_POST['email']  ?? '');
    $date   = trim($_POST['date']   ?? '');
    $time   = trim($_POST['time']   ?? '');
    $guests = trim($_POST['guests'] ?? '');
    $notes  = trim($_POST['notes']  ?? '');

    if ($name && $email && $date && $time) {
        try {
            $sql  = "INSERT INTO reservations (name, email, datum, tijd, gasten, opmerkingen, aangemaakt_op)
                     VALUES (:name, :email, :datum, :tijd, :gasten, :opmerkingen, NOW())";
            $stmt = $conn->prepare($sql);
            $stmt->bindParam(':name',        $name);
            $stmt->bindParam(':email',       $email);
            $stmt->bindParam(':datum',       $date);
            $stmt->bindParam(':tijd',        $time);
            $stmt->bindParam(':gasten',      $guests);
            $stmt->bindParam(':opmerkingen', $notes);
            $stmt->execute();

            header('Location: ../../index.php?reservation=success#reservations');
            exit;
        } catch (PDOException $e) {
            header('Location: ../../index.php?reservation=error#reservations');
            exit;
        }
    } else {
        header('Location: ../../index.php?reservation=missing#reservations');
        exit;
    }
}

header('Location: ../../index.php');
exit;
?>
