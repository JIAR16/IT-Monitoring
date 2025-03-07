<?php

include('dbconfig.php');

// Ensure the POST data is set
$id = $_POST['id'];
$user = $_POST['user'];
$department = $_POST['department'];
$device_name = $_POST['device_name'];
$processor = $_POST['processor'];
$motherboard = $_POST['motherboard'];
$memory = $_POST['memory'];
$gpu = $_POST['gpu'];
$storage = $_POST['storage'];
$monitor = $_POST['monitor'];
$os = $_POST['os'];
$ip = $_POST['ip'];

// Prepare the update query to update all fields
$sql = "UPDATE hardware_inventory 
        SET user = ?, department = ?, device_name = ?, processor = ?, motherboard = ?, memory = ?, gpu = ?, storage = ?, monitor = ?, operating_system = ?, ip = ?
        WHERE id = ?";

$stmt = $conn->prepare($sql);
$stmt->bind_param("sssssssssssi", $user, $department, $device_name, $processor, $motherboard, $memory, $gpu, $storage, $monitor, $os, $ip, $id);

// Execute the statement and check if the update was successful
if ($stmt->execute()) {
    header("Location: blank.php?success=1");
    exit();
} else {
    header("Location: blank.php?error=1");
    exit();
}

$stmt->close();
$conn->close();

?>
