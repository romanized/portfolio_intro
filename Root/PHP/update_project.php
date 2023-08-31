<?php
require("../PHP/require.php");

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $projectId = $_POST['projectToUpdate'];
    $updatedName = $_POST['updatedName'];
    $updatedDescription = $_POST['updatedDescription'];
    $updatedDate = $_POST['updatedDate'];

    $sql = "UPDATE Projecten SET naam = '$updatedName', beschrijving = '$updatedDescription', datum = '$updatedDate' WHERE ID = '$projectId'";

    if ($conn->query($sql) === TRUE) {
        header('Location: admin.php');
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
?>
