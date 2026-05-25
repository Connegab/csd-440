<?php
/*
    Gabe Conner
    Module 9 Assignment
    Query page used to search the database.
*/

$conn = mysqli_connect("localhost", "root", "", "baseball_01");

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Search Records</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 20px;
        }

        form {
            background: white;
            padding: 20px;
            width: 400px;
            border-radius: 8px;
        }

        input {
            width: 100%;
            padding: 8px;
            margin-bottom: 10px;
        }

        table {
            border-collapse: collapse;
            width: 100%;
            margin-top: 20px;
            background: white;
        }

        th, td {
            border: 1px solid black;
            padding: 10px;
            text-align: left;
        }

        th {
            background-color: #0066cc;
            color: white;
        }
    </style>
</head>
<body>

<h1>Search Baseball Players</h1>

<form method="post" action="">

    <label>Enter Team Name:</label>
    <input type="text" name="teamName">

    <input type="submit" value="Search">

</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $teamName = trim($_POST['teamName']);

    $sql = "SELECT * FROM players
            WHERE teamName LIKE '%$teamName%'";

    $result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {

    echo "<table>";
    echo "<tr>
            <th>ID</th>
            <th>Player Name</th>
            <th>Team</th>
            <th>Position</th>
            <th>Age</th>
            <th>Home Runs</th>
          </tr>";

    while ($row = mysqli_fetch_assoc($result)) {

        echo "<tr>";
        echo "<td>" . $row['id'] . "</td>";
        echo "<td>" . $row['playerName'] . "</td>";
        echo "<td>" . $row['teamName'] . "</td>";
        echo "<td>" . $row['position'] . "</td>";
        echo "<td>" . $row['age'] . "</td>";
        echo "<td>" . $row['homeRuns'] . "</td>";
        echo "</tr>";
    }

    echo "</table>";

} else {

    echo "<p>No records found.</p>";
}
}

mysqli_close($conn);
?>

<br>
<a href="GabeIndex.php">Return to Index</a>

</body>
</html>