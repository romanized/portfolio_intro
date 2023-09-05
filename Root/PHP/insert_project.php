<?php
require("require.php"); 

if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] === false) {
    header("Location: login.php");
    exit;
}

$projectName = $_POST['projectName'];
$dateOfCreation = $_POST['dateOfCreation'];
$description = $_POST['description'];
$imageURL = $_POST['imageURL']; 
$link = $_POST['link'];

$sql = "INSERT INTO Projecten (naam, image, datum, beschrijving, link) VALUES (:naam, :image, :datum, :beschrijving, :link)";

$stmt = $conn->prepare($sql);

if ($stmt) {
    $stmt->bindParam(':naam', $projectName, PDO::PARAM_STR);
    $stmt->bindParam(':image', $imageURL, PDO::PARAM_STR); 
    $stmt->bindParam(':datum', $dateOfCreation, PDO::PARAM_STR);
    $stmt->bindParam(':beschrijving', $description, PDO::PARAM_STR);
    $stmt->bindParam(':link', $link, PDO::PARAM_STR);

    $stmt->execute();

    echo "<br> Nieuw project is toegevoegd <a href='../PAGES/projecten.php'>Projecten</a>";
} else {
    echo "Error preparing SQL statement <br> Probeer het later nog een keer";
}