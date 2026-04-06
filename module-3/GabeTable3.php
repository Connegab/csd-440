<!-- GabeTable3.php -->
<!DOCTYPE html>
<html>
<head>
    <title>Gabe Conner - PHP Table 3</title>
</head>
<body>

<h2>Random Sum Table</h2>

<?php
// include external function file
require 'functions.php';
?>

<table border="1">

<?php
for ($row = 1; $row <= 5; $row++) {
?>
    <tr>
<?php
    for ($col = 1; $col <= 5; $col++) {

        // generate two random numbers
        $num1 = rand(1, 50);
        $num2 = rand(1, 50);

        // use function to get sum
        $sum = getSum($num1, $num2);
?>
        <td><?php echo $sum; ?></td>
<?php
    }
?>
    </tr>
<?php
}
?>

</table>

</body>
</html>