<?php
/*
    Gabe Conner
    Module 9 Assignment
    Form page used to add records into the database.
*/

$conn = mysqli_connect("localhost", "root", "", "baseball_01");

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$message = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $playerName = trim($_POST['playerName']);
    $teamName = trim($_POST['teamName']);
    $position = trim($_POST['position']);
    $age = trim($_POST['age']);
    $homeRuns = trim($_POST['homeRuns']);

    if (!empty($playerName) && !empty($teamName) && !empty($position)
        && !empty($age) && !empty($homeRuns)) {

        $sql = "INSERT INTO players
                (playerName, teamName, position, age, homeRuns)
                VALUES
                ('$playerName', '$teamName', '$position', '$age', '$homeRuns')";

        if (mysqli_query($conn, $sql)) {
            $message = "Record added successfully.";
        } else {
            $message = "Error: " . mysqli_error($conn);
        }

    } else {
        $message = "Please fill out all fields.";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Add Record</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
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
?>