<?php

include 'connection.php';

// newmenu.php
$sql = "SELECT * FROM gerechten;";
$stmt = $conn->prepare($sql);
$stmt->execute();
$result = $stmt->fetchAll();