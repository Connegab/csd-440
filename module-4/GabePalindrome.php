<!-- GabePalindrome.php -->
<!DOCTYPE html>
<html>
<head>
    <title>Gabe Conner - Palindrome Checker</title>
</head>
<body>

<h2>Palindrome Checker</h2>

<?php
// Function to check if a string is a palindrome
function isPalindrome($str) {

    // Convert to lowercase and remove spaces for better comparison
    $cleanStr = strtolower(str_replace(" ", "", $str));

    // Reverse the string
    $reverseStr = strrev($cleanStr);

    // Compare original and reversed
    if ($cleanStr == $reverseStr) {
        return true;
    } else {
        return false;
    }
}

// Array of test strings (3 palindrome, 3 not)
$testStrings = [
    "racecar",
    "madam",
    "level",
    "hello",
    "world",
    "php"
];

// Loop through each string and display results
foreach ($testStrings as $string) {

    // Clean + reverse for display
    $clean = strtolower(str_replace(" ", "", $string));
    $reversed = strrev($clean);

    echo "<p>";
    echo "Original: " . $string . "<br>";
    echo "Reversed: " . $reversed . "<br>";

    // Call function
    if (isPalindrome($string)) {
        echo "Result: This IS a palindrome";
    } else {
        echo "Result: This is NOT a palindrome";
    }

    echo "</p><hr>";
}
?>

</body>
</html>