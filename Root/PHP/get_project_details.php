<?php
require("require.php");

if (!isset($_GET['ID'])) {
    echo json_encode(['error' => 'No ID provided']);
    exit;
}

$ID = $_GET['ID'];

$sql = "SELECT * FROM Projecten WHERE ID = :ID";
$stmt = $conn->prepare($sql);
$stmt->bindParam(':ID', $ID, PDO::PARAM_INT);

if ($stmt->execute()) {
    $project = $stmt->fetch(PDO::FETCH_ASSOC);
    echo json_encode($project);
} else {
    echo json_encode(['error' => 'Kan project niet erbij halen']);
}
?>
