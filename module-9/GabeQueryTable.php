<?php
/*
    Gabe Conner
    Module 8 Assignment
    Displays all records from the players table.
*/

$conn = mysqli_connect("localhost", "root", "", "baseball_01");

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT * FROM players";
$result = mysqli_query($conn, $sql);
?>

<!DOCTYPE html>
<html>
<head>
    <title>View Records</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
            background-color: #f4f4f4;
        }

        table {
            border-collapse: collapse;
            width: 100%;
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

<h1>Baseball Players Table</h1>

<table>
<tr>
    <th>ID</th>
    <th>Player Name</th>
    <th>Team</th>
    <th>Position</th>
    <th>Age</th>
    <th>Home Runs</th>
</tr>

<?php
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
?>

</table>

<br>
<a href="GabeIndex.php">Return to Index</a>

</body>
</html>

<?php
mysqli_close($conn);
?>