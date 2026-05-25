<!DOCTYPE html>
<html>
<head>
    <title>Query Table</title>
</head>
<body>

<h2>Movie Records</h2>

<?php
$conn = mysqli_connect("localhost", "student1", "pass", "baseball_01");

$sql = "SELECT * FROM gabe_movies";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {

    echo "<table border='1' cellpadding='8'>";
    echo "<tr>
            <th>ID</th>
            <th>Title</th>
            <th>Director</th>
            <th>Year</th>
            <th>Genre</th>
            <th>Rating</th>
          </tr>";

    while($row = mysqli_fetch_array($result)) {
        echo "<tr>";
        echo "<td>" . $row['movie_id'] . "</td>";
        echo "<td>" . $row['title'] . "</td>";
        echo "<td>" . $row['director'] . "</td>";
        echo "<td>" . $row['release_year'] . "</td>";
        echo "<td>" . $row['genre'] . "</td>";
        echo "<td>" . $row['rating'] . "</td>";
        echo "</tr>";
    }

    echo "</table>";

} else {
    echo "No records found.";
}

mysqli_close($conn);
?>

</body>
</html>