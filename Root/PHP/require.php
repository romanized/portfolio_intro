<?php

$db_host = 'localhost';
$db_user = 'root';
$db_pass = '';
$db_data = 'portfolio';

if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

$db_connection = new mysqli($db_host, $db_user, $db_pass, $db_data);

if ($db_connection->connect_errno) {
    die('Failed to connect to MySQL: ' . $db_connection->connect_error);
}

$con = new mysqli($db_host, $db_user, $db_pass, $db_data);

if ($con->connect_errno) {
    die('Failed to connect to MySQL: ' . $con->connect_error);
}

try {
    $conn = new PDO("mysql:host=$db_host;dbname=$db_data", $db_user, $db_pass);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}


