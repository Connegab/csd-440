<?php
/*
    Gabe Conner
    Module 8 Assignment
    Creates the players table.
*/

$conn = mysqli_connect("localhost", "root", "", "baseball_01");

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "CREATE TABLE IF NOT EXISTS players (
            id INT AUTO_INCREMENT PRIMARY KEY,
            playerName VARCHAR(50),
            teamName VARCHAR(50),
            position VARCHAR(30),
            age INT,
            homeRuns INT
        )";

if (mysqli_query($conn, $sql)) {
    echo "Table created successfully.";
} else {
    echo "Error creating table: " . mysqli_error($conn);
}

mysqli_close($conn);
?>