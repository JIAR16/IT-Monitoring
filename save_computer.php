<?php
// Include database configuration
include 'dbconfig.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Collect form data
    $user = $_POST['user'];
    $department = $_POST['department'];
    $device_name = $_POST['device_name'];
    $memory = $_POST['memory'];
    $processor = $_POST['processor'];
    $motherboard = $_POST['motherboard'];
    $gpu = $_POST['gpu'];
    $storage = $_POST['storage'];
    $monitor = $_POST['monitor'];
    $os = $_POST['os'];
    $ip = $_POST['ip'];

    // Prepare SQL query
    $sql = "INSERT INTO hardware_inventory (user, department, device_name, processor, motherboard, memory, gpu, storage, monitor, operating_system, ip) 
            VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

    $stmt = $conn->prepare($sql);

    // Corrected bind_param with types and matching variables
    // 's' for string, 'i' for integer, 'd' for double
    $stmt->bind_param(
        "sssssssssss", 
        $user, 
        $department, 
        $device_name, 
        $processor, 
        $motherboard, 
        $memory, 
        $gpu, 
        $storage, 
        $monitor, 
        $os,
        $ip
    );

    // Execute query and check for success
    if ($stmt->execute()) {
        // Redirect with success message
        header("Location: blank.php?success=1");
        exit();
    } else {
        // Redirect with error message
        header("Location: blank.php?error=1");
        exit();
    }
}
?>
