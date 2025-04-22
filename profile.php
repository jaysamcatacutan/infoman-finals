<?php
include "config.php";
$id = $_GET['id'];
$patient = $con->query("SELECT * FROM hospital WHERE id = $id")->fetch_assoc();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Patient Profile</title>
</head>
<body>
    <h2>Patient Profile</h2>

    <p><strong>Name:</strong> <?= $patient['name'] ?></p>
    <p><strong>Date of Birth:</strong> <?= $patient['date_of_birth'] ?></p>
    <p><strong>Gender:</strong> <?= $patient['gender'] ?></p>
    <p><strong>Contact:</strong> <?= $patient['contact'] ?></p>
    <p><strong>Disease Record:</strong> <?= $patient['disease_record'] ?>
    <p><strong>Blood Type:</strong> <?= $patient['blood_type'] ?></p>
    <p><strong>Registration Date:</strong> <?= $patient['registration_date'] ?></p>
    <p><strong>Doctor In Charge:</strong> <?= $patient['doctor_in_charge'] ?></p>

    <a href="read.php">← Back</a>
</body>
</html>
