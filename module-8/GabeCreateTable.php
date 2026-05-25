<!DOCTYPE html>
<html>
<head>
    <title>Create Table</title>
</head>
<body>

<h2>Create Movies Table</h2>

<?php
$conn = mysqli_connect("localhost", "student1", "pass", "baseball_01");

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// SQL to create table
$sql = "CREATE TABLE gabe_movies (
    movie_id INT AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(100),
    director VARCHAR(100),
    release_year INT,
    genre VARCHAR(50),
    rating DECIMAL(2,1)
)";

if (mysqli_query($conn, $sql)) {
    echo "Table created successfully.";
} else {
    echo "Error creating table: " . mysqli_error($conn);
}

mysqli_close($conn);
?>

</body>
</html>