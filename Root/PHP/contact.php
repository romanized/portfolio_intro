<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['submit'])) {    
        $naam = $_POST['naam'];
        $email = $_POST['email'];
        $telefoonnummer = $_POST['telefoonnummer'];
        $bedrijfsnaam = $_POST['bedrijfsnaam'];
        $bericht = $_POST['bericht'];
            $insertsql = "INSERT INTO `Contact`
                (`naam`,
                `email`, 
                `telefoonnummer`,
                `bedrijfsnaam`, 
                `bericht`) 
                VALUES
                ('$naam',
                '$email',
                '$telefoonnummer',
                '$bedrijfsnaam',
                '$bericht')";
            if ($db_connection->query($insertsql) == TRUE) {
                header("Location: ../index.php");
            } else {
                echo "Error :" . $insertsql . "<br>" . $db_connection->error;
            }
        }
    }

