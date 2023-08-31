<?php
require("require.php"); // Replace this with the path to your database connection file

// Make sure to start your session if you haven't already
// session_start();

// Check if the user is logged in
if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] === false) {
    header("Location: login.php");
    exit;
}

// Fetch form values
$projectName = $_POST['projectName'];
$dateOfCreation = $_POST['dateOfCreation'];
$description = $_POST['description'];

// File upload path
$target_dir = __DIR__ . "/MEDIA/"; // Specify your uploads directory path here (added a slash to make it an absolute path)
$target_file = $target_dir . basename($_FILES["image"]["name"]);

// Check if the directory exists, if not then create one
if (!file_exists($target_dir)) {
    mkdir($target_dir, 0777, true);
}

// Attempt to move the uploaded file to server
if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
    echo "Het bestand ". basename($_FILES["image"]["name"]). " is geupload.";

    // SQL Insert logic with PDO (changed bind_param to bindParam as you are using PDO)
    $sql = "INSERT INTO Projecten (naam, image, datum, beschrijving) VALUES (:naam, :image, :datum, :beschrijving)";
    
    $stmt = $conn->prepare($sql);

    if ($stmt) {
        $stmt->bindParam(':naam', $projectName, PDO::PARAM_STR);
        $stmt->bindParam(':image', $target_file, PDO::PARAM_STR);
        $stmt->bindParam(':datum', $dateOfCreation, PDO::PARAM_STR);
        $stmt->bindParam(':beschrijving', $description, PDO::PARAM_STR);

        $stmt->execute();
        
        echo "<br> Nieuw project is toegevoegd <a href='../PAGES/projecten.php'>Projecten</a>";
    } else {
        echo "Error preparing SQL statement";
    }
    
} else {
    echo "Sorry, there was an error uploading your file.";
}
?>
