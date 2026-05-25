<?php
/*
    Gabe Conner
    Module 8 Assignment
    Populates the players table.
*/

$conn = mysqli_connect("localhost", "root", "", "baseball_01");

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "INSERT INTO players
(playerName, teamName, position, age, homeRuns)
VALUES
('Aaron Judge', 'Yankees', 'Outfield', 32, 58),
('Mike Trout', 'Angels', 'Outfield', 33, 40),
('Mookie Betts', 'Dodgers', 'Shortstop', 31, 28),
('Bryce Harper', 'Phillies', 'First Base', 32, 35),
('Julio Rodriguez', 'Mariners', 'Outfield', 24, 25)";

if (mysqli_query($conn, $sql)) {
    echo "Records inserted successfully.";
} else {
    echo "Error inserting records: " . mysqli_error($conn);
}

mysqli_close($conn);
?>