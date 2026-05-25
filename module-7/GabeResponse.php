<!DOCTYPE html>
<html>
<head>
    <title>Form Response</title>
</head>
<body>

<h2>Form Submission Result</h2>

<?php
// Retrieve form data
$firstName = $_POST['firstName'];
$lastName = $_POST['lastName'];
$age = $_POST['age'];
$email = $_POST['email'];
$gender = $_POST['gender'];
$genre = $_POST['genre'];
$subscribe = isset($_POST['subscribe']) ? "Yes" : "No";

// Validation check
if (
    empty($firstName) ||
    empty($lastName) ||
    empty($age) ||
    empty($email) ||
    empty($gender) ||
    empty($genre)
) {
    echo "<h3 style='color:red;'>Error: Please fill out all required fields correctly.</h3>";
} else {

    // Display formatted results
    echo "<h3>Submitted Information:</h3>";
    echo "<table border='1' cellpadding='8'>";
    
    echo "<tr><th>Field</th><th>Value</th></tr>";
    echo "<tr><td>First Name</td><td>$firstName</td></tr>";
    echo "<tr><td>Last Name</td><td>$lastName</td></tr>";
    echo "<tr><td>Age</td><td>$age</td></tr>";
    echo "<tr><td>Email</td><td>$email</td></tr>";
    echo "<tr><td>Gender</td><td>$gender</td></tr>";
    echo "<tr><td>Favorite Genre</td><td>$genre</td></tr>";
    echo "<tr><td>Subscribed</td><td>$subscribe</td></tr>";
    
    echo "</table>";
}
?>

</body>
</html>