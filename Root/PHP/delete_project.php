<?php
require("require.php");

if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] === false) {
    header("Location: login.php");
    exit;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $projectID = $_POST['projectID'];
    $sql = "DELETE FROM Projecten WHERE ID = :id";
    $stmt = $conn->prepare($sql);

    if ($stmt) {
        $stmt->bindParam(':id', $projectID, PDO::PARAM_INT);
        $stmt->execute();
        header("Location: ../PAGES/projecten.php");
        exit;
    } else {
        echo "Error preparing SQL statement <br> Probeer het later nog een keer";
    }
}
?>
