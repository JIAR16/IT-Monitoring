<?php
// delete_computer.php
include('dbconfig.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['id'])) {
    $id = intval($_POST['id']);

    $sql = "DELETE FROM hardware_inventory WHERE id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $id);

    if ($stmt->execute()) {
        header("Location: blank.php?success=1");
    } else {
        header("Location: blank.php?error=1");
    }

    $stmt->close();
    $conn->close();
} else {
    header("Location: your_page.php?error=1");
}
?>
