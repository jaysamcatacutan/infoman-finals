<?php
include "config.php";
$result = $con->query("SELECT * FROM hospital");
?>
<!DOCTYPE html>
<html>
<head>
    <title>Patient Records</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<h2>Hospital Patient Management System</h2>
<a href="create.php">Add New Patient</a>
<table border="2">
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Date of Birth</th>
        <th>Gender</th>
        <th>Contact</th>
        <th>Disease Record</th>
        <th>Blood Type</th>
        <th>Registration Date</th>
        <th>Doctor in Charge</th>
        <th>Actions</th>
    </tr>

    <?php while ($row = $result->fetch_assoc()): ?>
        <tr>
            <td><?= $row['id'] ?></td>
            <td><a href="profile.php?id=<?= $row['id'] ?>"><?= $row['name'] ?></a></td>
            <td><?= $row['date_of_birth'] ?></td>
            <td><?= $row['gender'] ?></td>
            <td><?= $row['contact'] ?></td>
            <td><?= $row['disease_record'] ?></td>
            <td><?= $row['blood_type'] ?></td>
            <td><?= $row['registration_date'] ?></td>
            <td><?= $row['doctor_in_charge'] ?></td>
            
            <td>
                <a href="update.php?id=<?= $row['id'] ?>">Edit</a> |
                <a href="delete.php?id=<?= $row['id'] ?>" onclick='return confirm("Are you sure?")'>Delete</a>
            </td>
        </tr>
    <?php endwhile; ?>
</table>
</body>
</html>