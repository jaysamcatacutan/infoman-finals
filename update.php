<?php
    include "config.php";
    $id = $_GET['id'];
    $record = $con->query("SELECT * FROM hospital WHERE id=$id")->fetch_assoc();

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $name = $_POST['name'];
        $date_of_birth = $_POST['date_of_birth'];
        $gender = $_POST['gender'];
        $contact = $_POST['contact'];
        $disease_record = $_POST['disease_record'];
        $blood_type = $_POST['blood_type'];
        $registration_date = $_POST['registration_date'];
        $doctor_in_charge = $_POST['doctor_in_charge'];
        $con->query("UPDATE hospital SET name='$name', date_of_birth='$date_of_birth', gender='$gender', contact='$contact',disease_record='$disease_record', blood_type='$blood_type', registration_date='$registration_date', doctor_in_charge='$doctor_in_charge' WHERE id=$id");
        header('Location: config.php');
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Patient Record</title>
</head>
<body>
    <form method='POST'>

        <a href="update.php">Add Record</a>
        <a href="read.php">View Record List</a>

        <input type="text" name="name" value="<?= $record['name'] ?>" required>
        <input type="date" name="date_of_birth" value="<?= $record['date_of_birth'] ?>" required>
        <select name="gender">
            <option value="Male" <?= $record['gender'] == 'Male' ? 'selected' : '' ?>>Male</option>
            <option value="Female" <?= $record['gender'] == 'Female' ? 'selected' : '' ?>>Female</option>
        </select>
        <input type="number" name="contact" value="<?= $record['contact'] ?>" required>
        <input type="text" name="disease_record" value="<?= $record['disease_record'] ?>" placeholder="Disease Record" required>
        <input type='text' name="blood_type" value="<?= $record['blood_type'] ?>" required>
        <input type="date" name="registration_date" value="<?= $record['registration_date'] ?>" required>
        <input type='text' name="doctor_in_charge" value="<?= $record['doctor_in_charge'] ?>" required>
        <button type="submit" name="submit">Update Record</button>

        
        
            
    </form>
</body>
</html>