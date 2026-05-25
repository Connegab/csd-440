<!DOCTYPE html>
<html>
<head>
    <title>Gabe Conner - Customers</title>
</head>
<body>

<h2>Customer List</h2>

<?php
// Sample array of customers
$customers = [
    ["first" => "John", "last" => "Doe", "age" => 25, "phone" => "111-111-1111"],
    ["first" => "Jane", "last" => "Smith", "age" => 30, "phone" => "222-222-2222"],
    ["first" => "Mike", "last" => "Brown", "age" => 22, "phone" => "333-333-3333"],
    ["first" => "Sara", "last" => "Davis", "age" => 28, "phone" => "444-444-4444"],
    ["first" => "Chris", "last" => "Wilson", "age" => 35, "phone" => "555-555-5555"],
    ["first" => "Emma", "last" => "Taylor", "age" => 27, "phone" => "666-666-6666"],
    ["first" => "Jake", "last" => "Anderson", "age" => 40, "phone" => "777-777-7777"],
    ["first" => "Olivia", "last" => "Thomas", "age" => 24, "phone" => "888-888-8888"],
    ["first" => "Liam", "last" => "Jackson", "age" => 29, "phone" => "999-999-9999"],
    ["first" => "Sophia", "last" => "White", "age" => 31, "phone" => "000-000-0000"]
];

// Display all customers
echo "<h3>All Customers</h3>";
echo "<table border='1'>";
echo "<tr><th>First</th><th>Last</th><th>Age</th><th>Phone</th></tr>";

foreach ($customers as $c) {
    echo "<tr>";
    echo "<td>{$c['first']}</td>";
    echo "<td>{$c['last']}</td>";
    echo "<td>{$c['age']}</td>";
    echo "<td>{$c['phone']}</td>";
    echo "</tr>";
}
echo "</table>";

// Example 1: Find customers over age 30
echo "<h3>Customers Over Age 30</h3>";
foreach ($customers as $c) {
    if ($c["age"] > 30) {
        echo $c["first"] . " " . $c["last"] . " - Age: " . $c["age"] . "<br>";
    }
}

// Example 2: Find a specific last name
echo "<h3>Customer with Last Name 'Smith'</h3>";
foreach ($customers as $c) {
    if ($c["last"] == "Smith") {
        echo $c["first"] . " " . $c["last"] . " - Phone: " . $c["phone"] . "<br>";
    }
}

// Example 3: Find by phone number
echo "<h3>Customer with Phone 777-777-7777</h3>";
foreach ($customers as $c) {
    if ($c["phone"] == "777-777-7777") {
        echo $c["first"] . " " . $c["last"] . "<br>";
    }
}
?>

</body>
</html>