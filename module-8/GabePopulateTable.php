<!DOCTYPE html>
<html>
<head>
    <title>Populate Table</title>
</head>
<body>

<h2>Populate Movies Table</h2>

<?php
$conn = mysqli_connect("localhost", "student1", "pass", "baseball_01");

// Insert sample data
$sql = "INSERT INTO gabe_movies (title, director, release_year, genre, rating) VALUES
('Inception', 'Christopher Nolan', 2010, 'Sci-Fi', 8.8),
('The Dark Knight', 'Christopher Nolan', 2008, 'Action', 9.0),
('Interstellar', 'Christopher Nolan', 2014, 'Sci-Fi', 8.6),
('Gladiator', 'Ridley Scott', 2000, 'Action', 8.5),
('Titanic', 'James Cameron', 1997, 'Romance', 7.9)";

if (mysqli_query($conn, $sql)) {
    echo "Records inserted successfully.";
} else {
    echo "Error inserting data: " . mysqli_error($conn);
}

mysqli_close($conn);
?>

</body>
</html>