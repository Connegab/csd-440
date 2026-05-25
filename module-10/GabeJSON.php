<?php
/*
    Gabe Conner
    Module 10: JSON Assignment

    This program will collect the user input from a form,
    and then convert the data into JSON format using the function json_encode(),
    and it wil then display the formatted JSON output.
*/
?>

<!DOCTYPE html>
<html>
<head>
    <title>Gabe JSON Assignment</title>

    <style>

        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 20px;
        }

        h1 {
            color: #333;
        }

        form {
            background-color: white;
            padding: 20px;
            width: 450px;
            border-radius: 8px;
        }

        input {
            width: 100%;
            padding: 8px;
            margin-bottom: 12px;
        }

        input[type=submit] {
            background-color: #0066cc;
            color: white;
            border: none;
            cursor: pointer;
        }

        .output {
            background-color: white;
            padding: 20px;
            margin-top: 20px;
            border-radius: 8px;
            width: 700px;
        }

        pre {
            background-color: #eeeeee;
            padding: 15px;
            overflow-x: auto;
        }

        .error {
            color: red;
            font-weight: bold;
        }

    </style>

</head>

<body>

<h1>JSON Data Form</h1>

<form method="post" action="">

    <label>First Name:</label>
    <input type="text" name="firstName">

    <label>Last Name:</label>
    <input type="text" name="lastName">

    <label>Age:</label>
    <input type="number" name="age">

    <label>Email:</label>
    <input type="email" name="email">

    <label>Phone Number:</label>
    <input type="text" name="phone">

    <label>City:</label>
    <input type="text" name="city">

    <label>State:</label>
    <input type="text" name="state">

    <label>Favorite Sport:</label>
    <input type="text" name="sport">

    <input type="submit" value="Submit Data">

</form>

<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $firstName = trim($_POST['firstName']);
    $lastName = trim($_POST['lastName']);
    $age = trim($_POST['age']);
    $email = trim($_POST['email']);
    $phone = trim($_POST['phone']);
    $city = trim($_POST['city']);
    $state = trim($_POST['state']);
    $sport = trim($_POST['sport']);

    if (
        !empty($firstName) &&
        !empty($lastName) &&
        !empty($age) &&
        !empty($email) &&
        !empty($phone) &&
        !empty($city) &&
        !empty($state) &&
        !empty($sport)
    ) {

        $data = array(

            "First Name" => $firstName,
            "Last Name" => $lastName,
            "Age" => $age,
            "Email" => $email,
            "Phone Number" => $phone,
            "City" => $city,
            "State" => $state,
            "Favorite Sport" => $sport

        );

        $jsonData = json_encode($data, JSON_PRETTY_PRINT);

        echo "<div class='output'>";
        echo "<h2>JSON Output</h2>";
        echo "<pre>$jsonData</pre>";
        echo "</div>";

    } else {

        echo "<div class='output'>";
        echo "<p class='error'>Error: Please fill out all fields correctly.</p>";
        echo "</div>";

    }
}

?>

</body>
</html>