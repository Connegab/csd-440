<!DOCTYPE html>
<html>
<head>
    <title>Gabe Conner - MyInteger</title>
</head>
<body>

<h2>MyInteger Class Test</h2>

<?php
// Define class
class MyInteger {

    private $value;

    // Constructor
    public function __construct($value) {
        $this->value = $value;
    }

    // Getter
    public function getValue() {
        return $this->value;
    }

    // Setter
    public function setValue($value) {
        $this->value = $value;
    }

    // Check even
    public function isEven() {
        return $this->value % 2 == 0;
    }

    // Check odd
    public function isOdd() {
        return $this->value % 2 != 0;
    }

    // Check prime
    public function isPrime() {
        if ($this->value <= 1) return false;

        for ($i = 2; $i < $this->value; $i++) {
            if ($this->value % $i == 0) {
                return false;
            }
        }
        return true;
    }
}

// Create two instances
$num1 = new MyInteger(7);
$num2 = new MyInteger(10);

// Function to display results
function displayResults($obj) {
    echo "<p>";
    echo "Value: " . $obj->getValue() . "<br>";
    echo "Even: " . ($obj->isEven() ? "Yes" : "No") . "<br>";
    echo "Odd: " . ($obj->isOdd() ? "Yes" : "No") . "<br>";
    echo "Prime: " . ($obj->isPrime() ? "Yes" : "No") . "<br>";
    echo "</p>";
}

// Display results
displayResults($num1);
displayResults($num2);

// Test setter
$num2->setValue(13);
echo "<h3>After Updating Second Value</h3>";
displayResults($num2);

?>

</body>
</html>