<?php
require("require.php");

if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] === false) {
    header("Location: login.php");
    exit;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $projectID = $_POST['projectID'];
    $projectName = $_POST['projectName'];
    $dateOfCreation = $_POST['dateOfCreation'];
    $description = $_POST['description'];
    $imageURL = $_POST['imageURL']; 
    $link = $_POST['link'];

    $sql = "UPDATE Projecten SET naam=:naam, image=:image, datum=:datum, beschrijving=:beschrijving, link=:link WHERE ID=:id";
    $stmt = $conn->prepare($sql);

    if ($stmt) {
        $stmt->bindParam(':id', $projectID, PDO::PARAM_INT);
        $stmt->bindParam(':naam', $projectName, PDO::PARAM_STR);
        $stmt->bindParam(':image', $imageURL, PDO::PARAM_STR);
        $stmt->bindParam(':datum', $dateOfCreation, PDO::PARAM_STR);
        $stmt->bindParam(':beschrijving', $description, PDO::PARAM_STR);
        $stmt->bindParam(':link', $link, PDO::PARAM_STR);

        $stmt->execute();

        header("Location: ../PAGES/projecten.php");
        exit;
    } else {
        echo "Error preparing SQL statement <br> Probeer het later nog een keer";
    }
}
?>
