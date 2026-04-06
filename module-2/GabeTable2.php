<!-- GabeTable2.php -->
<!DOCTYPE html>
<html>
<head>
    <title>Gabe Conner - PHP Table 2</title>
</head>
<body>

<h2>Random Number Table</h2>

<table border="1">

<?php
// Outer loop for rows
for ($row = 1; $row <= 5; $row++) {
?>
    <tr>
<?php
    // Inner loop for columns
    for ($col = 1; $col <= 5; $col++) {
        $randomNumber = rand(1, 100); // generate random number
?>
        <td><?php echo $randomNumber; ?></td>
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