<!DOCTYPE html>
<html>
<head>
    <title>Drop Table</title>
</head>
<body>

<h2>Drop Movies Table</h2>

<?php
$conn = mysqli_connect("localhost", "student1", "pass", "baseball_01");

$sql = "DROP TABLE IF EXISTS gabe_movies";

if (mysqli_query($conn, $sql)) {
    echo "Table dropped successfully.";
} else {
    echo "Error dropping table: " . mysqli_error($conn);
}

mysqli_close($conn);
?>

</body>
</html>