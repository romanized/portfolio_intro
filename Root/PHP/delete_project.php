<?php
require("../PHP/require.php");

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $projectId = $_POST['projectToDelete'];

    $sql = "DELETE FROM Projecten WHERE ID = '$projectId'";

    if ($conn->query($sql) === TRUE) {
        header('Location: admin.php');
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
?>
