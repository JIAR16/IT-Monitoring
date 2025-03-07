<?php
include('dbconfig.php');

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Fetch the computer data based on the id
    $sql = "SELECT * FROM hardware_inventory WHERE id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        echo json_encode($row);
    } else {
        echo json_encode([]);
    }

    $stmt->close();
    $conn->close();
}
?>
